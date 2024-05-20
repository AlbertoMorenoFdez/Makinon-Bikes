import { Routes, RouterModule } from '@angular/router';
import { DatePickerComponent } from './components/formulario/date-picker/date-picker.component';

import { CalendarioComponent } from './components/calendario/calendario.component';
import { SubirArchivoComponent } from './components/formulario/subir-archivo/subir-archivo.component';
import { TraerNombreComponent } from './components/traer-nombre/traer-nombre.component';
import { TokenComponent } from './components/token/token.component';
import { FormularioComponent } from './components/formulario/formulario.component';
import { ObtenerCitaComponent } from './components/obtener-cita/obtener-cita.component';
import { NgModule } from '@angular/core';
import { EditarFormularioComponent } from './components/obtener-cita/editar-formulario/editar-formulario.component';
import { AutenticacionGuard } from '../app/autenticacion.guard';
import { DragDropComponent } from './components/drag-drop/drag-drop.component';
import { GoogleMapsComponent } from './components/google-maps/google-maps.component';
import { GraficaComponent } from './components/grafica/grafica.component';
import { LandingComponent } from './components/landing/landing.component';
export const routes: Routes = [
  
   
    {
        path: 'citaTaller',
        //  canActivate: [AutenticacionGuard],
        component: LandingComponent, // Componente principal

    },
    {
        path: 'pedirCita',
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
        children: [
            {
                // path: 'token', component: TokenComponent,
                path: 'editarCita/:id',
                // canActivate: [AuthGuard],
                component: EditarFormularioComponent
            }
        ]
    },
    {
        path: 'editarCita/:id',
        // canActivate: [AuthGuard],
        component: EditarFormularioComponent,
        
    },
    {
        path: 'citaPendiente',
        // canActivate: [AuthGuard],
         component: DragDropComponent,

    },
    {
        path: 'direccion',
        // canActivate: [AuthGuard],
         component: GoogleMapsComponent,

    },
    {
        path: 'grafica',
        // canActivate: [AuthGuard],
         component: GraficaComponent,

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
