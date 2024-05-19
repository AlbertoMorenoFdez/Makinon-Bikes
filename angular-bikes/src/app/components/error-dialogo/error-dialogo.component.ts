import { Component, Inject } from '@angular/core';
import { MAT_DIALOG_DATA } from '@angular/material/dialog';
@Component({
  selector: 'app-error-dialogo',
  standalone: true,
  imports: [],
  templateUrl: './error-dialogo.component.html',
  styleUrl: './error-dialogo.component.css'
})
export class ErrorDialogoComponent {
  constructor(@Inject(MAT_DIALOG_DATA) public data: { message: string }) {}
}