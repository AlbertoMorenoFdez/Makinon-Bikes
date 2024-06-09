import { Component, Inject } from '@angular/core';
import { MAT_DIALOG_DATA } from '@angular/material/dialog';

@Component({
  selector: 'app-satisfactorio-dialogo',
  standalone: true,
  imports: [],
  templateUrl: './satisfactorio-dialogo.component.html',
  styleUrl: './satisfactorio-dialogo.component.css'
})
// Componente que se encarga de mostrar un dialogo satisfactorio
export class SatisfactorioDialogoComponent {
  constructor(@Inject(MAT_DIALOG_DATA) public data: { message: string }) {}
}