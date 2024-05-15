import { Component,OnInit } from '@angular/core';
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
import { EditarFormularioComponent } from './components/obtener-cita/editar-formulario/editar-formulario.component';
import { RolesService } from './core/services/roles/roles.service';
import { CapturarTokenService } from './core/services/capturar-token/capturar-token.service';
import { Router } from '@angular/router';


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
            MatCardModule,
            EditarFormularioComponent,
          
            
            ],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent implements OnInit {
  isAdmin: boolean = false;
  isUser: boolean = false;
  nombreDesdeHijo: string='';
  // isAuthenticated = false;

  constructor(private rolesService: RolesService,
              private capturarTokenService: CapturarTokenService,
              private router: Router
  ) {}

  ngOnInit(): void {
    this.rolesService.getUserRole().subscribe((role:string) => {      
      this.isAdmin = role === 'admin';
      this.isUser = role === 'user';
  
      // Agregar código de depuración
      // console.log('isAdmin:', this.isAdmin);
      // console.log('isUser:', this.isUser);
    });
  }

  recibirNombre(nombre: string): void {
    this.nombreDesdeHijo = nombre;
  }
  salir(): void {
    this.capturarTokenService.limpiarToken();
    this.rolesService.logout();
    this.router.navigate(['localhost:8000']);
  }

}
