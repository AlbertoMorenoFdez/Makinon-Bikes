import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { BddService } from '../../../core/services/bdd/bdd.service';
import { MatCardModule } from '@angular/material/card';
import { MatButtonModule } from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
import { Router } from '@angular/router';
@Component({
  selector: 'app-detalles-cita',
  standalone: true,
  imports: [CommonModule, 
            MatCardModule,  
            MatButtonModule, 
            MatIconModule,
            
            ],
  templateUrl: './detalles-cita.component.html',
  styleUrl: './detalles-cita.component.css'
})
export class DetallesCitaComponent {
  @Input() cita: any;
  constructor(private bddService: BddService, private router: Router) {}

  eliminarCita(idCita: number) {
    this.bddService.eliminarCita(idCita).subscribe(data => {
      console.log('Cita eliminada', data);
    }, error => {
      console.error('Error al eliminar cita', error);
    });
    console.log('Eliminar cita', this.cita);
  }
  editarCita(citaId: number) {
    // Suponiendo que deseas pasar el id como parámetro a la ruta hija
    this.router.navigate(['citaAnterior','editarCita', citaId ]); // Ajusta la ruta según tu necesidad
  }
}
