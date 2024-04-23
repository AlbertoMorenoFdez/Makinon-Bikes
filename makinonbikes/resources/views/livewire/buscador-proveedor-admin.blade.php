<div class="col-md-14">
    <div class="mt-4">
        <div class="d-flex align-items-center gap-3">

            <input type="text" class="rounded h-10 " wire:model='search' placeholder="@lang('makinon.buscarProv')"
                name="busqueda"></input>
            <x-makinon-secondary-button wire:click='buscar'>@lang('makinon.buscar')</x-makinon-secondary-button>
            <x-makinon-secondary-button wire:click='limpiar'>@lang('makinon.mostrar')</x-makinon-secondary-button>

        </div>
    </div>

    <div class="mt-4">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">CIF</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comentario</th>
                    <th scope="col" style="text-align:center">Ficha</th>
                    <th scope="col" style="text-align:center">Editar</th>
                    <th scope="col" style="text-align:center">Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->nombre }}</td>
                        <td>{{ $proveedor->cif }}</td>
                        <td>{{ $proveedor->direccion }}</td>
                        <td>{{ $proveedor->telefono }}</td>
                        <td>{{ $proveedor->email }}</td>
                        <td>
                            @if ($proveedor->comentario)
                                {{ $proveedor->comentario }}
                            @endif
                        </td>
                        <td style="text-align:center">
                            <a href="{{ route('fichaProveedor', $proveedor->id_proveedor) }}"><i
                                    class="fa-regular fa-file"></i></a>
                        </td>
                        <td style="text-align:center">
                            <a href="{{ route('modificarProveedor', $proveedor->id_proveedor) }}"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                        </td>
                        <td style="text-align:center">
                            <form method="POST" action="{{ route('eliminarProveedor', $proveedor->id_proveedor) }}"
                                style="display: inline;">
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
        {{ $proveedores->links() }}
    </div>
    <div class="d-flex justify-content-center">
        <x-makinon-primary-link-button href="{{ route('añadirProveedor') }}">@lang('makinon.añadirProv')
        </x-makinon-primary-link-button>
        <x-makinon-primary-link-button
            href="{{ route('usuario.panelAdmin') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
    </div>
</div>
    
