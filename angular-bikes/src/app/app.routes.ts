import { Routes } from '@angular/router';
import { DatePickerComponent } from './components/date-picker/date-picker.component';
import { TimepickerComponent } from './components/timepicker/timepicker.component';
import { CalendarioComponent } from './components/calendario/calendario.component';
import { SubirArchivoComponent } from './components/subir-archivo/subir-archivo.component';
import { TraerNombreComponent } from './components/traer-nombre/traer-nombre.component';
import { TokenComponent } from './components/token/token.component';
import { FormularioComponent } from './components/formulario/formulario.component';


export const routes: Routes = [
    { 
        path: 'citaTaller', 
        component: FormularioComponent, // Componente principal
        
    },
    { 
        path: 'calendario', 
        component: CalendarioComponent,
        children: [
            { path: 'token', component: TokenComponent }
        ]
    },
    
];
