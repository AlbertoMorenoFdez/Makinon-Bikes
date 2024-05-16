<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CitaTaller;

class ListadoCitasTaller extends Component
{
    use WithPagination;

    public $orden = 'asc';
    public $campoOrdenacion = 'fecha';

    public function ordenAscendente($campo)
    {
        $this->campoOrdenacion = $campo;
        $this->orden = 'asc';
    }

    public function ordenDescendente($campo)
    {
        $this->campoOrdenacion = $campo;
        $this->orden = 'desc';
    }

    public function render()
    {
        $citas = CitaTaller::orderBy($this->campoOrdenacion, $this->orden)->paginate(10);
        return view('livewire.listado-citas-taller', ['citas' => $citas]);
    }
}

