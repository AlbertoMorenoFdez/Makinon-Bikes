@extends('layouts.app')

@section('main')
    {{-- Muestra el perfil del usuario --}}

    <div class="card" style="width: 50%">
        <div class="card-header">
            <h2>@lang('makinon.perfilUsu')</h2>
        </div>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="cardBodyPerfil">
            <div class="card-body ">
                <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
                <p><strong>Apellidos:</strong> {{ $usuario->apellidos }}</p>
                <p><strong>Email:</strong> {{ $usuario->email }}</p>
                <p><strong>NIF:</strong> {{ $usuario->nif }}</p>
                <p><strong>Teléfono:</strong> {{ $usuario->telefono }}</p>
                <p><strong>Dirección:</strong> {{ $usuario->direccion }}</p>
                <p><strong>Código postal:</strong> {{ $usuario->cp }}</p>
                <p><strong>Ciudad:</strong> {{ $usuario->ciudad }}</p>
                <p><strong>Fecha de alta:</strong> {{ $usuario->created_at }}</p>
            </div>

            <div class=perfilbotonesUser>
                <div id="chevron">
                    <i class='bx bx-chevron-left bx-lg toggle'></i>
                </div>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="{{ route('mis-pedidos') }}" title="Mis pedidos">
                            <i class='bx bx-shopping-bag'></i>
                            <span>@lang('makinon.misPed')</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('usuario.modificarUsuario') }}" title="Modificar mi cuenta">
                            <i class='bx bx-edit'></i>
                            <span>@lang('makinon.modifPerfil')</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <form method="POST" action="{{ route('deleteUsuario') }}" title="Eliminar mi cuenta">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="nav-link">
                                <i class='bx bx-trash'></i>
                                <span>@lang('makinon.elimPerfil')</span>
                            </button>
                        </form>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('cambiarPassword') }}" title="Cambiar contraseña">
                            <i class='bx bx-lock'></i>
                            <span>@lang('makinon.cambioContra')</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('home') }}" title="Salir">
                            <i class='bx bx-log-out'></i>
                            <span>@lang('makinon.salir')</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <script>
        document.querySelector('.toggle').addEventListener('click', function() {
            document.querySelector('.perfilbotonesUser').classList.toggle('open');
        });
    </script>
@endsection
