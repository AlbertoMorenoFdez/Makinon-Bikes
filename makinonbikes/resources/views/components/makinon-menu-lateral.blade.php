<div id="menuLateral">
    <h5>FILTRO</h5>
    <div class="accordion" id="accordionMenu">
        <div class="accordion-item">
            <h2 class="accordion-header d-flex " id="headingBicicletas">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#bicicletas">
                    BICICLETAS
                </button>
            </h2>
            <div id="bicicletas" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'bicicleta de montaña') }}">Montaña</a></p>
                    <p><a href="{{ route('productos.tipo', 'bicicleta de carretera') }}">Carretera</a></p>
                    <p><a href="{{ route('productos.tipo', 'bicicleta de gravel') }}">Gravel</a></p>
                    <p><a href="{{ route('productos.tipo', 'bicicleta electrica') }}">E-Bikes</a></p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingComponentes">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#componentes">
                    COMPONENTES
                </button>
            </h2>
            <div id="componentes" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <div class="accordion" id="accordionTransmision">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#transmisionComponentes">
                                Transmision
                            </button>
                            <div id="transmisionComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionTransmision">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'mando') }}">Mandos</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'cambio') }}">Cambios</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'bielas') }}">Bielas</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'cadena') }}">Cadenas</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'grupo') }}">Grupos completos</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionFrenos">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#frenosComponentes">
                                Frenos
                            </button>
                            <div id="frenosComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFrenos">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'maneta') }}">Palancas de freno</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'pinza') }}">Pinzas de freno</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'disco') }}">Discos de freno</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'kit de frenos') }}">Kits de frenos</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionRuedas">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#ruedasComponentes">
                                Ruedas
                            </button>
                            <div id="ruedasComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionRuedas">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'ruedas de montaña') }}">Ruedas de
                                            montaña</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'ruedas de carretera') }}">Ruedas de
                                            carretera</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'cubierta de montaña') }}">Cubiertas de
                                            montaña</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'cubierta de carretera') }}">Cubiertas de
                                            carretera</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionManillares">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#manillaresComponentes">
                                Manillares
                            </button>
                            <div id="manillaresComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionManillares">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'manillar de montaña') }}">Manillares de
                                            montaña</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'manillar de carretera') }}">Manillares de
                                            carretera</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionSillines">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#sillinesComponentes">
                                Sillines
                            </button>
                            <div id="sillinesComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionSillines">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'sillin') }}">Sillines</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'sillin antiprostatico') }}">Sillines
                                            antipróstaticos</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'sillin urbano') }}">Sillines de paseo</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionTijas">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#tijasComponentes">
                                Tijas
                            </button>
                            <div id="tijasComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionTijas">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'tija') }}">Tijas</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'tija telescopica') }}">Tijas
                                            telescópicas</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingGafas">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#gafas">
                    GAFAS
                </button>
            </h2>
            <div id="gafas" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p>Lente normal</p>
                    <p>Lente polarizada</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingCascos">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#cascos">
                    CASCOS
                </button>
            </h2>
            <div id="cascos" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p>De carretera</p>
                    <p>De montaña</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingZapatillas">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#zapatillas">
                    ZAPATILLAS
                </button>
            </h2>
            <div id="zapatillas" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'zapatillas de carretera') }}">De carretera</a> </p>
                    <p><a href="{{ route('productos.tipo', 'zapatillas de montaña') }}">De montaña</a> </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingMaillots">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#maillots">
                    MAILLOTS
                </button>
            </h2>
            <div id="maillots" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'maillot corto') }}">De manga corta</a></p>
                    <p><a href="{{ route('productos.tipo', 'maillot largo') }}">De manga larga</a></p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingCulottes">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#culottes">
                    CULOTTES
                </button>
            </h2>
            <div id="culottes" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'culotte corto') }}">Cortos</a></p>
                    <p><a href="{{ route('productos.tipo', 'culotte largo') }}">Largos</a></p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingGuantes">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#guantes">
                    GUANTES
                </button>
            </h2>
            <div id="guantes" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'guantes cortos') }}">Cortos</a></p>
                    <p><a href="{{ route('productos.tipo', 'guantes largo') }}">Largos</a></p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingAlimentacion">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#alimentacion">
                    ALIMENTACIÓN
                </button>
            </h2>
            <div id="alimentacion" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'barrita') }}">Barritas</a></p>
                    <p><a href="{{ route('productos.tipo', 'gel') }}">Geles</a> </p>
                    <p><a href="{{ route('productos.tipo', 'hidratacion') }}">Hidratación</a> </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingTaller">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#taller">
                    TALLER
                </button>
            </h2>
            <div id="taller" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{route('taller')}}">Nuestro taller</a></p>
                    <p><a href="{{route('citaTaller')}}">Pide cita</a></p>
                </div>
            </div>
        </div>
        <div class=accordion-item>
            <h2 class="accordion-header d-flex" id="headingMarcas">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#marcas">
                    MARCAS
                </button>
            </h2>
            <div id="marcas" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    @foreach ($marcas as $marca)
                        <p><a href="{{ route('productos.marca', $marca->nombre) }}">{{ $marca->nombre }}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
