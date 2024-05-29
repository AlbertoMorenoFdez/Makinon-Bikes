import { Component, OnInit } from '@angular/core';
import { CdkDragDrop, moveItemInArray, transferArrayItem, CdkDrag, CdkDropList, } from '@angular/cdk/drag-drop';
import { dragDrop } from '../../interfaces/formulario.interface';
import { BddService } from '../../core/services/bdd/bdd.service';

@Component({
  selector: 'app-drag-drop',
  standalone: true,
  imports: [CdkDropList, CdkDrag],
  templateUrl: './drag-drop.component.html',
  styleUrl: './drag-drop.component.css'
})

// Componente que se encarga de mostrar un drag and drop de las citas
export class DragDropComponent {
  dragDrop: dragDrop = {
    Fecha: '',
    Hora: '',
    Estado: '',
    Opcion: '',
    id_cita_taller: 0
  };
  pendiente: dragDrop[] = [];
  confirmada: dragDrop[] = [];
  cancelada: dragDrop[] = [];



  constructor(private bddService: BddService) { }

  ngOnInit(): void {
    this.traerCitas();
  }

  /* Método que se encarga de traer las citas de la bdd y la clasifica en pendientes, confirmadas y canceladas
  y las muestra al usuario solo la hora y fecha y al admin el titulo de la cita fecha y hora*/
  traerCitas() {
    this.bddService.obtenerTodasCitas().subscribe((data: any[]) => {
      data.forEach((evento: any) => {
        if (evento.estado == 'pendiente') {
          this.pendiente.push({
            Estado: evento.estado,
            Opcion: evento.opcion,
            Fecha: evento.fecha,
            Hora: evento.hora,
            id_cita_taller: evento.id_cita_taller
          });
        } else if (evento.estado == 'confirmada') {
          this.confirmada.push({
            Estado: evento.estado,
            Opcion: evento.opcion,
            Fecha: evento.fecha,
            Hora: evento.hora,
            id_cita_taller: evento.id_cita_taller
          });
        } else if (evento.estado == 'cancelada') {
          this.cancelada.push({
            Estado: evento.estado,
            Opcion: evento.opcion,
            Fecha: evento.fecha,
            Hora: evento.hora,
            id_cita_taller: evento.id_cita_taller

          });
        }
      });

    });
  }

  // Método que se encarga de mover los elementos de un array a otro
  drop(event: CdkDragDrop<dragDrop[], any>) {
    // Accede al objeto dragDrop que se está moviendo
    let movedItem: dragDrop = event.previousContainer.data[event.previousIndex];

    if (event.previousContainer === event.container) {
      moveItemInArray(event.container.data, event.previousIndex, event.currentIndex);
    } else {
      transferArrayItem(
        event.previousContainer.data,
        event.container.data,
        event.previousIndex,
        event.currentIndex,
      );
    }
    // Convierte el objeto a un string
    let movedItemString = 'Fecha: ${ movedItem.Fecha }, Hora: ${ movedItem.Hora }, Estado: ${ movedItem.Estado }, Opcion: ${ movedItem.Opcion }';

  }

  // Método que se encarga de actualizar el estado de las citas
  actualizar(): void {
    this.pendiente.forEach((cita: dragDrop) => {
      cita.Estado = 'pendiente';
    });
    this.confirmada.forEach((cita: dragDrop) => {
      cita.Estado = 'confirmada';
    });
    this.cancelada.forEach((cita: dragDrop) => {
      cita.Estado = 'cancelada';
    });
    let citas = this.pendiente.concat(this.confirmada, this.cancelada);
    this.bddService.editarEstadoCita(citas).subscribe((data: any) => {
    });
  }

}
