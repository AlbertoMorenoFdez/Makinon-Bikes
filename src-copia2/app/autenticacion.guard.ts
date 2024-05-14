// src/app/auth.guard.ts
import { Injectable } from '@angular/core';
import { CanActivate, Router } from '@angular/router';
import { RolesService } from './core/services/roles/roles.service';

@Injectable({
  providedIn: 'root'
})
export class AutenticacionGuard implements CanActivate {
  constructor(private roleService: RolesService, private router: Router) {}

  canActivate(): boolean {
    if (!this.roleService.isAuthenticated()) {
      // Redireccionar a una URL externa
      window.location.href = 'http://localhost:8000';
      return false;
    }
    return true;
  }
}
