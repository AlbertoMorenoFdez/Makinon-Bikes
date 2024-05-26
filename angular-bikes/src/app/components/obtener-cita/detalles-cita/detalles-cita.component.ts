import { Component, Input, Output, EventEmitter } from '@angular/core';
import { CommonModule } from '@angular/common';
import { BddService } from '../../../core/services/bdd/bdd.service';
import { MatCardModule } from '@angular/material/card';
import { MatButtonModule } from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
import { Router } from '@angular/router';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-detalles-cita',
  standalone: true,
  imports: [
    CommonModule, 
    MatCardModule,  
    MatButtonModule, 
    MatIconModule,
    RouterLink
  ],
  templateUrl: './detalles-cita.component.html',
  styleUrls: ['./detalles-cita.component.css']
})
export class DetallesCitaComponent {
  @Input() cita: any;
  @Output() cerrar = new EventEmitter<void>();
  @Output() citaEliminada = new EventEmitter<void>();

  constructor(private bddService: BddService, private router: Router) {}

  eliminarCita(idCita: number) {
    this.bddService.eliminarCita(idCita).subscribe(data => {
      // console.log('Cita eliminada', data);
      this.citaEliminada.emit();
    }, error => {
      console.error('Error al eliminar cita', error);
    });
  }

  editarCita(citaId: number) {
    this.router.navigate(['citaAnterior', 'editarCita', citaId]); // Ajusta la ruta según tu necesidad
    // console.log('Editar cita', citaId);
  }

  puedeEditar(): boolean {
    return this.cita && this.cita.estado === 'pendiente';
  }

  cerrarDetalles() {
    this.cerrar.emit();
  }
}
