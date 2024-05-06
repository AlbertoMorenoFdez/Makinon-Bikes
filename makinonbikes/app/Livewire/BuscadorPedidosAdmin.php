<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pedido;

class BuscadorPedidosAdmin extends Component
{
    public $search ='';

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
