import { Component, OnInit, ViewChild  } from '@angular/core';
import { HttpClient, } from '@angular/common/http';
import { CommonModule } from '@angular/common';
import { BddService } from '../../core/services/bdd/bdd.service';
import { DetallesCitaComponent } from './detalles-cita/detalles-cita.component';
import { MatCardModule } from '@angular/material/card';
import {MatListModule} from '@angular/material/list';
import {MatProgressSpinnerModule} from '@angular/material/progress-spinner'
import {MatPaginator} from '@angular/material/paginator'
import { MatTableDataSource } from '@angular/material/table';
import { MatButtonModule } from '@angular/material/button';
import { MatIconModule} from '@angular/material/icon';
@Component({
  selector: 'app-obtener-citas',
  standalone: true,
  imports: [CommonModule,
            DetallesCitaComponent, 
            MatCardModule, 
            MatListModule, 
            MatProgressSpinnerModule,
            MatPaginator,
            MatButtonModule,
            MatIconModule
            ],
  templateUrl: './obtener-cita.component.html',
  styleUrls: ['./obtener-cita.component.css']
})
export class ObtenerCitaComponent implements OnInit {
  citas: any[] = [];
  citaSeleccionada: any = null;
  mostrarDetalles: boolean = false;
  cargando: boolean = true;
  dataSource = new MatTableDataSource<any>([]);

  constructor(private bddService: BddService, private http: HttpClient) {}

  ngOnInit() {
    this.cargando = true;
    this.bddService.obtenerCitas().subscribe(data => {
      this.dataSource.data = data;
      this.citas = data;
      this.cargando = false;
    }, error => {
      console.error('Error al obtener citas', error);
      this.cargando = false;
    });
  }

  detalles(citaId: number) {
    this.citaSeleccionada = this.citas.find(cita => cita.id_cita_taller === citaId);
    console.log('Cita seleccionada:', this.citaSeleccionada); // Muestra la cita seleccionada en la consola
    console.log('Imagen URL:', this.citaSeleccionada?.imagen_url); // Muestra la URL de la imagen en la consola
    this.mostrarDetalles = true;
  }

  ocultarDetalles() {
    this.mostrarDetalles = false;
  }
}