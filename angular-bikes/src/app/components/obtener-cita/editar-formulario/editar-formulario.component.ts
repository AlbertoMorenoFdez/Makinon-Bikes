import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { BddService } from '../../../core/services/bdd/bdd.service';
import { RouterOutlet } from '@angular/router';
import { ActivatedRoute } from '@angular/router';
import { Router } from '@angular/router';
import { AppRoutingModule } from '../../../app.routes';


@Component({
  selector: 'app-editar-formulario',
  standalone: true,
  imports: [RouterOutlet, AppRoutingModule, CommonModule],
  templateUrl: './editar-formulario.component.html',
  styleUrl: './editar-formulario.component.css'
})
export class EditarFormularioComponent implements OnInit{
  id: number | null = null;

  constructor(private route: ActivatedRoute, private router: Router) {}

  ngOnInit(): void {
    this.route.paramMap.subscribe(params => {
      const idParam = params.get('id');
      if (idParam !== null) {
        this.id = +idParam; // Convertir a número si no es null
      } else {
        console.error("ID de cita no proporcionado.");
        this.router.navigate(['/alguna-ruta']); // Opcional: redirigir al usuario
      }
    });
  }
}