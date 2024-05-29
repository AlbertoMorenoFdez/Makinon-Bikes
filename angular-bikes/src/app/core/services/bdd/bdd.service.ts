import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable, observable } from 'rxjs';
import { HttpHeaders } from '@angular/common/http';
import { dragDrop } from '../../../interfaces/formulario.interface';

@Injectable({
  providedIn: 'root'
})

// Servicio para gestionar la base de datos conectandose a la API rest de laravel
export class BddService {

  constructor(private http: HttpClient) { }

  // Obtiene los datos de un usuario de la bbdd
  traerDatosUsuario(): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.get<any>('http://localhost:8000/api/traerDatos', { headers });
  }

  // Obtiene todas las citas de la bbdd
  obtenerTodasCitas(): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.get<any>('http://localhost:8000/api/calendario', { headers });
  }

  // Crea una cita en la bbdd
  crearCita(formularioDatos: any): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    const formData: FormData = new FormData();
    formData.append('opcion', formularioDatos.opcion);
    formData.append('fecha', formularioDatos.fecha);
    formData.append('hora', formularioDatos.hora);
    formData.append('estado', formularioDatos.estado || 'pendiente');
    formData.append('comentario', formularioDatos.comentario);

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

  // Obtiene una cita en especifica del usuario logueado de la bbdd
  obtenerCitaId(id: number): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.get<any>(`http://localhost:8000/api/obtenerCitaId/${id}`, { headers });
  }


  // Edita una cita en la bbdd
  editarCitaUsuario(formularioDatos: any): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.post<any>('http://localhost:8000/api/editarCitaUsuario', formularioDatos, { headers });
  }

  // Elimina una cita de la bbdd
  eliminarCita(id: number): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.delete<any>('http://localhost:8000/api/cita_taller', { headers, params: { id_cita_taller: id } });
  }

  // Envia los datos de la bbdd
  enviarDatos(datos: any): Observable<any> {
    return this.http.post<any>('http://localhost:8000/api/datos', datos);
  }

  // Edita el estado de las citas cuando usamos el Drag & Drop
  editarEstadoCita(citas: dragDrop[]): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);

    if (!Array.isArray(citas)) {
      console.error('Se esperaba un array de citas, pero se recibió:', citas);
      return new Observable<any>();
    }

    return this.http.put<any>('http://localhost:8000/api/citaPendiente', citas, { headers });
  }
}

