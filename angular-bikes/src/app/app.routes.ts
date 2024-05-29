import { Routes, RouterModule } from '@angular/router';
import { CalendarioComponent } from './components/calendario/calendario.component';
import { TokenComponent } from './components/token/token.component';
import { FormularioComponent } from './components/formulario/formulario.component';
import { ObtenerCitaComponent } from './components/obtener-cita/obtener-cita.component';
import { NgModule } from '@angular/core';
import { EditarFormularioComponent } from './components/obtener-cita/editar-formulario/editar-formulario.component';
import { DragDropComponent } from './components/drag-drop/drag-drop.component';
import { GoogleMapsComponent } from './components/google-maps/google-maps.component';
import { GraficaComponent } from './components/grafica/grafica.component';
import { LandingComponent } from './components/landing/landing.component';
export const routes: Routes = [
  
   
    {
        path: 'citaTaller',
        component: LandingComponent, // Componente principal

    },
    {
        path: 'pedirCita',
        component: FormularioComponent, // Componente principal

    },
    {
        path: 'calendario',
        component: CalendarioComponent,
        children: [
            { path: 'token', component: TokenComponent }
        ]
    },
    {
        path: 'citaAnterior',
        component: ObtenerCitaComponent,
        children: [
            {
                path: 'editarCita/:id',
                component: EditarFormularioComponent
            }
        ]
    },
    {
        path: 'editarCita/:id',
        component: EditarFormularioComponent,
        
    },
    {
        path: 'citaPendiente',
         component: DragDropComponent,

    },
    {
        path: 'direccion',
         component: GoogleMapsComponent,

    },
    {
        path: 'grafica',
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
