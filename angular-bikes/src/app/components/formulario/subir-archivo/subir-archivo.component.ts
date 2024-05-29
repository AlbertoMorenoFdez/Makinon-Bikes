
import { Component, EventEmitter, Output, Input, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Observable } from 'rxjs';
import { SubirArchivoService } from '../../../core/services/subir-archivo/subir-archivo.service';

@Component({
  selector: 'app-subir-archivo',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './subir-archivo.component.html',
  styleUrls: ['./subir-archivo.component.css']
})

// Funcion que se encarga de gestionar el componente de subida de archivos
export class SubirArchivoComponent implements OnInit {
  currentFile?: File;
  message = '';
  fileInfos?: Observable<any>;

  constructor(private subirServicio: SubirArchivoService) { }

  @Input() archivoSeleccionado: File | null | undefined = null;
  @Output() almacenarFichero = new EventEmitter<File>();

  ngOnInit(): void {
    // this.fileInfos = this.subirServicio.getFiles();
  }

  //Metodo que se encarga de almacenar el archivo seleccionado
  selectFile(event: any): void {
    const fichero = (event.target as HTMLInputElement).files?.[0];
    if (fichero) {
      this.currentFile = fichero;
      this.almacenarFichero.emit(fichero);
    }
  }
}
