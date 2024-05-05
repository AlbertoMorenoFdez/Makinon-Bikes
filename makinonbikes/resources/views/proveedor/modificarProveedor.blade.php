@extends('layouts.app')

@section('main')
    <div class="card w-50">
        <div class="card-header">
            <h2>Modificar datos del proveedor.</h2>
        </div>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <form method="POST" action="{{ route('modificarProveedor', $proveedor->id_proveedor) }}">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-4">
                            <label for="nombre" class="form-label">@lang('makinon.noombre')</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="{{ $proveedor->nombre }}">
                        <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                            </div>
                        <div class="mt-4">
                            <label for="cif" class="form-label">@lang('makinon.cif')</label>
                            <input type="text" class="form-control" id="cif" name="cif"
                                value="{{ $proveedor->cif }}">
                                <x-input-error :messages="$errors->get('cif')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="direccion" class="form-label">@lang('makinon.direccion')</label>
                            <input type="text" class="form-control" id="direccion" name="direccion"
                                value="{{ $proveedor->direccion }}">
                                <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-4">
                            <label for="telefono" class="form-label">@lang('makinon.telefono')</label>
                            <input type="text" class="form-control" id="telefono" name="telefono"
                                value="{{ $proveedor->telefono }}">
                                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $proveedor->email }}">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="comentario" class="form-label">@lang('makinon.comentarios')</label>
                            <input type="text" class="form-control" id="comentario" name="comentario"
                                value="{{ $proveedor->comentario }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <x-makinon-primary-button type="submit" style="margin-left:16px; margin-bottom:10px; width:25%">@lang('makinon.guardar')</x-makinon-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('eliminarProveedor', $proveedor->id_proveedor) }}">
            @csrf
            @method('DELETE')
            <x-makinon-primary-button type="submit" style="margin-left:16px; margin-bottom:10px; width:25%">@lang('makinon.elimProv')</x-makinon-primary-button>
            
        </form>
        <div>
            <x-makinon-primary-link-button href="{{ route('listadoProveedores') }}" style="margin-left:16px; width:25%">@lang('makinon.volver')</x-makinon-primary-link-button>
        </div>

    </div>
@endsection
