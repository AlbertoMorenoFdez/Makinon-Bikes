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
  
  onTimeChange() {
    console.log('Hora seleccionada:', this.time);
    localStorage.setItem('hora', this.time.toTimeString());
  }
  

}
