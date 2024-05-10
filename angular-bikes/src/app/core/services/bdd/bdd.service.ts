import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpHeaders } from '@angular/common/http';
//import { FormularioDatos } from '../../interfaces/formulario.interface';

@Injectable({
  providedIn: 'root'
})
export class BddService {

  constructor(private http: HttpClient) { }

  login(credentials: { email: string, password: string }): Observable<any> {
    return this.http.post<any>('http://localhost:8000/api/', credentials);
  }
  
  
  crearCita(credentials: { id: number }): Observable<any> {
    console.log('Credentials:', credentials);
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.post<any>('http://localhost:8000/api/cita_taller', credentials, { headers });
  }

  //Obtiene todas las citas de un usuario de la bbdd
obtenerCitas(): Observable<any> {
  const token = localStorage.getItem('token');
  const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
  return this.http.get<any>('http://localhost:8000/api/cita_taller', { headers });
}

//Edita una cita en la bbdd
editarCita(credentials: { id: number }): Observable<any> {
  const token = localStorage.getItem('token');
  const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
  return this.http.put<any>('http://localhost:8000/api/cita_taller', credentials, { headers });
}

//Elimina una cita de la bbdd
eliminarCita(id: number): Observable<any> {
  const token = localStorage.getItem('token');
  const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
  return this.http.delete<any>('http://localhost:8000/api/cita_taller', { headers, params: { id: id.toString() } });
}


  enviarDatos(datos: any): Observable<any> {
    console.log('Datos a enviar:', datos)
    return this.http.post<any>('http://localhost:8000/api/datos', datos);
  }
}

