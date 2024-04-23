<div class="dropdown">
    <div class="dropbtn" id="idioma">{{ strtoupper($idiomaSeleccionado) }}
        <img id="bandera" src="{{ asset('images/' . ($idiomaSeleccionado === 'es' ? 'espana.png' : 'uk.png')) }}" alt="bandera {{ $idiomaSeleccionado === 'es' ? 'España' : 'Reino Unido' }}">
    </div>
    <div class="dropdown-content" id="idiomas">
        <div class="content-div" id="idioma1">ES
            <a id="idioma1" href="{{ route('cambiarIdioma', 'es') }}">
                <img id="bandera" src="{{ asset('images/espana.png') }}" alt="bandera España">
            </a>
        </div>
        <div class="content-div" id="idioma2">EN
            <a id="idioma2" href="{{ route('cambiarIdioma', 'en') }}">
                <img id="bandera" src="{{ asset('images/uk.png') }}" alt="bandera Reino Unido">
            </a>
        </div>
    </div>
</div>
