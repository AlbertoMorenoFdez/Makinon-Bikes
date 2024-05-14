// src/app/services/roles.service.ts
import { Injectable } from '@angular/core';
import { BehaviorSubject, Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class RolesService {
  private currentUserRole = new BehaviorSubject<string>('user'); // Valor predeterminado como string
  private isLoggedIn = new BehaviorSubject<boolean>(false);

  constructor() {}

  setUserRole(role: string): void {
    this.currentUserRole.next(role);
  }

  getUserRole(): Observable<string> {
    return this.currentUserRole.asObservable();
  }
  
  login(): void {
    this.isLoggedIn.next(true);
  }

  logout(): void {
    this.isLoggedIn.next(false);
  }

  // Para acceder al estado de login en otros componentes
  get isLoggedIn$(): Observable<boolean> {
    return this.isLoggedIn.asObservable();
  }

  // Método para verificar si el usuario está autenticado
  isAuthenticated(): boolean {
    return this.isLoggedIn.value;
  }
}
