import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
// Servicio para obtener los festivos del año 2024 en España y sus regiones
export class ApiFestivoService {

  private urlApi: string = 'https://date.nager.at/api/v3/publicholidays/2024/ES';

  constructor(private http:HttpClient) { }

  public getData():Observable<any> {
    return this.http.get(this.urlApi);
  }
}
