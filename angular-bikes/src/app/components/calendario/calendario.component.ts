import { Component, OnInit } from '@angular/core';
import { CalendarOptions } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import { FullCalendarModule } from '@fullcalendar/angular';
import { CommonModule } from '@angular/common';
import { ApiFestivoService } from '../../core/services/api-festivo/api-festivo.service';


@Component({
  selector: 'app-calendario',
  standalone: true,
  imports: [FullCalendarModule, CommonModule],
  templateUrl: './calendario.component.html',
  styleUrl: './calendario.component.css'
})


export class CalendarioComponent implements OnInit {
  data: any[] = [];
  eventosFestivos: any[] = []; // Declara un array para almacenar los eventos festivos

  constructor(private apiFestivoService: ApiFestivoService) { }

  ngOnInit(): void {
    this.llenarDatos();
  }

  llenarDatos() {
    this.apiFestivoService.getData().subscribe(data => {
      this.data = data;
      this.data.forEach(evento => {
        if (evento.counties === null || evento.counties.includes('ES-AN')) {
          // Agregar eventos festivos al array eventosFestivos
          this.eventosFestivos.push({
            title: evento.localName,
            start: evento.date
          });
        }
      });
      // Actualizar los eventos del calendario con los eventos festivos
      this.festivosEventosCalendario();
    });
  }

  festivosEventosCalendario() {
    // Asignar los eventos festivos a la propiedad events de calendarOptions
    this.calendarOptions.events = this.eventosFestivos;
  }

  calendarOptions: CalendarOptions = {
    plugins: [dayGridPlugin],
    initialView: 'dayGridMonth',
    weekends: false,
    events: [] // Inicialmente vacío, se llenará con los eventos festivos
  };
}
