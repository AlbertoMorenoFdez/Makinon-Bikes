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
export class TimepickerComponent {
  @Input() hora: Date | null = null;
  @Output() almacenarHora = new EventEmitter<Date>();

  onTimeChange(event: Date) {
    this.almacenarHora.emit(event);
  }
}
