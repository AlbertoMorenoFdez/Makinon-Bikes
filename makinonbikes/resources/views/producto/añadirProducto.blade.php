@extends('layouts.app')

@section('main')
    <form method="POST" action="{{ route('agregarProducto') }}" enctype="multipart/form-data">
        @csrf
        <div class="row d-flex justify-center">
            <div class="card-header text-center">
                <h1>Añadir producto</h1>
            </div>
            <div class="col-md-5">

                <!-- Nombre -->
                <div class="mt-4">
                    <label for="nombre">@lang('makinon.nombre'):</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" :value="old('nombre')" required>
                    <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                </div>

                <!-- Tipo -->
                <div class="mt-4">
                    <label for="tipo">@lang('makinon.tipo'):</label>
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

                <!--Marca-->
                <div class="mt-4">
                    <label for="marca">@lang('makinon.marca'):</label>
                    <select class="form-control" id="marca" name="id_marca" required onchange="checkForNewMarca(this)">
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id_marca }}">{{ $marca->nombre }}</option>
                        @endforeach
                        <option value="new">Añadir nueva marca...</option>
                    </select>
                </div>

                <!-- Proveedor-->
                <div class="mt-4">
                    <label for="proveedor">@lang('makinon.proveedor'):</label>
                    <select class="form-control" id="proveedor" name="id_proveedor" required>
                        @foreach ($proveedores as $proveedor)
                            <option value="{{ $proveedor->id_proveedor }}">{{ $proveedor->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <!--Stock-->
                <div class="mt-4">
                    <label for="stock">@lang('makinon.stock'):</label>
                    <input type="text" class="form-control" id="stock" name="stock" :value="old('stock')"
                        required>
                    <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                </div>

                <!--Color-->
                <div class="mt-4">
                    <label for="color">@lang('makinon.color'):</label>
                    <select class="form-control" id="color" name="color" onchange="checkForNewColor(this)">
                        @foreach ($colores as $color)
                            <option value="{{ $color->id_color }}">{{ $color->color }}</option>
                        @endforeach
                        <option value="new">Añadir nuevo color...</option>
                    </select>
                    <x-input-error :messages="$errors->get('color')" class="mt-2" />
                </div>
            </div>

            <div class="col-md-5">

                <!--Talla-->
                <div class="mt-4">
                    <label for="talla">@lang('makinon.talla'):</label>
                    <select class="form-control" id="talla" name="talla" onchange="checkForNewTalla(this)">
                        @foreach ($tallas as $talla)
                            <option value="{{ $talla->id_talla }}">{{ $talla->talla }}</option>
                        @endforeach
                        <option value="new">Añadir nueva talla...</option>
                    </select>
                    <x-input-error :messages="$errors->get('talla')" class="mt-2" />
                </div>

                <!--Precio-->
                <div class="mt-4">
                    <label for="precio">@lang('makinon.precio'):</label>
                    <input type="text" class="form-control" id="precio" name="precio" :value="old('precio')"
                        required>
                    <x-input-error :messages="$errors->get('precio')" class="mt-2" />
                </div>

                <!--Descripción corta bajo el nombre del Producto-->
                <div class="mt-4">
                    <label for="descripcion_corta">@lang('makinon.descripCorta'):</label>
                    <textarea class="form-control" style="height:75px"id="descripcion_corta" name="descripcion_corta"
                        :value="old('descripcion_corta')" required></textarea>
                </div>

                <!--Descripción larga-->
                <div class="mt-4">
                    <label for="descripcion_larga">@lang('makinon.descripLarga'):</label>
                    <textarea class="form-control" style="height:188px" id="descripcion_larga" name="descripcion_larga"
                        :value="old('descripcion_larga')" required></textarea>
                </div>

                <!--Imagen-->
                <div class="mt-4">
                    <label for="imagen">@lang('makinon.imagen'):</label>
                    <input type="file" class="form-control " id="imagen" name="imagen" required>
                    <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <x-makinon-primary-button type="submit" style="margin-right: 10px">@lang('makinon.añadirProd')</x-makinon-primary-button>
                <x-makinon-primary-link-button
                    href="{{ route('listadoProductos') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
            </div>

        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

    <!-- Ventana modal para añadir una nueva marca-->
    <div id="miModal" class="modal">
        <form id="addMarcaForm" method="POST" action="{{ route('nuevaMarca') }}">
            @csrf
            <div class="modal-content">
                <span class="close" style="text-align: right; cursor:pointer"><i
                        class="fa-solid fa-circle-xmark"></i></span>
                <div class="form-group">
                    <label for="nombreMarca">Nombre de la marca</label>
                    <input type="text" class="form-control" id="nombreMarca" name="nombre"
                        placeholder="Introduce el nombre de la marca">
                </div>
                <x-makinon-primary-button type="submit">Guardar</x-makinon-primary-button>
            </div>
        </form>
    </div>

    <!-- Ventana modal para añadir un nuevo color-->
    <div id="miModalColor" class="modal">
        <form id="addColorForm" method="POST" action="{{ route('nuevoColor') }}">
            @csrf
            <div class="modal-content">
                <span class="close" style="text-align: right; cursor:pointer"><i
                        class="fa-solid fa-circle-xmark"></i></span>
                <div class="form-group">
                    <label for="nombreColor">Nombre del color</label>
                    <input type="text" class="form-control" id="nombreColor" name="color"
                        placeholder="Introduce el nombre del color">
                </div>
                <x-makinon-primary-button type="submit">Guardar</x-makinon-primary-button>
            </div>
        </form>
    </div>

    <!-- Ventana modal para añadir una nueva talla-->
    <div id="miModalTalla" class="modal">
        <form id="addTallaForm" method="POST" action="{{ route('nuevaTalla') }}">
            @csrf
            <div class="modal-content">
                <span class="close" style="text-align: right; cursor:pointer"><i
                        class="fa-solid fa-circle-xmark"></i></span>
                <div class="form-group">
                    <label for="nombreTalla">Nombre de la talla</label>
                    <input type="text" class="form-control" id="nombreTalla" name="talla"
                        placeholder="Introduce el nombre de la talla">
                </div>
                <x-makinon-primary-button type="submit">Guardar</x-makinon-primary-button>
            </div>
        </form>
    </div>


    <script>
        function checkForNewMarca(select) {
            if (select.value == "new") {
                var modal = document.getElementById("miModal");
                modal.style.display = "block";
            }
        }

        function checkForNewColor(select) {
            if (select.value == "new") {
                var modal = document.getElementById("miModalColor");
                modal.style.display = "block";
            }
        }

        function checkForNewTalla(select) {
            if (select.value == "new") {
                var modal = document.getElementById("miModalTalla");
                modal.style.display = "block";
            }
        }

        // Cerrar el modal
        var spans = document.getElementsByClassName("close");
        for (var i = 0; i < spans.length; i++) {
            spans[i].onclick = function() {
                var modals = document.getElementsByClassName("modal");
                for (var j = 0; j < modals.length; j++) {
                    modals[j].style.display = "none";
                }
            }
        }

        window.onclick = function(event) {
            var modal = document.getElementById("miModal");
            var modalColor = document.getElementById("miModalColor");
            var modalTalla = document.getElementById("miModalTalla");
            if (event.target == modal || event.target == modalColor || event.target == modalTalla) {
                modal.style.display = "none";
                modalColor.style.display = "none";
                modalTalla.style.display = "none";
            }
        }
    </script>


@endsection
