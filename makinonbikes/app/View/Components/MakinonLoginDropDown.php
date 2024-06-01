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
     * Crea una nueva instancia del componente.
     */
    public function __construct()
    {
        $this->usuarioAutenticado = Auth::check();
    }

    /**
     * Renderiza el componente.
     */
    public function render(): View|Closure|string
    {
        return view('components.makinon-login-dropdown');
    }
}
