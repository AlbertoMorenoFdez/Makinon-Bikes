import { Routes, RouterModule } from '@angular/router';
import { DatePickerComponent } from './components/formulario/date-picker/date-picker.component';
import { TimepickerComponent } from './components/formulario/timepicker/timepicker.component';
import { CalendarioComponent } from './components/calendario/calendario.component';
import { SubirArchivoComponent } from './components/formulario/subir-archivo/subir-archivo.component';
import { TraerNombreComponent } from './components/traer-nombre/traer-nombre.component';
import { TokenComponent } from './components/token/token.component';
import { FormularioComponent } from './components/formulario/formulario.component';
import { ObtenerCitaComponent } from './components/obtener-cita/obtener-cita.component';
import { NgModule } from '@angular/core';
import { EditarFormularioComponent } from './components/obtener-cita/editar-formulario/editar-formulario.component';
import { AutenticacionGuard } from '../app/autenticacion.guard';


export const routes: Routes = [
  
   
    {
        path: 'citaTaller',
        //  canActivate: [AutenticacionGuard],
        component: FormularioComponent, // Componente principal

    },
    {
        path: 'calendario',
        // canActivate: [AuthGuard],
        component: CalendarioComponent,
        children: [
            { path: 'token', component: TokenComponent }
        ]
    },
    {
        path: 'citaAnterior',
        // canActivate: [AuthGuard],
        component: ObtenerCitaComponent,
        // children: [
        //     {
        //         // path: 'token', component: TokenComponent,
        //         path: 'editarCita/:id',
        //         // canActivate: [AuthGuard],
        //         component: EditarFormularioComponent
        //     }
        // ]
    },
    {
        path: 'editarCita/:id',
        // canActivate: [AuthGuard],
        component: EditarFormularioComponent,
        
    },
    { 
        path: '',         
        redirectTo: '/citaTaller', 
        pathMatch: 'full' 
    },

];
@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
})
export class AppRoutingModule { }
