import { Injectable } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';


@Injectable({
  providedIn: 'root'
})
export class CapturarTokenService {

  constructor(private route: ActivatedRoute,
              private router: Router) {}

   // Captura el token de la URL y lo guarda
   capturarToken(): void {
    this.route.queryParams.subscribe(params => {
      const token = params['token'];
      console.log("Token capturado:", token); // Debug: Muestra el token capturado
      if (token) {
        this.setToken(token);
        this.router.navigate(['/citaTaller']); // Redirige al usuario después de capturar el token
      }
    });
  }

  // Guarda el token en el almacenamiento local
  setToken(token: string): void {
    localStorage.setItem('token', token);
  }

  // Obtiene el token del almacenamiento local
  getToken(): string | null {
    return localStorage.getItem('token');
  }

  // Borra el token del almacenamiento local
  limpiarToken(): void {
    localStorage.removeItem('token');
  }


}
