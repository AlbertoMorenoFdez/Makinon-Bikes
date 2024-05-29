//Interface para el formulario de registro de citas
export interface FormularioDatos {
  fecha: string;
  hora: string;
  comentario: string;
  imagen?: File | null; // ? significa que es opcional
  opcion: string;
}

//Interface para el formulario de editar los registro de las citas
export interface FormularioDatosEditar {
  id_cita_taller: number;
  fecha: string;
  hora: string;
  comentario: string;
  imagen?: File | null; 
  opcion: string;
}

//Interface para el drag and drop de la parte admin
export interface dragDrop {
  Fecha: string;
  Hora: string;
  Estado: string;
  Opcion: string;
  id_cita_taller?: number;
}