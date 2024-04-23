<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Illuminate\Pagination\LengthAwarePaginator;

class BuscadorProductoAdmin extends Component
{
    public $search = '';

    public function render()
    {
        $productos = [];

        $productos = Producto::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('tipo', 'like', '%' .  $this->search . '%')
            ->orWhere('descripcion_corta', 'like', '%' . $this->search . '%')
            ->orWhereHas('proveedor', function ($query) {
                $query->where('nombre', 'like', '%' . $this->search . '%');
            })
            ->paginate(10);

        return view('livewire.buscador-producto-admin', ['productos' => $productos]);
    }

    public function buscar()
    {
        $this->render();
    }

    public function limpiar()
    {
        $this->search = '';
        $this->render();
        
    }
}
