<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MakinonIdiomaDropdown extends Component


{
    public $idiomaSeleccionado;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->idiomaSeleccionado = $this->obtenerIdiomaSeleccionado();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.makinon-idioma-dropdown');
    }

    public function obtenerIdiomaSeleccionado()
    {
        return request()->cookie('idioma', 'es');
    }
}
