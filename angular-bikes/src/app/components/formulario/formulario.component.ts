import { Component } from '@angular/core';
import { DatePickerComponent } from './date-picker/date-picker.component';
import { TimepickerComponent } from './timepicker/timepicker.component';
import { SubirArchivoComponent } from './subir-archivo/subir-archivo.component';
import { FormsModule } from '@angular/forms';
import { FormularioDatos } from '../../interfaces/formulario.interface';
import { BddService } from '../../core/services/bdd/bdd.service';
import { formatDate } from '@angular/common';
import {MatGridListModule} from '@angular/material/grid-list';
import {MatStepperModule} from '@angular/material/stepper';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ReactiveFormsModule } from '@angular/forms'; 
import { CalendarioComponent } from '../calendario/calendario.component';
import { RouterOutlet } from '@angular/router';
import { TokenComponent } from '../token/token.component';
import { ValidacionFormularioService } from '../../core/services/validaciones-formulario/validaciones-formulario.service';
import { ApiFestivoService } from '../../core/services/api-festivo/api-festivo.service';
import { ErrorDialogoComponent } from '../error-dialogo/error-dialogo.component';
import { MatDialog } from '@angular/material/dialog';



@Component({
  selector: 'app-formulario',
  standalone: true,
  imports: [
    DatePickerComponent,
    TimepickerComponent,
    SubirArchivoComponent,
    FormsModule,
    MatGridListModule,
    MatStepperModule,
    ReactiveFormsModule,
    CalendarioComponent,
    RouterOutlet,
    TokenComponent,
    
  ],
  templateUrl: './formulario.component.html',
  styleUrls: ['./formulario.component.css']  // Asegúrate de que sea styleUrls en lugar de styleUrl
})
export class FormularioComponent {
  datosFormulario: FormularioDatos = {
    fecha: '',
    hora: '',
    
    comentario: '',
    imagen: null,
    opcion: ''
  };
  firstFormGroup!: FormGroup ;
  secondFormGroup!: FormGroup;
  constructor(private _formBuilder: FormBuilder, 
            private bddService: BddService, 
            private validacionService: ValidacionFormularioService,
            private apiFestivoService: ApiFestivoService,
            private dialog: MatDialog) { }

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
    // Formatear la fecha usando formatDate
    this.datosFormulario.fecha = formatDate(fecha, 'yyyy-MM-dd', 'en-US');
    console.log('Fecha formateada y actualizada:', this.datosFormulario.fecha);
  }

  actualizarTiempo(tiempo: Date) {
    // Formatear la hora usando formatDate
    this.datosFormulario.hora = formatDate(tiempo, 'HH:mm:ss', 'en-US');
    console.log('Hora formateada y actualizada:', this.datosFormulario.hora);
  }

  tituloCambiado(titulo: string) {
    this.datosFormulario.comentario = titulo;
  }

  textoCambiado(comentario: string) {
    this.datosFormulario.comentario = comentario;
  }

  archivoSeleccionado(imagen: File) {
    this.datosFormulario.imagen = imagen;
  }

  enviarFormulario() {
    if (this.validacionService.esFormularioValido(this.datosFormulario)) {
      this.validacionService.verificarDisponibilidadCita(this.datosFormulario.fecha, this.datosFormulario.hora)
        .subscribe(disponible => {
          if (disponible) {
            this.bddService.crearCita(this.datosFormulario).subscribe({
              next: respuesta => console.log('Datos enviados con éxito', respuesta),
              error: error => this.mostrarError('Error al enviar datos: ' + error.message)
            });
          }
        });
    } else {
      this.mostrarError('Por favor complete todos los campos requeridos.');
    }
  }

mostrarError(mensaje: string) {
  this.dialog.open(ErrorDialogoComponent, {
    data: { message: mensaje }
  });
}
}