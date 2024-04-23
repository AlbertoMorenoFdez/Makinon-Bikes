<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class MakinonLoginDropDown extends Component
{

    public $usuarioAutenticado;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->usuarioAutenticado = Auth::check();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.makinon-login-dropdown');
    }
}
