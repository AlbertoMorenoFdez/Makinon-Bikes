<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;

class BuscadorProductos extends Component
{

    public $search = '';
    public $mensaje;

    /**
     * Función que renderiza la vista en base a los productos que coincidan con la búsqueda
     *
     * @return void
     */
    public function render()
    {
        $productos = [];
        if (!empty($this->search)) {
            $productos = Producto::where('nombre', 'like', '%' . $this->search . '%')
                ->orWhere('tipo', 'like', '%' . $this->search . '%')
                ->orWhere('descripcion_corta', 'like', '%' . $this->search . '%')
                ->get();
        }
        return view('livewire.buscador-productos', ['productos' => $productos, 'mensaje' => $this->mensaje]);
    }

    /**
     * Función que se encarga de buscar los productos en base a la búsqueda del usuario
     *
     * @return void
     */
    public function buscar()
    {
        $this->render();
    }
}
