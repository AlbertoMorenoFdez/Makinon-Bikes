<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Proveedor;

class BuscadorProveedorAdmin extends Component
{
    public $search = '';

    /**
     * Función que renderiza la vista en base a los proveedores que coincidan con la búsqueda
     *
     * @return void
     */
    public function render()
    {
        $proveedores = [];

        $proveedores = Proveedor::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('direccion', 'like', '%' .  $this->search . '%')
            ->orWhere('telefono', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.buscador-proveedor-admin', ['proveedores' => $proveedores]);
    }

    /**
     * Función que se encarga de buscar los proveedores en base a la búsqueda que hace el administrador
     *
     * @return void
     */
    public function buscar()
    {
        $this->render();
    }

    /**
     * Función que limpia el buscador y nos devuelve de nuevo el listado de todos los proveedores
     *
     * @return void
     */
    public function limpiar()
    {
        $this->search = '';
        $this->render();
    }
}
