import { Component } from '@angular/core';
import { BddService } from '../../core/services/bdd/bdd.service';

@Component({
  selector: 'app-obtener-cita',
  standalone: true,
  imports: [],
  templateUrl: './obtener-cita.component.html',
  styleUrl: './obtener-cita.component.css'
})
export class ObtenerCitaComponent {
  id:number=0;

  constructor(private bddService:BddService){}

  obtenerDatosDeCita() {
    const idCita = 123; // Asegúrate de que esto sea un número
    this.bddService.obtenerCita({ id: idCita }).subscribe(
      data => {
        // manejar datos recibidos
      },
      error => {
        console.error('Error al obtener la cita:', error);
      }
    );
  }

}
