import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TraerNombreComponent } from '../traer-nombre/traer-nombre.component';
import { RolesService } from '../../core/services/roles/roles.service';

@Component({
  selector: 'app-landing',
  standalone: true,
  imports: [CommonModule, TraerNombreComponent],
  templateUrl: './landing.component.html',
  styleUrls: ['./landing.component.css']
})

// Componente que se encarga de mostrar la pagina principal
export class LandingComponent implements OnInit {
  isAdmin: boolean = false;

  constructor(private roles: RolesService) {}

  ngOnInit(): void {
    this.roles.getUserRole().subscribe((role: string) => {
      this.isAdmin = (role === 'admin');

    });
  }
}
