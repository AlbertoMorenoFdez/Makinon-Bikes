<div class="col-md-12">
    <div class="mt-4">

        <div class="d-flex align-items-center gap-3">
            <label for="busqueda" class="sr-only">@lang('makinon.buscarUsu')</label>
            <input type="text" wire:model='search'class="rounded h-10 " placeholder="@lang('makinon.buscarUsu')"
                name="busqueda"></input>

            <x-makinon-secondary-button wire:click='buscar'>@lang('makinon.buscar')</x-makinon-secondary-button>
            <x-makinon-secondary-button wire:click='limpiar'>@lang('makinon.mostrar')</x-makinon-secondary-button>
        </div>
    </div>

    <div class="mt-4">
        <div class="table-responsive">
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
                                <a href="{{ route('fichaUsuarioAdmin', $usuario->id_usuario) }}" aria-label="Ficha del usuario"><i
                                        class="fa-regular fa-file"></i></a>
                            </td>
                            <td style="text-align:center">
                                <a href="{{ route('modificarUsuarioAdmin', $usuario->id_usuario) }}" aria-label="Modificar al usuario"><i
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
        </div>
        {{ $usuarios->links() }}
    </div>
    <div class="d-flex justify-content-center mt-5">
        <x-makinon-primary-link-button href="{{ route('añadirUsuario') }}"
            style="margin-right: 10px">@lang('makinon.añadirUsu')</x-makinon-primary-link-button>
        <x-makinon-primary-link-button
            href="{{ route('usuario.panelAdmin') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
    </div>
</div>
