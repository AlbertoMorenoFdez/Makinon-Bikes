<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MakinonMenuLateral extends Component
{
    public $marcas;
    /**
     * Crea una nueva instancia del componente.
     */
    public function __construct($marcas)
    {
        $this->marcas = $marcas;
    }

    /**
     * Renderiza el componente.
     */
    public function render(): View|Closure|string
    {
        return view('components.makinon-menu-lateral');
    }
}
