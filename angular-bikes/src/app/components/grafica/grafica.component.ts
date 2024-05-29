import { Component,ViewChild, ElementRef, AfterViewInit } from '@angular/core';
import {MatTabsModule} from '@angular/material/tabs';
import { Chart, registerables,ChartConfiguration} from 'chart.js';
import { BddService } from '../../core/services/bdd/bdd.service';

@Component({
  selector: 'app-grafica',
  standalone: true,
  imports: [MatTabsModule],
  templateUrl: './grafica.component.html',
  styleUrl: './grafica.component.css'
})

// Componente que se encarga de mostrar las  gráficas
export class GraficaComponent  {

  pendiente: any[] = [];
  confirmada: any[] = [];
  cancelada: any[] = [];

  revisionBicicleta: any[] = []; 
  repararPinchazo: any[] = [];
  montarComponente: any[] = [];
  revisionSuspensiones: any[] = [];
  lavadoEngrase: any[] = [];
 

  mesAnterior: any[] = [];
  mesActual: any[] = [];
  mesSiguiente: any[] = [];


  @ViewChild('chartCanvasEstado') chartCanvasEstado!: ElementRef<HTMLCanvasElement>;
  chartEstado!: Chart;

  @ViewChild('chartCanvasFecha') chartCanvasFecha!: ElementRef<HTMLCanvasElement>;
  chartFecha!: Chart;

  @ViewChild('chartCanvasOpcion') chartCanvasOpcion!: ElementRef<HTMLCanvasElement>;
  chartOpcion!: Chart;

  constructor(private bddService: BddService) {
    Chart.register(...registerables); 
  }

  ngOnInit(): void {
    this.traerCitasEstado();
    this.traerCitasFecha();
    this.traerCitasOpcion();
  }
 
  // Método que se encarga de traer las citas de la bdd y la clasifica en pendientes, confirmadas y canceladas
  traerCitasOpcion() {
    this.bddService.obtenerTodasCitas().subscribe((data: any[]) => {
      data.forEach((evento: any) => {
        switch (evento.opcion) {
          case 'Revision bicicleta':
            this.revisionBicicleta.push(evento);
            break;
          case 'Reparar pinchazo':
            this.repararPinchazo.push(evento);
            break;
          case 'Montar componente':
           this. montarComponente.push(evento);
            break;
          case 'Revision suspensiones':
           this.revisionSuspensiones.push(evento);
            break;
          case 'Lavado y engrase':
            this.lavadoEngrase.push(evento);
            break;
        }
      });

      // Llamar a la función para actualizar la gráfica
      this.actualizarGraficaRadar(this.revisionBicicleta,
                                  this.repararPinchazo, 
                                  this.montarComponente, 
                                  this.revisionSuspensiones, 
                                  this.lavadoEngrase);
    });
  }


  // Método que se encarga de actualizar la gráfica de radar y las clasificas por opciones
  actualizarGraficaRadar(revisionBicicleta: any[], repararPinchazo: any[], montarComponente: any[], revisionSuspensiones: any[], lavadoEngrase: any[]) {
    const config: ChartConfiguration = {
      type: 'radar',
      data: {
        labels: ['Revisión Bicicleta', 'Reparar Pinchazo', 'Montar Componente', 'Revisión Suspensiones', 'Lavado y Engrase'],
        datasets: [{
          label: 'Número de Citas',
          data: [
            revisionBicicleta.length,
            repararPinchazo.length,
            montarComponente.length,
            revisionSuspensiones.length,
            lavadoEngrase.length
          ],
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgb(54, 162, 235)',
          pointBackgroundColor: 'rgb(54, 162, 235)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgb(54, 162, 235)'
        }]
      },
      options: {
        elements: {
          line: {
            borderWidth: 3
          }
        },
        scales: {
          r: {
            angleLines: {
              display: false
            },
            suggestedMin: 0,
            suggestedMax: 10
          }
        }
      }
    };

    if (this.chartOpcion) {
      this.chartOpcion.destroy();
    }

    this.chartOpcion = new Chart(this.chartCanvasOpcion.nativeElement, config);
  }


  // Método que se encarga de traer las citas de la bdd y la clasifica en pendientes, confirmadas y canceladas
  traerCitasEstado() {
    this.bddService.obtenerTodasCitas().subscribe((data: any[]) => {
      data.forEach((evento: any) => {
        if (evento.estado === 'pendiente') {
          this.pendiente.push(evento);
        } else if (evento.estado === 'confirmada') {
          this.confirmada.push(evento);
        } else if (evento.estado === 'cancelada') {
          this.cancelada.push(evento);
        }
      });
  
      // Llamar a la función para actualizar la gráfica
      this.actualizarGrafica();
    });
  }

  

  // Método que se encarga de traer las citas de la bdd y la clasifica por fechas
  traerCitasFecha() {
    const hoy = new Date();
    const mesActual = hoy.getMonth();
    const mesAnterior = new Date(hoy.getFullYear(), hoy.getMonth() - 1, 1).getMonth();
    const mesSiguiente = new Date(hoy.getFullYear(), hoy.getMonth() + 1, 1).getMonth();
  
    // Reiniciar los contadores o arrays para asegurarse de que están limpios en cada llamada
    this.mesAnterior = [];
    this.mesActual = [];
    this.mesSiguiente = [];
  
    this.bddService.obtenerTodasCitas().subscribe((data: any[]) => {
      data.forEach((evento: any) => {
        const fechaEvento = new Date(evento.fecha);
        const mesEvento = fechaEvento.getMonth();
  
        if (mesEvento === mesAnterior) {
          this.mesAnterior.push(evento);
        } else if (mesEvento === mesActual) {
          this.mesActual.push(evento);
        } else if (mesEvento === mesSiguiente) {
          this.mesSiguiente.push(evento);
        }
      });
  
      // Llamada a actualizar la gráfica después de procesar los datos
      this.actualizarGraficaDeLineas();
    });
  }

  // Método que se encarga de actualizar la gráfica de líneas
  actualizarGraficaDeLineas() {
    const meses = ['Mes Anterior', 'Mes Actual', 'Mes Siguiente'];
    const conteoCitas = [
      this.mesAnterior.length,
      this.mesActual.length,
      this.mesSiguiente.length
    ];
  
    if (this.chartFecha) {
      this.chartFecha.destroy();
    }
  
    this.chartFecha = new Chart(this.chartCanvasFecha.nativeElement, {
      type: 'line', // Tipo de gráfica: Línea
      data: {
        labels: meses,
        datasets: [{
          label: 'Número de Citas',
          data: conteoCitas,
          fill: false,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1 // Hace la línea un poco curva
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  }
      
  // Método que se encarga de actualizar la gráfica de barras
  actualizarGrafica() {
    if (this.chartEstado) {
      this.chartEstado.destroy(); // Destruye la gráfica existente antes de crear una nueva
    }
  
    this.chartEstado = new Chart(this.chartCanvasEstado.nativeElement, {
      type: 'bar',
      data: {
        labels: ['Pendiente', 'Confirmada', 'Cancelada', 'Total'],
        datasets: [{
          label: 'Cantidad de Citas',
          data: [
            this.pendiente.length,
            this.confirmada.length,
            this.cancelada.length,
            this.pendiente.length + this.confirmada.length + this.cancelada.length
          ],
          backgroundColor: [
            'rgba(255, 206, 86, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(75, 192, 192, 0.6)'
          ],
          borderColor: [
            'rgba(255, 206, 86, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 99, 132, 1)',
            'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  }
}

