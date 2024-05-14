import { Injectable } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CapturarTokenService {

  private token = new BehaviorSubject<string | null>(null);

  constructor(private route: ActivatedRoute,
              private router: Router) {}

   // Captura el token de la URL y lo guarda
   capturarToken(): void {
    this.route.queryParams.subscribe(params => {
      console.log("Parámetros capturados:", params); // Debug: Muestra los parámetros capturados
      const token = params['token'];
      console.log("Token capturado:", token); // Debug: Muestra el token capturado
      if (token) {
        this.token.next(token);  // Guarda el token en el BehaviorSubject
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
  getTokenObservable() {
    return this.token.asObservable();
  }

  // Borra el token del almacenamiento local
  limpiarToken(): void {
    localStorage.removeItem('token');
  }


}
