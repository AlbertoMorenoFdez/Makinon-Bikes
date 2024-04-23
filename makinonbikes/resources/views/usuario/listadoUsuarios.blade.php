@extends('layouts.app')

@section('main')
    <div class="row w-4/5">
        <div class="card-header text-center">
            <h1>@lang('makinon.listaUsu')</h1>
        </div>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div>
            @livewire('buscador-usuario-admin')
        </div>

        {{-- < class="col-md-12">
            <div class="mt-4">
                <form class="d-flex align-items-center gap-3" method="GET" action="{{ route('buscarUsuario') }}">
                    <input type="text" class="rounded h-10 " placeholder="@lang('makinon.buscarUsu')" name="busqueda">
                    <x-makinon-secondary-button type="submit">@lang('makinon.buscar')</x-makinon-secondary-button>
                    <x-makinon-secondary-button type="submit">@lang('makinon.mostrar')</x-makinon-secondary-button>
                </form>
            </div>

            <div class="mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Email</th>
                            <th scope="col">NIF</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Código postal</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Rol</th>
                            <th scope="col" style="text-align:center">Ficha</th>
                            <th scope="col" style="text-align:center">Editar</th>
                            <th scope="col" style="text-align:center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->apellidos }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->nif }}</td>
                                <td>{{ $usuario->telefono }}</td>
                                <td>{{ $usuario->direccion }}</td>
                                <td>{{ $usuario->cp }}</td>
                                <td>{{ $usuario->ciudad }}</td>
                                <td>{{ $usuario->rol }}</td>
                                <td style="text-align:center">
                                    <a href="{{ route('fichaUsuarioAdmin', $usuario->id_usuario) }}"><i
                                            class="fa-regular fa-file"></i></a>
                                </td>
                                <td style="text-align:center">
                                    <a href="{{ route('modificarUsuarioAdmin', $usuario->id_usuario) }}"><i
                                            class="fa-regular fa-edit"></i></a>
                                </td>
                                <td style="text-align:center">
                                    <form method="POST" action="{{ route('eliminarUsuario', $usuario->id_usuario) }}">
                                        @csrf
                                        @method('DELETE')
                                        <i class="fa-solid fa-trash" onclick="this.parentNode.submit();"
                                            style="cursor:pointer"></i>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $usuarios->links() }}
            </div> 
        

            <div class="d-flex justify-content-center">
                <x-makinon-primary-link-button
                    href="{{ route('añadirUsuario') }}">@lang('makinon.añadirUsu')</x-makinon-primary-link-button>
                <x-makinon-primary-link-button
                    href="{{ route('usuario.panelAdmin') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
            </div> 
        </div>--}}

    </div>
@endsection
