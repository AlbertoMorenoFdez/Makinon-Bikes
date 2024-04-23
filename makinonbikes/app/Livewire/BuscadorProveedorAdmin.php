<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Proveedor;

class BuscadorProveedorAdmin extends Component
{
    public $search = '';

    public function render()
    {
        $proveedores = [];

        $proveedores = Proveedor::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('direccion', 'like', '%' .  $this->search . '%')
            ->orWhere('telefono', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.buscador-proveedor-admin',['proveedores' => $proveedores]);
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
