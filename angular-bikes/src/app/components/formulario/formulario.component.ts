import { Component } from '@angular/core';
import { DatePickerComponent } from '../date-picker/date-picker.component';
import { TimepickerComponent } from '../timepicker/timepicker.component';
import { SubirArchivoComponent } from '../subir-archivo/subir-archivo.component';
import { FormsModule } from '@angular/forms';
import { FormularioDatos } from '../../interfaces/formulario.interface';
import { BddService } from '../../core/services/bdd/bdd.service';


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


  enviarFormulario() {
    this.bddService.enviarDatos(this.datosFormulario).subscribe(
      respuesta => console.log('Datos enviados con éxito', respuesta),
      error => console.log('Error al enviar datos', error)
    );
  }

  // Asumiendo que tienes métodos para actualizar cada parte de los datos del formulario
  actualizarFecha(fecha: Date) {
    console.log('Fecha actualizada');
    this.datosFormulario.fecha = fecha.toDateString();

  }

  actualizarTiempo(tiempo: Date) {
    this.datosFormulario.tiempo = tiempo.toDateString();
  }

  textoCambiado(texto: string) {
    this.datosFormulario.texto = texto;
  }

  archivoSeleccionado(archivo: File) {
    this.datosFormulario.archivo = archivo;
  }
}
