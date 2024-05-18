import { Component,EventEmitter,Output, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpResponse } from '@angular/common/http';
import { Observable } from 'rxjs';
import { SubirArchivoService } from '../../../core/services/subir-archivo/subir-archivo.service';

@Component({
  selector: 'app-subir-archivo',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './subir-archivo.component.html',
  styleUrl: './subir-archivo.component.css'
})
export class SubirArchivoComponent implements OnInit {
  currentFile?: File;
  message = '';
  fileInfos?: Observable<any>;

  constructor(private subirServicio: SubirArchivoService) { }
  @Output() almacenarFichero = new EventEmitter<File>();

  ngOnInit(): void {
    //this.fileInfos = this.subirServicio.getFiles();
  }

  enviarFichero(event: any) {
    const fichero = (event.target as HTMLInputElement).files?.[0];
  if (fichero) {
    this.almacenarFichero.emit(fichero);
  }
  }
  

  selectFile(event: any): void {
    if (event.target.files && event.target.files.length > 0) {
      this.currentFile = event.target.files.item(0);
      this.almacenarFichero.emit(this.currentFile);
      console.log(this.currentFile);
    }
  }

  /* upload(): void {
    if (this.currentFile) {
      this.subirServicio.upload(this.currentFile).subscribe({
        next: (event: any) => {
          if (event instanceof HttpResponse) {
            this.message = event.body.message;
            //this.fileInfos = this.subirServicio.getFiles();
          }
        },
        error: (err: any) => {
          console.log(err);

          if (err.error && err.error.message) {
            this.message = err.error.message;
          } else {
            this.message = 'Could not upload the file!';
          }
        },
        complete: () => {
          this.currentFile = undefined;
        },
      });
    } 
  }*/
}

