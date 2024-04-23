<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MakinonMenuLateral extends Component
{
    public $marcas;
    /**
     * Create a new component instance.
     */
    public function __construct($marcas)
    {
        $this->marcas = $marcas;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.makinon-menu-lateral');
    }
}
