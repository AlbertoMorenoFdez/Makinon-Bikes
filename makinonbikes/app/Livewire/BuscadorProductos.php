<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;

class BuscadorProductos extends Component
{

    public $search = '';
    public $mensaje;

    public function render()
    {
        $productos = [];
        if (!empty($this->search)) {
            $productos = Producto::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('tipo','like','%'.$this->search.'%')
            ->orWhere('descripcion_corta','like', '%'.$this->search.'%')
            ->get();
        }
        return view('livewire.buscador-productos',['productos' => $productos, 'mensaje' => $this->mensaje]);
    }

    public function buscar(){
        $this->render();
    }
}
