import { Component, OnInit } from '@angular/core';
import { BddService } from '../../core/services/bdd/bdd.service';
import { CapturarTokenService } from '../../core/services/capturar-token/capturar-token.service';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-traer-nombre',
  standalone: true,
  imports: [FormsModule, CommonModule],
  templateUrl: './traer-nombre.component.html',
  styleUrls: ['./traer-nombre.component.css']
})
export class TraerNombreComponent implements OnInit {
  id: number = 0;
  nombre: string = '';
  email: string = '';
  token: string = '';

  constructor(private bddService: BddService, private tokenService: CapturarTokenService) {
    
   }

  ngOnInit(): void {
    this.token = this.tokenService.getToken() as string;
    if (this.token) {
      this.traerNombre();
    }
  }

  traerNombre(): void {
    this.bddService.traerDatosUsuario().subscribe(
      response => {
         console.log('Respuesta del servidor:', response);
        this.nombre = response.nombre;
        this.email = response.email;
        this.id= response.id_usuario;
      },
      error => {
        console.error('Error al obtener los datos:', error);
      }
    );
  }
}
