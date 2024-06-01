<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MakinonIdiomaDropdown extends Component
{
    public $idiomaSeleccionado;

    /**
     * Creción de una nueva instancia del componente.
     */
    public function __construct()
    {
        $this->idiomaSeleccionado = $this->obtenerIdiomaSeleccionado();
    }

    /**
     * Renderiza el componente.
     */
    public function render(): View|Closure|string
    {
        return view('components.makinon-idioma-dropdown');
    }

    /**
     * Obtiene el idioma seleccionado.
     */
    public function obtenerIdiomaSeleccionado()
    {
        return request()->cookie('idioma', 'es');
    }
}
