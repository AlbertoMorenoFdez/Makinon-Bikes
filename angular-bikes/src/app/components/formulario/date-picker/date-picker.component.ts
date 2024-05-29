import { Component, EventEmitter, Output, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MatDatepickerModule, MatDatepickerInputEvent } from '@angular/material/datepicker';
import { MatInputModule } from '@angular/material/input';
import { MatFormFieldModule } from '@angular/material/form-field';
import { provideNativeDateAdapter } from '@angular/material/core';
import { MatCardModule } from '@angular/material/card';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-date-picker',
  standalone: true,
  imports: [
    CommonModule,
    MatCardModule,
    MatFormFieldModule,
    MatInputModule,
    FormsModule,
    MatDatepickerModule
  ],
  providers: [provideNativeDateAdapter()],
  templateUrl: './date-picker.component.html',
  styleUrls: ['./date-picker.component.css']
})

// Funcion que se encarga de gestionar el componente de selección de fecha
export class DatePickerComponent {
  @Input() fecha: string | null = null;
  @Output() almacenarFecha = new EventEmitter<Date>();

  //Metodo que se encarga de almacenar la fecha seleccionada
  onDateChange(event: MatDatepickerInputEvent<Date>) {
    if (event.value) {
      this.almacenarFecha.emit(event.value); // Asegúrate de que event.value es un Date
    }
  }
}
