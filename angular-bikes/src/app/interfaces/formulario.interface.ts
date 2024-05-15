export interface FormularioDatos {
  fecha: String;
  hora: String;
  comentario: String;
  imagen?: File | null; // ? significa que es opcional
  opcion: String;
}

export interface dragDrop {
  Fecha: string;
  Hora: string;
  Estado: string;
  Opcion: string;
  id_cita_taller?: number;
}