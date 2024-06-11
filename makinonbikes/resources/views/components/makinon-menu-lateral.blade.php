<div id="menuLateral">
    <h5>FILTRO</h5>
    <div class="accordion" id="accordionMenu">
        <div class="accordion-item">
            <h2 class="accordion-header d-flex " id="headingBicicletas">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#bicicletas">
                    {{ strtoupper(__('makinon.bicicletas')) }}
                </button>
            </h2>
            <div id="bicicletas" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'bicicleta de montaña') }}">@lang('productos.montaña')</a></p>
                    <p><a href="{{ route('productos.tipo', 'bicicleta de carretera') }}">@lang('productos.carretera') </a></p>
                    <p><a href="{{ route('productos.tipo', 'bicicleta de gravel') }}">@lang('productos.grevel')</a></p>
                    <p><a href="{{ route('productos.tipo', 'bicicleta electrica') }}">@lang('productos.ebikes')</a></p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingComponentes">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#componentes">
                    {{ strtoupper(__('makinon.componentes')) }}
                </button>
            </h2>
            <div id="componentes" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <div class="accordion" id="accordionTransmision">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#transmisionComponentes">
                                @lang('productos.transmision')
                            </button>
                            <div id="transmisionComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionTransmision">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'mando') }}">@lang('productos.mandos')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'cambio') }}">@lang('productos.cambios')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'bielas') }}">@lang('productos.bielas')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'cadena') }}">@lang('productos.cadenas')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'grupo') }}">@lang('productos.gruposcompletos')</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionFrenos">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#frenosComponentes">
                                @lang('productos.frenos')
                            </button>
                            <div id="frenosComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFrenos">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'maneta') }}">@lang('productos.palancas')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'pinza') }}">@lang('productos.pinzas')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'disco') }}">@lang('productos.discos')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'kit de frenos') }}">@lang('productos.kitsfrenos')</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionRuedas">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#ruedasComponentes">
                                @lang('productos.ruedas')
                            </button>
                            <div id="ruedasComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionRuedas">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'ruedas de montaña') }}">@lang('productos.ruedasM')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'ruedas de carretera') }}">@lang('productos.ruedasC')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'cubierta de montaña') }}">@lang('productos.cubiertasM')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'cubierta de carretera') }}">@lang('productos.cubiertasC')</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionManillares">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#manillaresComponentes">
                                @lang('productos.manillares')
                            </button>
                            <div id="manillaresComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionManillares">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'manillar de montaña') }}">@lang('productos.manillaresM')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'manillar de carretera') }}">@lang('productos.manillaresC')</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionSillines">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#sillinesComponentes">
                                @lang('productos.sillines')                            </button>
                            <div id="sillinesComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionSillines">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'sillin') }}">@lang('productos.sillines')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'sillin antiprostatico') }}">@lang('productos.sillinesAP')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'sillin urbano') }}">@lang('productos.sillinesP')</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionTijas">
                        <div>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#tijasComponentes">
                                @lang('productos.tijas')
                            </button>
                            <div id="tijasComponentes" class="accordion-collapse collapse"
                                data-bs-parent="#accordionTijas">
                                <div class="accordion-body">
                                    <p><a href="{{ route('productos.tipo', 'tija') }}">@lang('productos.tijas')</a> </p>
                                    <p><a href="{{ route('productos.tipo', 'tija telescopica') }}">@lang('productos.tijasT')</a></p>
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
                    {{ strtoupper(__('makinon.gafas')) }}
                </button>
            </h2>
            <div id="gafas" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'gafas') }}">@lang('productos.gafas')</a> </p>
                    
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingCascos">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#cascos">
                    {{ strtoupper(__('makinon.cascos')) }}
                </button>
            </h2>
            <div id="cascos" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'casco') }}">@lang('productos.cascos')</a> </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingZapatillas">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#zapatillas">
                    {{ strtoupper(__('makinon.zapatillas')) }}
                </button>
            </h2>
            <div id="zapatillas" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'zapatillas de carretera') }}">@lang('productos.zapatillasM')</a> </p>
                    <p><a href="{{ route('productos.tipo', 'zapatillas de montaña') }}">@lang('productos.zapatillasC')</a> </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingMaillots">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#maillots">
                    {{ strtoupper(__('makinon.maillots')) }}
                </button>
            </h2>
            <div id="maillots" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'maillot corto') }}">@lang('productos.maillotsMC')</a></p>
                    <p><a href="{{ route('productos.tipo', 'maillot largo') }}">@lang('productos.maillotsML')</a></p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingCulottes">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#culottes">
                    {{ strtoupper(__('makinon.culottes')) }}
                </button>
            </h2>
            <div id="culottes" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'culotte corto') }}">@lang('productos.culotC')</a></p>
                    <p><a href="{{ route('productos.tipo', 'culotte largo') }}">@lang('productos.culotL')</a></p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingGuantes">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#guantes">
                    {{ strtoupper(__('productos.guantes')) }}
                </button>
            </h2>
            <div id="guantes" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'guantes cortos') }}">@lang('productos.guantesC')</a></p>
                    <p><a href="{{ route('productos.tipo', 'guantes largo') }}">@lang('productos.guantesL')</a></p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingAlimentacion">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#alimentacion">
                    {{ strtoupper(__('makinon.alimentacion')) }}
                </button>
            </h2>
            <div id="alimentacion" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{ route('productos.tipo', 'barrita') }}">@lang('productos.barritas')</a></p>
                    <p><a href="{{ route('productos.tipo', 'gel') }}">@lang('productos.geles')</a> </p>
                    <p><a href="{{ route('productos.tipo', 'hidratacion') }}">@lang('productos.hidratac')</a> </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header d-flex" id="headingTaller">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#taller">
                    {{ strtoupper(__('makinon.taller')) }}
                </button>
            </h2>
            <div id="taller" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                    <p><a href="{{route('taller')}}">@lang('productos.nuestroTaller')</a></p>
                    <p><a href="{{route('citaTaller')}}">@lang('productos.pideCita')</a></p>
                </div>
            </div>
        </div>
        <div class=accordion-item>
            <h2 class="accordion-header d-flex" id="headingMarcas">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#marcas">
                    {{ strtoupper(__('productos.marcas')) }}
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
