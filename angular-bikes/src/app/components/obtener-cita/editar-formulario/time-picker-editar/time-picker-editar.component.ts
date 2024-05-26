import { Component, EventEmitter, Output, Input } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { IGX_TIME_PICKER_DIRECTIVES } from 'igniteui-angular';


@Component({
  selector: 'app-time-picker-editar',
  standalone: true,
  imports: [IGX_TIME_PICKER_DIRECTIVES, FormsModule],
  templateUrl: './time-picker-editar.component.html',
  styleUrl: './time-picker-editar.component.css'
})
export class TimePickerEditarComponent {
  @Input() hora: string | null = null;
  @Output() almacenarHora = new EventEmitter<Date>();

  
  onTimeChange(event: any) {
    if (event instanceof Date) {
      this.almacenarHora.emit(event);
    } else if (typeof event === 'string') {
      const [hours, minutes] = event.split(':').map(Number);
      const date = new Date();
      date.setHours(hours);
      date.setMinutes(minutes);
      this.almacenarHora.emit(date);
    } else {
      console.error('Formato de hora no válido:', event);
    }
  }
}
