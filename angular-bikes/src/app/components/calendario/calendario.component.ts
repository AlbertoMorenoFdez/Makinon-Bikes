import { Component, OnInit } from '@angular/core';
import { CalendarOptions } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import { FullCalendarModule } from '@fullcalendar/angular';
import { CommonModule } from '@angular/common';
import { ApiFestivoService } from '../../core/services/api-festivo/api-festivo.service';
import { BddService } from '../../core/services/bdd/bdd.service';
import { co } from '@fullcalendar/core/internal-common';
import { RolesService } from '../../core/services/roles/roles.service';
import { EditarFormularioComponent } from '../obtener-cita/editar-formulario/editar-formulario.component';


@Component({
  selector: 'app-calendario',
  standalone: true,
  imports: [FullCalendarModule, CommonModule, EditarFormularioComponent],
  templateUrl: './calendario.component.html',
  styleUrl: './calendario.component.css'

})


export class CalendarioComponent implements OnInit {
  data: any[] = [];
  eventosFestivos: any[] = []; // Declara un array para almacenar los eventos festivos
 
  constructor(private apiFestivoService: ApiFestivoService,
              private bddService: BddService,
              private rolesService: RolesService) { }

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
    
    this.bddService.obtenerCitas().subscribe(data => {
      this.data = data;
      this.data.forEach(evento => {
        // Agregar eventos festivos al array eventosFestivos
        this.eventosFestivos.push({
          title: "Ocupado",
          start: `${evento.fecha}T${evento.hora}` 
          
        });
      });
      // Actualizar los eventos del calendario con los eventos festivos
      this.festivosEventosCalendario();
    }
    );
  }
  // llenarDatos() {
  //   // Primero obtenemos los datos festivos que son comunes para todos los usuarios.
  //   this.apiFestivoService.getData().subscribe(data => {
  //     this.data = data;
  //     this.data.forEach(evento => {
  //       if (evento.counties === null || evento.counties.includes('ES-AN')) {
  //         this.eventosFestivos.push({
  //           title: evento.localName,
  //           start: evento.date
  //         });
  //       }
  //     });
  //     // Actualizar los eventos del calendario con los eventos festivos
  //     this.festivosEventosCalendario();
  //   });
  
  //   // A continuación, decidimos qué datos de citas cargar basado en el rol del usuario.
  //   this.rolesService.getUserRole().subscribe(role => {
  //     if (role === 'admin') {
  //       this.cargarDatosAdmin();
  //     } else if (role === 'user') {
  //       this.cargarDatosUsuario();
  //     }
  //   });
  // }
  
  // cargarDatosAdmin() {
  //   // Para el admin, cargar todas las citas con detalles
  //   this.bddService.obtenerTodasLasCitas().subscribe(data => {
  //     data.forEach(evento => {
  //       this.eventosFestivos.push({
  //         title: evento.titulo,
  //         start: `${evento.fecha}T${evento.hora}`,
  //         color: 'red'  // Colores para distinguir administrador
  //       });
  //     });
  //     this.festivosEventosCalendario();
  //   });
  // }
  
  // cargarDatosUsuario() {
  //   // Para el usuario, cargar solo las citas marcadas como 'Ocupado'
  //   this.bddService.obtenerCitas().subscribe(data => {
  //     data.forEach(evento => {
  //       this.eventosFestivos.push({
  //         title: "Ocupado",
  //         start: `${evento.fecha}T${evento.hora}`
  //       });
  //     });
  //     this.festivosEventosCalendario();
  //   });
  // }


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
