@extends('layouts.app')

@section('main')
    <!-- Muestra la vista del formulario para modificar un usuario por la administración junto con sus datos -->
    <div class="card w-50">
        <div class="card-header">
            <h2>Modificar perfil del usuario por la administración.</h2>
        </div>

        <form method="POST" action="{{ route('modificarUsuarioAdmin', $usuario->id_usuario) }}">
            @csrf
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="mt-4">
                            <label for="nombre" class="form-label">@lang('makinon.nombre')</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="{{ $usuario->nombre }}">
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="apellidos" class="form-label">@lang('makinon.apellidos')</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos"
                                value="{{ $usuario->apellidos }}">
                            <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $usuario->email }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="password" class="form-label">@lang('makinon.contrasena')</label>
                            <input type="password" class="form-control" id="password" name="password" value="********">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="nif" class="form-label">@lang('makinon.nif')</label>
                            <input type="text" class="form-control" id="nif" name="nif"
                                value="{{ $usuario->nif }}">
                            <x-input-error :messages="$errors->get('nif')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mt-4">
                            <label for="telefono" class="form-label">@lang('makinon.telefono')</label>
                            <input type="text" class="form-control" id="telefono" name="telefono"
                                value="{{ $usuario->telefono }}">
                            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="direccion" class="form-label">@lang('makinon.direccion')</label>
                            <input type="text" class="form-control" id="direccion" name="direccion"
                                value="{{ $usuario->direccion }}">
                            <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="cp" class="form-label">@lang('makinon.cp')</label>
                            <input type="text" class="form-control" id="cp" name="cp"
                                value="{{ $usuario->cp }}">
                            <x-input-error :messages="$errors->get('cp')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="ciudad" class="form-label">@lang('makinon.ciudad')</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad"
                                value="{{ $usuario->ciudad }}">
                            <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="rol" class="form-label">@lang('makinon.rol')</label>
                            <select class="form-control h-11" id="rol" name="rol" required>
                                <option value="admin">Administrador</option>
                                <option value="user">Usuario</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <x-makinon-primary-button type="submit"
                    style="margin-left:16px; margin-bottom:10px; width:25%">@lang('makinon.guardar')</x-makinon-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('eliminarUsuario', $usuario->id_usuario) }}">
            @csrf
            @method('DELETE')
            <x-makinon-primary-button type="submit"
                style="margin-left:16px; margin-bottom:10px; width:25%">@lang('makinon.elimUsu')</x-makinon-primary-button>
        </form>
        <div>
            <x-makinon-primary-link-button href="{{ route('listadoUsuarios') }}"
                style="margin-left:16px; width:25%">@lang('makinon.volver')</x-makinon-primary-link-button>
        </div>

    </div>
@endsection
