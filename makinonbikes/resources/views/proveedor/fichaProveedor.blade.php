@extends('layouts.app')

@section('main')
    {{-- Muestra la ficha completa del proveedor seleccionado --}}

    <div class="card" style="width:55%">
        <div class="card-header">
            <h2>@lang('makinon.fichaProv')</h2>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $proveedor->nombre }}</p>
            <p><strong>CIF:</strong> {{ $proveedor->cif }}</p>
            <p><strong>Dirección:</strong> {{ $proveedor->direccion }}</p>
            <p><strong>Teléfono:</strong> {{ $proveedor->telefono }}</p>
            <p><strong>Email:</strong> {{ $proveedor->email }}</p>
            <p><strong>Comentario:</strong> {{ $proveedor->comentario }}</p>
        </div>
        <div class="card-footer perfilbotones d-flex justify-center">
            <x-makinon-primary-link-button href="{{ route('listadoProductosProveedor', $proveedor->id_proveedor) }}" style="margin-right: 10px">@lang('makinon.productosProv')
                </x-makinon-primary-link-button>
            <x-makinon-primary-link-button href="{{ route('modificarProveedor', $proveedor->id_proveedor) }}" style="margin-right: 10px">@lang('makinon.modificar')
                </x-makinon-primary-link-button>
            <form method="POST" action="{{ route('eliminarProveedor', $proveedor->id_proveedor) }}">
                @csrf
                @method('DELETE')
                <x-makinon-primary-button type="submit" style="margin-right: 10px">@lang('makinon.elimProv')</x-makinon-primary-button>
            </form>
            <x-makinon-primary-link-button href="{{ route('listadoProveedores') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
            
        </div>
    </div>
@endsection
