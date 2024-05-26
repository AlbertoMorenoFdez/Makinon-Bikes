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

    // Muestra el string
    // console.log(movedItemString);
  }

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
    // console.log('Estado actual de Pendientes:', this.pendiente);
    // console.log('Estado actual de Confirmadas:', this.confirmada);
    // console.log('Estado actual de Canceladas:', this.cancelada);
    let citas = this.pendiente.concat(this.confirmada, this.cancelada);
    // console.log('Citas:', citas);
    this.bddService.editarEstadoCita(citas).subscribe((data: any) => {
      // console.log('Cita actualizada:', data);
    });
  }

}
