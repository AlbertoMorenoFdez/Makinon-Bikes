<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Usuario;

class BuscadorUsuarioAdmin extends Component
{
    public $search = '';

    /**
     * Función que renderiza la vista en base a los usuarios que coincidan con la búsqueda
     *
     * @return void
     */
    public function render()
    {
        $usuarios = [];

        $usuarios = Usuario::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' .  $this->search . '%')
            ->orWhere('telefono', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.buscador-usuario-admin', ['usuarios' => $usuarios]);
    }

    /**
     * Función que se encarga de buscar los usuarios en base a la búsqueda que hace el administrador
     *
     * @return void
     */
    public function buscar()
    {
        $this->render();
    }

    /**
     * Función que limpia el buscador y nos devuelve de nuevo el listado de todos los usuarios
     *
     * @return void
     */
    public function limpiar()
    {
        $this->search = '';
        $this->render();
    }
}
