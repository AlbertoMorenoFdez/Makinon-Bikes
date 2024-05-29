import { Component, OnInit } from '@angular/core';
import { CalendarOptions } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import { FullCalendarModule } from '@fullcalendar/angular';
import { CommonModule } from '@angular/common';
import { ApiFestivoService } from '../../core/services/api-festivo/api-festivo.service';
import { BddService } from '../../core/services/bdd/bdd.service';
import { RolesService } from '../../core/services/roles/roles.service';
import { EditarFormularioComponent } from '../obtener-cita/editar-formulario/editar-formulario.component';


@Component({
  selector: 'app-calendario',
  standalone: true,
  imports: [FullCalendarModule, CommonModule, EditarFormularioComponent],
  templateUrl: './calendario.component.html',
  styleUrl: './calendario.component.css'

})

// Componente que se encarga de mostrar el calendario
export class CalendarioComponent implements OnInit {
  data: any[] = [];
  eventosFestivos: any[] = []; // Declara un array para almacenar los eventos festivos
  rol: string = 'user';
  constructor(private apiFestivoService: ApiFestivoService,
    private bddService: BddService,
    private rolesService: RolesService) { }

  ngOnInit(): void {
    this.llenarDatos();

  }


  // Método que se encarga de llenar los datos del calendario con los eventos festivos y las citas de la bdd
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
    let role = this.rolesService.getUserRole().subscribe((role: string) => {
      this.rol = role;
    });

    this.bddService.obtenerTodasCitas().subscribe((data: any[]) => {
      this.data = data;
      this.data.forEach((evento: any) => {
        if (this.rol === 'user') {
          this.eventosFestivos.push({
            title: "Ocupado",
            start: `${evento.fecha}T${evento.hora}`
          });
        } else if (this.rol === 'admin') {
          this.eventosFestivos.push({
            title: evento.opcion,
            start: `${evento.fecha}T${evento.hora}`
          });
        }
        // Actualizar los eventos del calendario con los eventos festivos
      this.festivosEventosCalendario();
      });
      
    });
  }

  // Método que se encarga de asignar los eventos festivos al calendario
  festivosEventosCalendario() {
    // Asignar los eventos festivos a la propiedad events de calendarOptions
    this.calendarOptions.events = [...this.eventosFestivos];
  }

  calendarOptions: CalendarOptions = {
    plugins: [dayGridPlugin],
    initialView: 'dayGridMonth',
    height: 'auto', // Ajusta la altura automáticamente al número de semanas
    contentHeight: 'auto', // Otra forma de controlar la altura del contenido
    aspectRatio: 1.35, // Controla la relación de aspecto del calendario
    weekends: false, // Decide si mostrar o no los fines de semana
    events: [] // Eventos que se añadirán dinámicamente
  };

}
