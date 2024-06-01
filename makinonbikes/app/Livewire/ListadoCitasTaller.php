<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CitaTaller;

/**
 * Componente que se encarga de mostrar un listado de todas las citas de taller y podremos ordenarlas por fecha, 
 * hora, nombre del cliente, etc.
 */
class ListadoCitasTaller extends Component
{
    use WithPagination;

    public $orden = 'asc';
    public $campoOrdenacion = 'fecha';

    /**
     * Función que se encarga de ordenar las citas de taller de forma ascendente
     *
     * @param string $campo
     * @return void
     */
    public function ordenAscendente($campo)
    {
        $this->campoOrdenacion = $campo;
        $this->orden = 'asc';
    }

    /**
     * Función que se encarga de ordenar las citas de taller de forma descendente
     *
     * @param string $campo
     * @return void
     */
    public function ordenDescendente($campo)
    {
        $this->campoOrdenacion = $campo;
        $this->orden = 'desc';
    }

    /**
     * Función que renderiza la vista en base a las citas de taller que tenemos en la base de datos
     *
     * @return void
     */
    public function render()
    {
        $citas = CitaTaller::orderBy($this->campoOrdenacion, $this->orden)->paginate(10);
        return view('livewire.listado-citas-taller', ['citas' => $citas]);
    }
}
