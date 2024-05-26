import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ReactiveFormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { ActivatedRoute, Router, RouterModule } from '@angular/router';
import { DatePickerComponent } from '../../formulario/date-picker/date-picker.component';
import { TimePickerEditarComponent } from './time-picker-editar/time-picker-editar.component';
import { SubirArchivoComponent } from '../../formulario/subir-archivo/subir-archivo.component';
import { FormsModule } from '@angular/forms';
import { FormularioDatosEditar } from '../../../interfaces/formulario.interface';
import { BddService } from '../../../core/services/bdd/bdd.service';
import { MatGridListModule } from '@angular/material/grid-list';
import { MatStepperModule } from '@angular/material/stepper';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import { MatSelectModule } from '@angular/material/select';
import { MatButtonModule } from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
import { MatDialog } from '@angular/material/dialog';
import { CalendarioComponent } from '../../calendario/calendario.component';
import { RouterOutlet } from '@angular/router';
import { TokenComponent } from '../../token/token.component';
import { ValidacionFormularioService } from '../../../core/services/validaciones-formulario/validaciones-formulario.service';
import { ApiFestivoService } from '../../../core/services/api-festivo/api-festivo.service';
import { ErrorDialogoComponent } from '../../error-dialogo/error-dialogo.component';
import { SatisfactorioDialogoComponent } from '../../satisfactorio-dialogo/satisfactorio-dialogo.component';

@Component({
  selector: 'app-editar-formulario',
  standalone: true,
  imports: [
    CommonModule,
    RouterModule,
    DatePickerComponent,
    TimePickerEditarComponent,
    SubirArchivoComponent,
    FormsModule,
    MatGridListModule,
    MatStepperModule,
    MatFormFieldModule,
    MatInputModule,
    MatSelectModule,
    MatButtonModule,
    ReactiveFormsModule,
    CalendarioComponent,
    RouterOutlet,
    TokenComponent,
    SatisfactorioDialogoComponent,
    MatIconModule
  ],
  templateUrl: './editar-formulario.component.html',
  styleUrls: ['./editar-formulario.component.css']
})
export class EditarFormularioComponent implements OnInit {
  id: number | null = null;
  datosFormulario: FormularioDatosEditar = {
    id_cita_taller: 0,
    fecha: '',
    hora: '',
    comentario: '',
    imagen: null,
    opcion: ''
  };
  imagenUrl: string | null = null;
  firstFormGroup!: FormGroup;
  secondFormGroup!: FormGroup;
  imagenCambiada: boolean = false;

  constructor(
    private route: ActivatedRoute,
    private router: Router,
    private _formBuilder: FormBuilder,
    private bddService: BddService,
    private validacionService: ValidacionFormularioService,
    private apiFestivoService: ApiFestivoService,
    private dialog: MatDialog
  ) {}

  ngOnInit(): void {
    this.route.paramMap.subscribe(params => {
      const idParam = params.get('id');
      if (idParam !== null) {
        this.id = +idParam; // Convertir a número si no es null
        this.obtenerCita(this.id); // Llama al método para obtener los datos de la cita
      } else {
        console.error('ID de cita no proporcionado.');
        this.router.navigate(['/citaAnterior']); // Opcional: redirigir al usuario
      }
    });

    this.firstFormGroup = this._formBuilder.group({
      fecha: ['', Validators.required],
      hora: ['', Validators.required]
    });
    this.secondFormGroup = this._formBuilder.group({
      comentario: ['', Validators.required],
      opcion: ['', Validators.required]
    });

    // Obtener los datos de festivos y configurarlos en el servicio de validación
    this.apiFestivoService.getData().subscribe(data => {
      const eventosFestivos = data
        .filter((evento: any) => evento.counties === null || evento.counties.includes('ES-AN'))
        .map((evento: any) => ({
          title: evento.localName,
          start: evento.date
        }));
      this.validacionService.setEventosFestivos(eventosFestivos);
    });
  }

  obtenerCita(id: number) {
    this.bddService.obtenerCitaId(id).subscribe(
      cita => {
        this.datosFormulario = {
          id_cita_taller: cita.id_cita_taller,
          fecha: cita.fecha,
          hora: cita.hora,
          comentario: cita.comentario,
          imagen: cita.imagen,
          opcion: cita.opcion
        };

        // Rellenar los campos del formulario con los datos obtenidos
        this.firstFormGroup.patchValue({
          fecha: cita.fecha,
          hora: cita.hora
        });
        this.secondFormGroup.patchValue({
          comentario: cita.comentario,
          opcion: cita.opcion
        });

        // Actualizar la URL de la imagen si existe
        if (cita.imagen) {
          this.imagenUrl = `http://localhost:8000/${cita.imagen}`;
        }
      },
      error => {
        console.error('Error al obtener los datos de la cita:', error);
        this.router.navigate(['/citaAnterior']); // Opcional: redirigir al usuario
      }
    );
  }

  actualizarFecha(fecha: Date) {
    this.datosFormulario.fecha = fecha.toISOString().split('T')[0];
    this.firstFormGroup.patchValue({ fecha: this.datosFormulario.fecha });
  }

  actualizarTiempo(hora: Date) {
    if (hora instanceof Date) {
      const horas = hora.getHours().toString().padStart(2, '0');
      const minutos = hora.getMinutes().toString().padStart(2, '0');
      this.datosFormulario.hora = `${horas}:${minutos}`;
      this.firstFormGroup.patchValue({ hora: this.datosFormulario.hora });
    } else {
      console.error('Invalid time format');
    }
  }

  archivoSeleccionado(imagen: File) {
    this.datosFormulario.imagen = imagen;
    this.imagenCambiada = true;
    this.updateImagePreview(imagen);
  }

  updateImagePreview(file: File) {
    const reader = new FileReader();
    reader.onload = () => {
      this.imagenUrl = reader.result as string;
    };
    reader.readAsDataURL(file);
  }

  enviarFormulario() {
    if (!this.imagenCambiada) {
      this.datosFormulario.imagen = null;
    }
    if (this.validacionService.esFormularioValido(this.datosFormulario)) {
      this.validacionService.verificarDisponibilidadCita(this.datosFormulario.fecha, this.datosFormulario.hora)
        .subscribe(disponible => {
          if (disponible) {
            const formData = new FormData();
            formData.append('id_cita_taller', this.datosFormulario.id_cita_taller.toString());
            formData.append('fecha', this.datosFormulario.fecha);
            formData.append('hora', this.datosFormulario.hora);
            formData.append('comentario', this.datosFormulario.comentario);
            formData.append('opcion', this.datosFormulario.opcion);
            if (this.imagenCambiada && this.datosFormulario.imagen) {
              formData.append('imagen', this.datosFormulario.imagen);
            }
  
            this.bddService.editarCitaUsuario(formData).subscribe({
              next: () => this.mostrarExito('Se ha creado la cita perfectamente. Recibirá un correo.'),
              error: error => this.mostrarError('Error al enviar datos: ' + error.message)
            });
          } else {
            this.mostrarError('La fecha y hora seleccionadas no están disponibles.');
          }
        });
    } else {
      this.mostrarError('Por favor complete todos los campos requeridos.');
    }
  }
  

  mostrarExito(mensaje: string) {
    const dialogRef = this.dialog.open(SatisfactorioDialogoComponent, {
      data: { message: mensaje }
    });

    dialogRef.afterClosed().subscribe(() => {
      this.router.navigate(['/citaAnterior']);
    });
  }

  mostrarError(mensaje: string) {
    this.dialog.open(ErrorDialogoComponent, {
      data: { message: mensaje }
    });
  }
}
