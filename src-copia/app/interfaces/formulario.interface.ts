
export interface FormularioDatos {
  fecha: String;
  hora: String;
  comentario: string;
  imagen?: File | null; // ? significa que es opcional
  opcion: string;
}