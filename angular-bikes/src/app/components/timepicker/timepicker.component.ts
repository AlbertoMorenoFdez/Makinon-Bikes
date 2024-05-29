import { Component, EventEmitter, Output } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { IGX_TIME_PICKER_DIRECTIVES } from 'igniteui-angular';

@Component({
  selector: 'app-timepicker',
  standalone: true,
  imports: [IGX_TIME_PICKER_DIRECTIVES, FormsModule],
  templateUrl: './timepicker.component.html',
  styleUrl: './timepicker.component.css'
})

// Componente que se encarga de mostrar un timepicker para seleccionar la hora
export class TimepickerComponent {
  public time: Date;

  constructor() {
    this.time = new Date();
  }
  @Output() almacenarHora = new EventEmitter<Date>();
  
  // Método para enviar la hora seleccionada al componente Formulario
  enviarHora(event: any) {
    const date = new Date(event.target.value);
    this.almacenarHora.emit(date);
  }
  
  // Método que se ejecuta al cambiar la hora seleccionada
  onTimeChange() {
    localStorage.setItem('hora', this.time.toTimeString());
  }
  

}
