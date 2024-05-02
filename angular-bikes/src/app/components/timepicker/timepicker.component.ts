import { Component } from '@angular/core';
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

  
  onTimeChange() {
    console.log('Hora seleccionada:', this.time);
    localStorage.setItem('hora', this.time.toTimeString());
  }
  

}
