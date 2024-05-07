import { Routes } from '@angular/router';
import { DatePickerComponent } from './components/date-picker/date-picker.component';
import { TimepickerComponent } from './components/timepicker/timepicker.component';
import { CalendarioComponent } from './components/calendario/calendario.component';
import { SubirArchivoComponent } from './components/subir-archivo/subir-archivo.component';
import { TraerNombreComponent } from './components/traer-nombre/traer-nombre.component';
import { TokenComponent } from './components/token/token.component';
import { AppComponent } from './app.component';


export const routes: Routes = [
    { 
        path: 'citaTaller', 
        component: DatePickerComponent, // Componente principal
        children: [
            { path: 'timePicker', component: TimepickerComponent },
            { path: 'subir-archivo', component: SubirArchivoComponent },
            { path: 'traer-nombre', component: TraerNombreComponent },
            { path: 'token', component: DatePickerComponent }
        ]
    },
    { 
        path: 'agenda', 
        component: CalendarioComponent,
        children: [
            { path: 'token', component: TokenComponent }
        ]
    },
    
];
