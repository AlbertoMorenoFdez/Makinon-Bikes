// import { Injectable } from '@angular/core';
// import { ActivatedRoute, Router } from '@angular/router';
// import { BehaviorSubject } from 'rxjs';

// @Injectable({
//   providedIn: 'root'
// })
// export class CapturarTokenService {

//   private token = new BehaviorSubject<string | null>(null);

//   constructor(private route: ActivatedRoute,
//               private router: Router) {}

//    // Captura el token de la URL y lo guarda
//    capturarToken(): void {
//     this.route.queryParams.subscribe(params => {
//       const token = params['token'];
//       if (token) {
//         this.token.next(token);  // Guarda el token en el BehaviorSubject
//         this.setToken(token);
//         this.router.navigate(['/citaTaller']); // Redirige al usuario después de capturar el token
//       }
//     });
//   }

//   // Guarda el token en el almacenamiento local
//   setToken(token: string): void {
//     localStorage.setItem('token', token);
//   }

//   // Obtiene el token del almacenamiento local
//   getToken(): string | null {
//     return localStorage.getItem('token');
//   }
//   getTokenObservable() {
//     return this.token.asObservable();
//   }

//   // Borra el token del almacenamiento local
//   limpiarToken(): void {
//     localStorage.removeItem('token');
//   }


// }
import { Injectable } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CapturarTokenService {

  private token = new BehaviorSubject<string | null>(null);
  // private tokenExpirationTime = 60 * 60 * 1000; // Tiempo de expiración en milisegundos (por ejemplo, 1 hora)
  private tokenExpirationTime = 10000;
  constructor(private route: ActivatedRoute,
              private router: Router) {}

  // Captura el token de la URL y lo guarda
  capturarToken(): void {
    this.route.queryParams.subscribe(params => {
      const token = params['token'];
      if (token) {
        this.token.next(token);  // Guarda el token en el BehaviorSubject
        this.setToken(token);
        this.router.navigate(['/citaTaller']); // Redirige al usuario después de capturar el token
      }
    });
  }

  // Guarda el token en el almacenamiento local con la fecha de expiración
  setToken(token: string): void {
    const expirationDate = new Date().getTime() + this.tokenExpirationTime;
    localStorage.setItem('token', token);
    localStorage.setItem('tokenExpiration', expirationDate.toString());
    this.setTokenExpirationTimeout(expirationDate);
  }

  // Verifica y establece el tiempo de expiración del token
  setTokenExpirationTimeout(expirationDate: number): void {
    const now = new Date().getTime();
    const timeLeft = expirationDate - now;

    if (timeLeft > 0) {
      setTimeout(() => {
        this.limpiarToken();
        console.log("Token ha expirado y ha sido eliminado.");
      }, timeLeft);
    } else {
      this.limpiarToken();
      console.log("Token ya ha expirado y ha sido eliminado.");
    }
  }

  // Obtiene el token del almacenamiento local
  getToken(): string | null {
    const expirationDate = localStorage.getItem('tokenExpiration');
    if (expirationDate && new Date().getTime() > parseInt(expirationDate, 10)) {
      this.limpiarToken();
      return null;
    }
    return localStorage.getItem('token');
  }

  // Obtiene el observable del token
  getTokenObservable() {
    return this.token.asObservable();
  }

  // Borra el token del almacenamiento local
  limpiarToken(): void {
    localStorage.removeItem('token');
    localStorage.removeItem('tokenExpiration');
    this.token.next(null);
  }
}
