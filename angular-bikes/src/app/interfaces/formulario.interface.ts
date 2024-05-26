export interface FormularioDatos {
  fecha: string;
  hora: string;
  comentario: string;
  imagen?: File | null; // ? significa que es opcional
  opcion: string;
}

export interface FormularioDatosEditar {
  id_cita_taller: number;
  fecha: string;
  hora: string;
  comentario: string;
  imagen?: File | null; // ? significa que es opcional
  opcion: string;
}

export interface dragDrop {
  Fecha: string;
  Hora: string;
  Estado: string;
  Opcion: string;
  id_cita_taller?: number;
}