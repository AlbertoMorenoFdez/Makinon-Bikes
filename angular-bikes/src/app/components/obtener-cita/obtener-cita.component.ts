// import { Component, OnInit } from '@angular/core';
// import { HttpClient } from '@angular/common/http';
// import { CommonModule } from '@angular/common';
// import { BddService } from '../../core/services/bdd/bdd.service';
// import { DetallesCitaComponent } from './detalles-cita/detalles-cita.component';
// import { MatCardModule } from '@angular/material/card';
// import { MatListModule } from '@angular/material/list';
// import { MatProgressSpinnerModule } from '@angular/material/progress-spinner';
// import { MatButtonModule } from '@angular/material/button';
// import { MatIconModule } from '@angular/material/icon';
// import { NgxPaginationModule } from 'ngx-pagination';

// @Component({
//   selector: 'app-obtener-citas',
//   standalone: true,
//   imports: [
//     CommonModule,
//     DetallesCitaComponent,
//     MatCardModule,
//     MatListModule,
//     MatProgressSpinnerModule,
//     MatButtonModule,
//     MatIconModule,
//     NgxPaginationModule
//   ],
//   templateUrl: './obtener-cita.component.html',
//   styleUrls: ['./obtener-cita.component.css']
// })
// export class ObtenerCitaComponent implements OnInit {
//   citas: any[] = [];
//   citaSeleccionada: any = null;
//   mostrarDetalles: boolean = false;
//   cargando: boolean = true;
//   page: number = 1;
//   itemsPerPage: number = 3;

//   constructor(private bddService: BddService, private http: HttpClient) {}

//   ngOnInit() {
//     this.cargarCitas();
//   }

//   cargarCitas() {
//     this.cargando = true;
//     this.bddService.obtenerCitas().subscribe(data => {
//       this.citas = data;
//       this.cargando = false;
//     }, error => {
//       console.error('Error al obtener citas', error);
//       this.cargando = false;
//     });
//   }

//   detalles(citaId: number) {
//     this.citaSeleccionada = this.citas.find(cita => cita.id_cita_taller === citaId);
//     this.mostrarDetalles = true;
//   }

//   ocultarDetalles() {
//     this.mostrarDetalles = false;
//   }

//   onCitaEliminada() {
//     this.cargarCitas();
//     this.ocultarDetalles();
//   }
// }
import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { CommonModule } from '@angular/common';
import { BddService } from '../../core/services/bdd/bdd.service';
import { DetallesCitaComponent } from './detalles-cita/detalles-cita.component';
import { MatCardModule } from '@angular/material/card';
import { MatListModule } from '@angular/material/list';
import { MatProgressSpinnerModule } from '@angular/material/progress-spinner';
import { MatButtonModule } from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
import { NgxPaginationModule } from 'ngx-pagination';

@Component({
  selector: 'app-obtener-citas',
  standalone: true,
  imports: [
    CommonModule,
    DetallesCitaComponent,
    MatCardModule,
    MatListModule,
    MatProgressSpinnerModule,
    MatButtonModule,
    MatIconModule,
    NgxPaginationModule
  ],
  templateUrl: './obtener-cita.component.html',
  styleUrls: ['./obtener-cita.component.css']
})
export class ObtenerCitaComponent implements OnInit {
  citas: any[] = [];
  citaSeleccionada: any = null;
  mostrarDetalles: boolean = false;
  cargando: boolean = true;
  page: number = 1;
  itemsPerPage: number = 3;

  constructor(private bddService: BddService, private http: HttpClient) {}

  ngOnInit() {
    this.cargarCitas();
  }

  cargarCitas() {
    this.cargando = true;
    this.bddService.obtenerCitas().subscribe(data => {
      this.citas = data.sort((a: any, b: any) => new Date(b.id_cita_taller).getTime() - new Date(a.id_cita_taller).getTime());
      this.cargando = false;
    }, error => {
      console.error('Error al obtener citas', error);
      this.cargando = false;
    });
  }

  detalles(citaId: number) {
    this.citaSeleccionada = this.citas.find(cita => cita.id_cita_taller === citaId);
    this.mostrarDetalles = true;
  }

  ocultarDetalles() {
    this.mostrarDetalles = false;
  }

  onCitaEliminada() {
    this.cargarCitas();
    this.ocultarDetalles();
  }
}
