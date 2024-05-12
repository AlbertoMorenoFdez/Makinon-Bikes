import { Component } from '@angular/core';
import { DatePickerComponent } from './date-picker/date-picker.component';
import { TimepickerComponent } from './timepicker/timepicker.component';
import { SubirArchivoComponent } from './subir-archivo/subir-archivo.component';
import { FormsModule } from '@angular/forms';
import { FormularioDatos } from '../../interfaces/formulario.interface';
import { BddService } from '../../core/services/bdd/bdd.service';
import { formatDate } from '@angular/common';

@Component({
  selector: 'app-formulario',
  standalone: true,
  imports: [
    DatePickerComponent,
    TimepickerComponent,
    SubirArchivoComponent,
    FormsModule,
  ],
  templateUrl: './formulario.component.html',
  styleUrls: ['./formulario.component.css']  // Asegúrate de que sea styleUrls en lugar de styleUrl
})
export class FormularioComponent {
  datosFormulario: FormularioDatos = {
    fecha: '',
    hora: '',
    titulo: '',
    comentario: '',
    imagen: null
  };

  constructor(private bddService: BddService) { }

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
    if (!this.datosFormulario.fecha || !this.datosFormulario.hora || !this.datosFormulario.comentario || !this.datosFormulario.titulo) {
      console.log('Por favor complete todos los campos requeridos.');
      return;
    }
    if (this.datosFormulario.comentario.length < 5 || this.datosFormulario.titulo.length < 5) {
      console.log('El comentario y el titulo deben tener al menos 5 caracteres.');
      return;
    }
    // console.log('Datos del formulario:', this.datosFormulario);
    this.bddService.crearCita(this.datosFormulario).subscribe(
      respuesta => console.log('Datos enviados con éxito', respuesta),
      error => console.log('Error al enviar datos', error)
    );
  }
}
