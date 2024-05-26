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

  onTimeChange(event: string) {
    const timeParts = event.split(':');
    const date = new Date();
    date.setHours(parseInt(timeParts[0], 10));
    date.setMinutes(parseInt(timeParts[1], 10));
    this.almacenarHora.emit(date);
  }
}
