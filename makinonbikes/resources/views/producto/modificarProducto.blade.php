@extends('layouts.app')

@section('main')
    <div class="card w-50">
        <div class="card-header">
            <h2>Modificar datos del producto.</h2>
        </div>

        <form method="POST" action="{{ route('modificarProducto', $producto->id_producto) }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="mt-4">
                            <label for="nombre" class="form-label">@lang('makinon.nombre')</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="{{ $producto->nombre }}">
                        </div>

                        <div class="mt-4">
                            <label for="tipo" class="form-label">@lang('makinon.tipo')</label>
                            <select class="form-control" id="tipo" name="tipo" required>
                                <optgroup label="Bicicletas">
                                    <option value="Bicicleta de montaña">Bicicleta montaña</option>
                                    <option value="Bicicleta de carretera">Bicicleta carretera</option>
                                    <option value="Bicicleta eléctrica">Ebike</option>
                                    <optin value="Bicicleta de Gravel">Bicicleta Gravel</option>
                                </optgroup>
                                <optgroup label="Accesorios">
                                    <option value="Casco">Casco</option>
                                    <option value="Gafas">Gafas</option>
                                    <option value="Culotte">Culotte</option>
                                    <option value="Maillot">Maillot</option>
                                    <option value="Guantes">Guantes</option>
                                    <option value="Zapatillas de carretera">Zapatilla Carretera</option>
                                    <option value="Zapatillas de montaña">Zapatilla Montaña</option>
                                    <!-- Otras opciones de accesorios -->
                                </optgroup>
                                <optgroup label="Transmisión">
                                    <option value="Cambio">Cambios</option>
                                    <option value="Mando">Mandos de cambio</option>
                                    <option value="Bielas">Bielas</option>
                                    <option value="Cadena">Cadenas</option>
                                    <option value="Grupo">Grupos completos</option>
                                    <!-- Otras opciones de transmisión -->
                                </optgroup>
                                <optgroup label="Frenos">
                                    <option value="Maneta">Manetas</option>
                                    <option value="Pinza">Pinzas de freno</option>
                                    <option value="Disco">Discos de freno</option>
                                    <option value="Kit de freno">Frenos completos</option>
                                    <!-- Otras opciones de frenos -->
                                </optgroup>
                                <optgroup label="Componentes">
                                    <option value="Rueda">Ruedas</option>
                                    <option value="Cubierta">Cubiertas</option>
                                    <option value="Manillar">Manillares</option>
                                    <option value="Sillin">Sillines</option>
                                    <option value="Tija">Tijas de sillin</option>
                                    <!-- Otras opciones de componentes -->
                                </optgroup>
                                <optgroup label="Nutrición">
                                    <option value="Barrita">Barritas</option>
                                    <option value="Gel">Geles</option>
                                    <option value="Hidratación">Hidratación</option>
                                    <!-- Otras opciones de nutrición -->
                                </optgroup>
                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="marca" class="form-label">@lang('makinon.marca')</label>
                            <select class="form-select" id="marca" name="id_marca">
                                <option value="{{ $producto->marca ? $producto->marca->id_marca : '' }}">
                                    {{ $producto->marca ? $producto->marca->nombre : 'No tiene marca' }}
                                </option>
                                @foreach ($marcas as $marca)
                                    <option value="{{ $marca->id_marca }}">{{ $marca->nombre }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="mt-4">
                            <label for="proveedor" class="form-label">@lang('makinon.proveedor')</label>
                            <select class="form-select" id="proveedor" name="id_proveedor">
                                <option value="{{ $producto->proveedor ? $producto->proveedor->id_proveedor : '' }}">
                                    {{ $producto->proveedor ? $producto->proveedor->nombre : 'No tiene proveedor' }}
                                </option>
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{ $proveedor->id_proveedor }}">{{ $proveedor->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="stock" class="form-label">@lang('makinon.stock')</label>
                            <input type="text" class="form-control" id="stock" name="stock"
                                value="{{ $producto->stock }}">
                        </div>

                        <div class="mt-4">
                            <div class="mt-4">
                                <label for="color">@lang('makinon.color'):</label>
                                <select class="form-control" id="color" name="color">
                                    @foreach ($colores as $color)
                                        <option value="{{ $color->id_color }}">{{ $color->color }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('color')" class="mt-2" />
                            </div>
                        </div>
                    </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <label for="talla">@lang('makinon.talla'):</label>
                                <select class="form-control" id="talla" name="talla">
                                    @foreach ($tallas as $talla)
                                        <option value="{{ $talla->id_talla }}">{{ $talla->talla }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('talla')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <label for="precio" class="form-label">@lang('makinon.precio')</label>
                                <input type="text" class="form-control" id="precio" name="precio"
                                    value="{{ $producto->precio }}">
                            </div>

                            <div class="mt-4">
                                <label for="descripcion_corta" class="form-label">@lang('makinon.descripCorta')</label>
                                <textarea class="form-control" style="height:132px" id="descripcion_corta" name="descripcion_corta">{{ $producto->descripcion_corta }}</textarea>
                            </div>

                            <div class="mt-4">
                                <label for="descripcion_larga" class="form-label">@lang('makinon.descripLarga')</label>
                                <textarea class="form-control" style="height:132px" id="descripcion_larga" name="descripcion_larga">{{ $producto->descripcion_larga }}</textarea>
                            </div>

                            <div class="mt-4">
                                <label for="imagen">@lang('makinon.imagen'):</label>
                                <input type="file" class="form-control " id="imagen" name="imagen">
                                <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <x-makinon-primary-button type="submit" style="margin-left:16px; margin-bottom:10px; width:25%">@lang('makinon.guardar')</x-makinon-primary-button>
                </div>
        </form>

        <form method="POST" action="{{ route('eliminarProducto', $producto->id_producto) }}">
            @csrf
            @method('DELETE')
            <x-makinon-primary-button type="submit" style="margin-left:16px; margin-bottom:10px; width:25%">@lang('makinon.elimProd')</x-makinon-primary-button>
        </form>

        {{-- <div>
            <a href="{{ route('listadoProductos') }}" class="btn btn-primary">Volver</a>
        </div> --}}

        <div>
            <x-makinon-primary-link-button href="{{ route('listadoProductos') }}" style="margin-left:16px; width:25%">
                @lang('makinon.volver')
            </x-makinon-primary-link-button>
        </div>

    </div>
@endsection
