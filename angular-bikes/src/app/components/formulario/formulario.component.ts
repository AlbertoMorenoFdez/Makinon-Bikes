import { Component } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { DatePickerComponent } from '../date-picker/date-picker.component';
import { TimepickerComponent } from '../timepicker/timepicker.component';
import { SubirArchivoComponent } from '../subir-archivo/subir-archivo.component';

@Component({
  selector: 'app-formulario',
  standalone: true,
  imports: [HttpClientModule,
            DatePickerComponent,
            TimepickerComponent,
            SubirArchivoComponent
  ],
  templateUrl: './formulario.component.html',
  styleUrl: './formulario.component.css'
})
export class FormularioComponent {

}
