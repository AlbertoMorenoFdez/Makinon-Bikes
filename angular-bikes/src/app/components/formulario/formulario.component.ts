import { Component, OnInit } from '@angular/core';
import { CommonModule, formatDate } from '@angular/common';
import { FormBuilder, FormGroup, Validators, ReactiveFormsModule } from '@angular/forms';
import { MatStepperModule } from '@angular/material/stepper';
import { MatButtonModule } from '@angular/material/button';
import { MatDialogModule, MatDialog } from '@angular/material/dialog';
import { DatePickerComponent } from './date-picker/date-picker.component';
import { TimepickerComponent } from './timepicker/timepicker.component';
import { SubirArchivoComponent } from './subir-archivo/subir-archivo.component';
import { CalendarioComponent } from '../calendario/calendario.component';
import { TokenComponent } from '../token/token.component';
import { ErrorDialogoComponent } from '../error-dialogo/error-dialogo.component';
import { FormularioDatos } from '../../interfaces/formulario.interface';
import { BddService } from '../../core/services/bdd/bdd.service';
import { ValidacionFormularioService } from '../../core/services/validaciones-formulario/validaciones-formulario.service';
import { ApiFestivoService } from '../../core/services/api-festivo/api-festivo.service';
import { SatisfactorioDialogoComponent } from '../satisfactorio-dialogo/satisfactorio-dialogo.component';

@Component({
  selector: 'app-formulario',
  standalone: true,
  imports: [
    CommonModule,
    DatePickerComponent,
    TimepickerComponent,
    SubirArchivoComponent,
    ReactiveFormsModule,
    MatStepperModule,   
    MatButtonModule,
    MatDialogModule,
    CalendarioComponent,
    TokenComponent,
    SatisfactorioDialogoComponent
  ],
  templateUrl: './formulario.component.html',
  styleUrls: ['./formulario.component.css']
})
export class FormularioComponent implements OnInit {
  datosFormulario: FormularioDatos = {
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
    private _formBuilder: FormBuilder, 
    private bddService: BddService, 
    private validacionService: ValidacionFormularioService,
    private apiFestivoService: ApiFestivoService,
    private dialog: MatDialog
  ) {}

  ngOnInit() {
    this.firstFormGroup = this._formBuilder.group({
      fecha: ['d', Validators.required],
      hora: ['d', Validators.required]
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

  actualizarFecha(fecha: Date) {
    this.datosFormulario.fecha = formatDate(fecha, 'yyyy-MM-dd', 'en-US');
  }

  actualizarTiempo(tiempo: Date) {
    this.datosFormulario.hora = formatDate(tiempo, 'HH:mm:ss', 'en-US');
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
    // console.log('Datos del formulario:', this.datosFormulario);
    if (this.validacionService.esFormularioValido(this.datosFormulario)) {
      this.validacionService.verificarDisponibilidadCita(this.datosFormulario.fecha, this.datosFormulario.hora)
        .subscribe(disponible => {
          if (disponible) {
            this.bddService.crearCita(this.datosFormulario).subscribe({
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
      location.reload();
    });
  }

  mostrarError(mensaje: string) {
    this.dialog.open(ErrorDialogoComponent, {
      data: { message: mensaje }
    });
  }
}
