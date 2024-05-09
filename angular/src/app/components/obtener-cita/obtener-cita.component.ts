import { Component } from '@angular/core';
import { BddService } from '../../core/services/bdd/bdd.service';
import { formatDate } from '@angular/common';

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
    const fechaFormateada = formatDate(new Date(), 'yyyy-MM-dd', 'en-US');
    const horaFormateada = formatDate(new Date(), 'HH:mm:ss', 'en-US');
    
    this.bddService.crearCita({ id: 1, fecha: fechaFormateada, hora: horaFormateada } as { id: number; fecha: string; hora: string; }).subscribe(
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

