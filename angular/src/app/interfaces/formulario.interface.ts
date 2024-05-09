export interface FormularioDatos {
  fecha: Date;
  tiempo: string;
  texto: string;
  archivo?: File | null; // ? significa que es opcional
}