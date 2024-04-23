<div class="content-div" id="login">
    @if ($usuarioAutenticado)
        <div style="display:flex; aling-items:center; ">
            <a href="{{ route('usuario.perfil') }}"
                style="margin: 0 10px 0 5px; color:#fb6200; text-decoration: none">{{ Auth::user()->nombre }}</a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    @else
        <a href="{{ route('login') }}" style="text-decoration: none; color: grey">LOGIN</a>
    @endif

    <div class="dropdown perfil">
        <button class="dropbtn perfil">
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="{{ route('usuario.perfil') }}">@lang('makinon.perfil')</a>
            @auth
                @if (Auth::user()->rol == 'admin')
                    <a href="{{ route('usuario.panelAdmin') }}">@lang('makinon.panelAdmin')</a>
                @endif
            @endauth

            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
        </div>
    </div>
</div>
