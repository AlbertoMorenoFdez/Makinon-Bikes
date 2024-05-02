import { Component } from '@angular/core';
import {CommonModule} from '@angular/common';
import {MatDatepickerModule} from '@angular/material/datepicker';
import {MatInputModule} from '@angular/material/input';
import {MatFormFieldModule} from '@angular/material/form-field';
import {provideNativeDateAdapter} from '@angular/material/core';
import {MatCardModule} from '@angular/material/card';
import {FormsModule} from '@angular/forms';
import { MatDatepickerInputEvent } from '@angular/material/datepicker';


@Component({
  selector: 'app-date-picker',
  standalone: true,
  imports: [CommonModule, MatCardModule,MatFormFieldModule, MatInputModule,FormsModule, MatDatepickerModule],
  providers: [provideNativeDateAdapter()],
  templateUrl: './date-picker.component.html',
  styleUrl: './date-picker.component.css'
})
export class DatePickerComponent {
  selected: Date | null;

  constructor() {
    this.selected = null;
  }

  onDateChange(event: MatDatepickerInputEvent<Date>) {
    this.selected = event.value;
    if (this.selected) {
      console.log(this.selected);  // Imprime la fecha seleccionada en la consola
      localStorage.setItem('cita', this.selected.toDateString());  // Almacena la fecha seleccionada en el localStorage
    }
  }
}
