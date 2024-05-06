import { Component , OnInit} from '@angular/core';
import { BddService } from '../../core/services/bdd/bdd.service';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-traer-nombre',
  standalone: true,
  imports: [FormsModule , CommonModule],
  templateUrl: './traer-nombre.component.html',
  styleUrl: './traer-nombre.component.css'
})
export class TraerNombreComponent {
  email: string='';
  password: string='';
  token: string = '';
  constructor(private BddService: BddService) { }

  login() {
    const credentials = { email: this.email, password: this.password };
    this.BddService.login(credentials).subscribe(
      response => {
        const token = response.api_token; // Aquí extraes el token de la respuesta
        // Ahora puedes almacenar el token en el almacenamiento local o en una cookie
        console.log('Token de acceso:', token);
      },
      error => {
        console.error('Error al iniciar sesión:', error);
      }
    );
  }
}
