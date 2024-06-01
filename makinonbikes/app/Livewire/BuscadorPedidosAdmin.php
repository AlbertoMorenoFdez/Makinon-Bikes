<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pedido;

class BuscadorPedidosAdmin extends Component
{
    public $search = '';

    /**
     * Función que renderiza la vista en base a los pedidos que coincidan con la búsqueda
     *
     * @return void
     */
    public function render()
    {
        $pedidos = [];

        $pedidos = Pedido::join('usuario', 'pedido.id_usuario', '=', 'usuario.id_usuario')
            ->where('id_pedido', 'like', '%' . $this->search . '%')
            ->orWhere('fecha', 'like', '%' .  $this->search . '%')
            ->orWhere('total', 'like', '%' . $this->search . '%')
            ->orWhere('estado', 'like', '%' . $this->search . '%')
            ->orWhere('usuario.nombre', 'like', '%' . $this->search . '%')
            ->select('pedido.*')
            ->paginate(10);
        return view('livewire.buscador-pedidos-admin', ['pedidos' => $pedidos]);
    }

    /**
     * Función que se encarga de buscar los pedidos en base a la búsqueda
     *
     * @return void
     */
    public function buscar()
    {
        $this->render();
    }

    /**
     * Función que limpia el buscador y nos devuelve de nuevo el listado de todos los pedidos
     *
     * @return void
     */
    public function limpiar()
    {
        $this->search = '';
        $this->render();
    }
}
