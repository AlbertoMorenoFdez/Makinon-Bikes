<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Usuario;

class BuscadorUsuarioAdmin extends Component
{
    public $search = '';

    public function render()
    {
        $usuarios = [];

        $usuarios = Usuario::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' .  $this->search . '%')
            ->orWhere('telefono', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.buscador-usuario-admin',['usuarios' => $usuarios]);
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
