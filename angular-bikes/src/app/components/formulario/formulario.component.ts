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
  styleUrl: './formulario.component.css'
})
export class FormularioComponent {
  // Inicializar los datos del formulario con la interfaz
  datosFormulario: FormularioDatos = {
    fecha: '',
    tiempo: '',
    texto: '',
    archivo: null
  };

  constructor(private bddService: BddService) {}
  nombre: string='';


  // actualizarFecha(fecha: string) {
  //   fecha=formatDate(new Date(fecha), 'yyyy-MM-dd', 'en-US');
  //   console.log('Fecha recibida:', fecha);
  //   this.datosFormulario.fecha = fecha;
  // } 

  // actualizarTiempo(tiempo: string) {    
  //   tiempo = formatDate(new Date(tiempo), 'HH:mm:ss', 'en-US');
  //   console.log('Fecha recibida:', tiempo);
  //   this.datosFormulario.tiempo = tiempo;
  // }

  actualizarFecha(fecha: Date) {
    const opcionesFecha: Intl.DateTimeFormatOptions = {
      year: '2-digit',  // 'numeric' o '2-digit'
      month: '2-digit', // 'numeric' o '2-digit'
      day: '2-digit'    // 'numeric' o '2-digit'
    };
    this.datosFormulario.fecha = new Intl.DateTimeFormat('en-US', opcionesFecha).format(fecha);
    console.log('Fecha formateada y actualizada:', this.datosFormulario.fecha);
  }
  
  actualizarTiempo(tiempo: Date) {
    console.log('Hora recibida:', tiempo);
    const opcionesHora: Intl.DateTimeFormatOptions = {
      hour: '2-digit',  // 'numeric' o '2-digit'
      minute: '2-digit', // 'numeric' o '2-digit'
      second: '2-digit', // 'numeric' o '2-digit'
      hour12: false
    };
    console.log('hora', opcionesHora);
    this.datosFormulario.tiempo = new Intl.DateTimeFormat('en-US', opcionesHora).format(tiempo);
    console.log('Hora formateada y actualizada:', this.datosFormulario.tiempo);
  }

  textoCambiado(texto: string) {
    this.datosFormulario.texto = texto;
  }

  archivoSeleccionado(archivo: File) {
    this.datosFormulario.archivo = archivo;
  }

  enviarFormulario() {
    if (!this.datosFormulario.fecha || !this.datosFormulario.tiempo || !this.datosFormulario.texto) {
      console.log('Por favor complete todos los campos requeridos.');
      return;
    }
    console.log('Datos del formulario:', this.datosFormulario);
    // this.bddService.crearCita(this.datosFormulario).subscribe(
    //   respuesta => console.log('Datos enviados con éxito', respuesta),
    //   error => console.log('Error al enviar datos', error)
    // );
  }
}
