import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class BddService {

  constructor(private http: HttpClient) { }

  login(credentials: { email: string, password: string }): Observable<any> {
    return this.http.post<any>('http://localhost:8000/api/', credentials);
  }
  // obtenerPersonajes(): Observable<Personaje[]> {
  //   return this.http.get<Personaje[]>(${this.baseUrl}/leer, { headers: this.obtenerHeaders() });
  // }
  obtenerCita(credentials: { id: number }): Observable<any> {
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.post<any>('http://localhost:8000/obtenerCitas', credentials, { headers });
  }



  enviarDatos(datos: any): Observable<any> {
    return this.http.post<any>('http://localhost:8000/api/datos', datos);
  }
}
