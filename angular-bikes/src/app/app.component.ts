import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import {CommonModule} from '@angular/common';
import {DatePickerComponent} from '../app/components/date-picker/date-picker.component';
import {TimepickerComponent} from '../app/components/timepicker/timepicker.component';
import { CalendarioComponent } from './components/calendario/calendario.component';
import { SubirArchivoComponent } from './components/subir-archivo/subir-archivo.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet,
            DatePickerComponent, 
            CommonModule, 
            TimepickerComponent, 
            CalendarioComponent,
            SubirArchivoComponent,
            ],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'angular-bike';
}
