import { Component } from '@angular/core';
import { GoogleMapsModule } from '@angular/google-maps';


@Component({
  selector: 'app-google-maps',
  standalone: true,
  imports: [ GoogleMapsModule],
  templateUrl: './google-maps.component.html',
  styleUrl: './google-maps.component.css'
})

// Componente que se encarga de mostrar un mapa de Google Maps
export class GoogleMapsComponent  {
 
  center: google.maps.LatLngLiteral = { lat: 36.710604, lng: -4.468783 };  // Coordenadas de la Estación de Autobuses de Málaga
  zoom = 15;
  markerOptions: google.maps.MarkerOptions = { draggable: false };  // Opciones del marcador
  markerPosition: google.maps.LatLngLiteral = { lat: 36.710604, lng: -4.468783 };
} 
