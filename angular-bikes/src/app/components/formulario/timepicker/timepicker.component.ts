import { Component, EventEmitter, Output, Input } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { IGX_TIME_PICKER_DIRECTIVES } from 'igniteui-angular';

@Component({
  selector: 'app-timepicker',
  standalone: true,
  imports: [IGX_TIME_PICKER_DIRECTIVES, FormsModule],
  templateUrl: './timepicker.component.html',
  styleUrls: ['./timepicker.component.css']
})

// Componente que se encarga de mostrar un timepicker para seleccionar la hora
export class TimepickerComponent {
  @Input() hora: Date | null = null;
  @Output() almacenarHora = new EventEmitter<Date>();

  // Método para enviar la hora seleccionada al componente Formulario
  onTimeChange(event: Date) {
    this.almacenarHora.emit(event);
  }
}
