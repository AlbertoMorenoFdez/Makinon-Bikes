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
  idUsuario: number | null=null;

  constructor(private bddService:BddService){}

  obtenerDatosDeCita() {
    const credentials=0; // Asegúrate de que esto sea un número
    this.bddService.crearCita({ id: credentials }).subscribe(
      (response) => {
        this.idUsuario = response.id_usuario;
        console.log(response); // Aquí se imprimirá la respuesta del servidor
      },
      (error) => {
        console.error(error); // Aquí se imprimirá el error, si lo hay
      }
    );
  }
}

