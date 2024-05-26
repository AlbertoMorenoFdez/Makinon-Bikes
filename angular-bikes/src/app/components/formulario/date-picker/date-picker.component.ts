// import { Component, EventEmitter, Output } from '@angular/core';
// import { CommonModule } from '@angular/common';
// import { MatDatepickerModule } from '@angular/material/datepicker';
// import { MatInputModule } from '@angular/material/input';
// import { MatFormFieldModule } from '@angular/material/form-field';
// import { provideNativeDateAdapter } from '@angular/material/core';
// import { MatCardModule } from '@angular/material/card';
// import { FormsModule } from '@angular/forms';
// import { MatDatepickerInputEvent } from '@angular/material/datepicker';


// @Component({
//   selector: 'app-date-picker',
//   standalone: true,
//   imports: [CommonModule,
//     MatCardModule,
//     MatFormFieldModule,
//     MatInputModule,
//     FormsModule,
//     MatDatepickerModule,
//   ],
//   providers: [provideNativeDateAdapter()],
//   templateUrl: './date-picker.component.html',
//   styleUrl: './date-picker.component.css'
// })
// export class DatePickerComponent {
//   selected: Date | null;

//   constructor() {
//     this.selected = null;
//   }
//   @Output() almacenarFecha = new EventEmitter<Date>();
//   // Método para enviar la fecha seleccionada al componente Formulario
//   enviarFecha(event: any) {
//     console.log('Metodo enviarFecha llamado')
//     const date = new Date(event.target.value); // Convierte la cadena a Date
//     // console.log(date);
//     this.almacenarFecha.emit(date);
//   }
//   onDateChange(event: MatDatepickerInputEvent<Date>) {
//     if (event.value) {
//       this.almacenarFecha.emit(event.value); // Asegúrate de que event.value es un Date
//     }
//   }
  

// }
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
export class DatePickerComponent {
  @Input() fecha: string | null = null;
  @Output() almacenarFecha = new EventEmitter<Date>();

  onDateChange(event: MatDatepickerInputEvent<Date>) {
    if (event.value) {
      this.almacenarFecha.emit(event.value); // Asegúrate de que event.value es un Date
    }
  }
}
