@extends('layouts.app')

@section('main')
    <!-- Muestra para el administrador todos los productos distribuidos por un proveedor -->
    <div class="row w-4/5 h-full">
        <div class="card-header text-center">
            <h1>Lista de artículos del proveedor {{ $proveedor->nombre }}</h1>
        </div>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="col-md-14">
            <div class="mt-4">
                <form class="d-flex align-items-center gap-3" method="GET" action="{{ route('buscarProducto') }}">

                    <input type="text" class="rounded h-10 " placeholder="@lang('makinon.buscarProd')" name="busqueda">
                    <x-makinon-secondary-button type="submit">@lang('makinon.buscar')</x-makinon-secondary-button>
                    <x-makinon-secondary-button type="submit">@lang('makinon.mostrar')</x-makinon-secondary-button>

                </form>
            </div>
            <div class="mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Talla</th>
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
                                <td>{{ $producto->stock }}</td>
                                <td>{{ $producto->talla }}</td>
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

                <x-makinon-primary-link-button href="{{ route('añadirProducto') }}"
                    style="margin-right: 10px">@lang('makinon.añadirProd')
                </x-makinon-primary-link-button>

                <x-makinon-primary-link-button
                    href="{{ route('fichaProveedor', ['id' => $proveedor->id_proveedor]) }}">@lang('makinon.volver')</x-makinon-primary-link-button>

            </div>
        </div>
    @endsection
