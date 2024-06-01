@extends('layouts.app')

@section('main')
    <div class="row w-4/5">
        <div class="card-header text-center">
            <h1>@lang('makinon.listaProv')</h1>
        </div>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <!-- Importamos el componente de livewire para buscar proveedores y su listado -->
        <div>
            @livewire('buscador-proveedor-admin')
        </div>

    </div>
@endsection
