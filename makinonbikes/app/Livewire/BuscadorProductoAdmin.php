<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Illuminate\Pagination\LengthAwarePaginator;

class BuscadorProductoAdmin extends Component
{
    public $search = '';

    /**
     * Función que renderiza la vista en base a los productos que coincidan con la búsqueda
     *
     * @return void
     */
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

    /**
     * Función que se encarga de buscar los productos en base a la búsqueda del administador
     *
     * @return void
     */
    public function buscar()
    {
        $this->render();
    }

    /**
     * Función que limpia el buscador y nos devuelve de nuevo el listado de todos los productos
     *
     * @return void
     */
    public function limpiar()
    {
        $this->search = '';
        $this->render();
    }
}
