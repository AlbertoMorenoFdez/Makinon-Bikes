@extends('layouts.app')

@section('main')
    <div class="imagenportada">
        <img src="./images/ktm_portada.jpg" alt="KTM">
    </div>
    {{-- <div class="imagenportada" style="margin-left:100px">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner d-flex ">
                <div class="carousel-item active ml-40">
                    <img src="{{asset('./images/epic-portada.jpg')}}" class="d-block w-90" alt="Specialized Epic">
                </div>
                <div class="carousel-item  ml-40">
                    <img src="{{asset('./images/ktm_portada.jpg')}}" class="d-block w-90 " alt="KTM">
                </div>
                
                <div class="carousel-item ml-40">
                    <img src="{{asset('./images/focus_portada.png')}}" class="d-block w-90 " alt="Focus SAM2">
                </div>
            </div>
        </div>
    </div>
    <script>
        const carousel = new bootstrap.Carousel('#myCarousel')
    </script> --}}
@endsection
