

export interface FormularioDatos {
  fecha: Date;
  tiempo: Date;
  texto: string;
  archivo?: File | null; // ? significa que es opcional
}