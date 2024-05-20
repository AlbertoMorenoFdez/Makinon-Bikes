import { Component, EventEmitter, Output } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { IGX_TIME_PICKER_DIRECTIVES } from 'igniteui-angular';
import { MatDatepickerInputEvent } from '@angular/material/datepicker';

@Component({
  selector: 'app-timepicker',
  standalone: true,
  imports: [IGX_TIME_PICKER_DIRECTIVES, FormsModule],
  templateUrl: './timepicker.component.html',
  styleUrl: './timepicker.component.css'
})
export class TimepickerComponent {
  public time: Date = new Date();  // Inicialización directa

  @Output() almacenarHora = new EventEmitter<Date>();

  // onTimeChange(event: any) {
  //   console.log('Hora seleccionada:', this.time.toISOString());
  //   this.almacenarHora.emit(this.time);
  //   localStorage.setItem('hora', this.time.toISOString());  // Almacenamiento en formato ISO
  // }
  onTimeChange(event: Date) {   
      this.almacenarHora.emit(event); // Asegúrate de que event.value es un Date
  
  }
}
