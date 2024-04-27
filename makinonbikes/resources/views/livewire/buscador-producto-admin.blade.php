<div class="col-md-14">
    <div class="mt-4">
        <div class="d-flex align-items-center gap-3">

            <input type="text" class="rounded h-10 " wire:model='search' placeholder="@lang('makinon.buscarProd')"
                name="busqueda"></input>
            <x-makinon-secondary-button wire:click="buscar">@lang('makinon.buscar')</x-makinon-secondary-button>
            <x-makinon-secondary-button wire:click="limpiar">@lang('makinon.mostrar')</x-makinon-secondary-button>

        </div>
    </div>
    <div class="mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Stock Total</th>
                    <th scope="col">Precio (€)</th>
                    <th scope="col">Descripción</th>
                    <th scope="col" style="text-align:center">Ficha</th>
                    <th scope="col" style="text-align:center">Editar</th>
                    <th scope="col" style="text-align:center">Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->tipo }}</td>
                        <td>{{ $producto->marca->nombre }}</td>
                        <td>{{ $producto->proveedor ? $producto->proveedor->nombre : 'No tiene proveedor' }}</td>
                        <td>{{ $producto->stockTotal }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->short_description }}</td>
                        <td style="text-align:center">
                            <a href="{{ route('fichaProducto', $producto->id_producto) }}"><i
                                    class="fa-regular fa-file"></i></a>
                        </td>
                        <td style="text-align:center">
                            <a href="{{ route('modificarProducto', $producto->id_producto) }}"><i
                                    class="fa-regular fa-edit"></i></a>
                        </td>
                        <td style="text-align:center">
                            <form method="POST" action="{{ route('eliminarProducto', $producto->id_producto) }}">
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
        {{ $productos->links() }}
    </div>
    <div class="d-flex justify-content-center">

        <x-makinon-primary-link-button href="{{ route('añadirProducto') }}">@lang('makinon.añadirProd')
        </x-makinon-primary-link-button>
        <x-makinon-primary-link-button
            href="{{ route('usuario.panelAdmin') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
    </div>
</div>
