import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import {CommonModule} from '@angular/common';
import {DatePickerComponent} from './components/formulario/date-picker/date-picker.component';
import {TimepickerComponent} from './components/formulario/timepicker/timepicker.component';
import { CalendarioComponent } from './components/calendario/calendario.component';
import { SubirArchivoComponent } from './components/formulario/subir-archivo/subir-archivo.component';
import { TraerNombreComponent } from './components/traer-nombre/traer-nombre.component';
import {TokenComponent} from './components/token/token.component';
import {RouterLink} from '@angular/router';
import { FormularioComponent } from './components/formulario/formulario.component';
import {HttpClientModule} from '@angular/common/http';//importar el modulo de http como modelo Singleton
import { ObtenerCitaComponent } from './components/obtener-cita/obtener-cita.component';
import { MatCardModule } from '@angular/material/card';
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
            FormularioComponent,
            HttpClientModule,
            ObtenerCitaComponent,
            ObtenerCitaComponent,
            MatCardModule
            ],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
 
  nombreDesdeHijo: string='';

  recibirNombre(nombre: string): void {
    this.nombreDesdeHijo = nombre;
  }

}
