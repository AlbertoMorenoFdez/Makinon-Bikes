import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpHeaders } from '@angular/common/http';
import { dragDrop } from '../../../interfaces/formulario.interface';
//import { FormularioDatos } from '../../interfaces/formulario.interface';

@Injectable({
  providedIn: 'root'
})
export class BddService {

  constructor(private http: HttpClient) { }

  traerDatosUsuario(): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.get<any>('http://localhost:8000/api/traerDatos', { headers });
  }

  obtenerTodasCitas(): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.get<any>('http://localhost:8000/api/calendario', { headers });
  }

  // crearCita(formularioDatos: any): Observable<any> {
  //   console.log('Datos a enviar:', formularioDatos)
  //   const token = localStorage.getItem('token');
  //   const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
  //   return this.http.post<any>('http://localhost:8000/api/cita_taller', formularioDatos, { headers });
  // }

  crearCita(formularioDatos: any): Observable<any> {
    console.log('Datos a enviar:', formularioDatos)
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);

    const formData: FormData = new FormData();
    formData.append('fecha', formularioDatos.fecha);
    formData.append('hora', formularioDatos.hora);
    formData.append('comentario', formularioDatos.comentario);
    formData.append('opcion', formularioDatos.opcion);

    if (formularioDatos.imagen) {
      formData.append('imagen', formularioDatos.imagen, formularioDatos.imagen.name);
    }

    return this.http.post<any>('http://localhost:8000/api/cita_taller', formData, { headers });
  }

  // Obtiene todas las citas de un usuario de la bbdd
  obtenerCitas(): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.get<any>('http://localhost:8000/api/cita_taller', { headers });
  }

  // Edita una cita en la bbdd
  editarCita(credentials: { id: number }): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.put<any>('http://localhost:8000/api/cita_taller', credentials, { headers });
  }

  // Elimina una cita de la bbdd
  eliminarCita(id: number): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.delete<any>('http://localhost:8000/api/cita_taller', { headers, params: { id_cita_taller: id } });
  }

  enviarDatos(datos: any): Observable<any> {
    console.log('Datos a enviar:', datos)
    return this.http.post<any>('http://localhost:8000/api/datos', datos);
  }

  // Edita el estado de las citas cuando usamos el Drag & Drop
  editarEstadoCita(citas: dragDrop[]): Observable<any> {
    console.log('No array', citas)

    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);

    if (!Array.isArray(citas)) {
      console.error('Se esperaba un array de citas, pero se recibió:', citas);
      return new Observable<any>();
    }

    console.log('Array de citas:', citas);

    return this.http.put<any>('http://localhost:8000/api/citaPendiente', citas, { headers });
  }
}

