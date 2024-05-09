export interface FormularioDatos {
  fecha: string;
  tiempo: string;
  texto: string;
  archivo?: File | null; // ? significa que es opcional
}