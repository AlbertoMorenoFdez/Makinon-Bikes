import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import {CommonModule} from '@angular/common';
import {DatePickerComponent} from '../app/components/date-picker/date-picker.component';
import {TimepickerComponent} from '../app/components/timepicker/timepicker.component';
import { CalendarioComponent } from './components/calendario/calendario.component';
import { SubirArchivoComponent } from './components/subir-archivo/subir-archivo.component';
import { TraerNombreComponent } from './components/traer-nombre/traer-nombre.component';
import {TokenComponent} from './components/token/token.component';
import {RouterLink} from '@angular/router';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet,
            RouterLink,
            DatePickerComponent, 
            CommonModule, 
            TimepickerComponent, 
            CalendarioComponent,
            SubirArchivoComponent,
            TraerNombreComponent,
            TokenComponent,
            ],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'angular-bike';
}
