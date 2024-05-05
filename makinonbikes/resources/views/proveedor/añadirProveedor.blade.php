@extends('layouts.app')

@section('main')
    <form action="{{ route('agregarProveedor') }}" method="POST">
        @csrf
        <div class="row d-flex justify-center">
            <div class="card-header text-center">
                <h1>@lang('makinon.añadirProv')</h1>
            </div>
            <div class="col-md-5">

                <div class="mt-4">
                    <label for="nombre">@lang('makinon.nombre'):</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <label for="cif">@lang('makinon.cif'):</label>
                    <input type="text" class="form-control" id="cif" name="cif" required>
                    <x-input-error :messages="$errors->get('cif')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <label for="direccion">@lang('makinon.direccion'):</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                    <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-5">
                <div class="mt-4">
                    <label for="telefono">@lang('makinon.telefono'):</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" required>
                    <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <label for="comentario">@lang('makinon.comentarios'):</label>
                    <input type="text" class="form-control" id="comentario" name="comentario">
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">

                <x-makinon-primary-button type="submit" style="margin-right: 10px">@lang('makinon.añadirProv')</x-makinon-primary-button>
                <x-makinon-primary-link-button
                    href="{{ route('listadoProveedores') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
            </div>


        </div>
    </form>
@endsection
