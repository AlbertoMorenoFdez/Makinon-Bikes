import { Injectable } from '@angular/core';
import { FormularioDatos } from '../../../interfaces/formulario.interface';
import { MatDialog } from '@angular/material/dialog';
import { BddService } from '../../services/bdd/bdd.service';
import { ErrorDialogoComponent } from '../../../components/error-dialogo/error-dialogo.component';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root',
})
export class ValidacionFormularioService {
  private eventosFestivos: { title: string; start: string }[] = [];

  constructor(private dialog: MatDialog, private bddService: BddService) {}

  setEventosFestivos(eventos: { title: string; start: string }[]) {
    this.eventosFestivos = eventos;
  }

  esFormularioValido(datosFormulario: FormularioDatos): boolean {
    const fechaValida = this.esFechaValida(datosFormulario.fecha);
    const horaValida = this.esHoraValida(datosFormulario.hora);
    const comentarioValido = datosFormulario.comentario.length >= 5;
    const opcionValida = datosFormulario.opcion.length >= 5;

    return fechaValida && horaValida && comentarioValido && opcionValida;
  }

  private esFechaValida(fecha: string): boolean {
    const hoy = new Date();
    const fechaSeleccionada = new Date(fecha);
    
    hoy.setHours(0, 0, 0, 0);
    fechaSeleccionada.setHours(0, 0, 0, 0);

    if (fechaSeleccionada < hoy) {
      this.mostrarError('La fecha no puede ser anterior al día de hoy.');
      return false;
    }

    const diaSemana = fechaSeleccionada.getDay();
    if (diaSemana === 0 || diaSemana === 6) {
      this.mostrarError('La fecha no puede ser en fin de semana.');
      return false;
    }

    for (const evento of this.eventosFestivos) {
      const fechaEvento = new Date(evento.start);
      fechaEvento.setHours(0, 0, 0, 0);
      if (fechaSeleccionada.getTime() === fechaEvento.getTime()) {
        this.mostrarError('La fecha no puede ser un día festivo.');
        return false;
      }
    }

    return true;
  }

  private esHoraValida(hora: string): boolean {
    const [hours, minutes] = hora.split(':').map(Number);

    if (
      (hours >= 10 && hours < 14) ||
      (hours >= 16 && hours < 20)
    ) {
      return true;
    }

    this.mostrarError('La hora debe estar entre las 10:00 y 14:00, o entre las 16:00 y 20:00.');
    return false;
  }

  verificarDisponibilidadCita(fecha: string, hora: string): Observable<boolean> {
    return this.bddService.obtenerTodasCitas().pipe(
      map((citas: any[]) => {
        const nuevaFechaHora = new Date(`${fecha}T${hora}`);
        const existeCitaEnRango = citas.some(cita => {
          const citaFechaHora = new Date(`${cita.fecha}T${cita.hora}`);
          return this.estaEnRangoDeUnaHora(nuevaFechaHora, citaFechaHora);
        });

        if (existeCitaEnRango) {
          this.mostrarError('Ya existe una cita programada dentro de una hora de esta fecha y hora.');
        }

        return !existeCitaEnRango;
      })
    );
  }

  private estaEnRangoDeUnaHora(fechaHora1: Date, fechaHora2: Date): boolean {
    const diferenciaMilisegundos = Math.abs(fechaHora1.getTime() - fechaHora2.getTime());
    const unaHoraEnMilisegundos = 60 * 60 * 1000;
    return diferenciaMilisegundos < unaHoraEnMilisegundos;
  }

  private mostrarError(mensaje: string) {
    this.dialog.open(ErrorDialogoComponent, {
      data: { message: mensaje }
    });
  }
}
