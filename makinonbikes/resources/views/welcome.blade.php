@extends('layouts.app')

@section('main')
    <div class="gallery">
        <div style="background-image: url('{{ asset('images/focus_portada.png') }}')"></div>
        <div style="background-image: url('{{ asset('images/ktm_portada.jpg') }}')"></div>
        <div style="background-image: url('{{ asset('images/epic_portada.webp') }}')"></div>
    </div>

    <script>
        $(document).ready(function() {
            $(".gallery > div:nth-child(1), .gallery > div:nth-child(3)").css("opacity", "0.5");
            $(".gallery > div:nth-child(1), .gallery > div:nth-child(3)").hover(
                function() {
                    $(".gallery > div:nth-child(2)").css("flex", "1");
                    $(".gallery > div:nth-child(2), .gallery > div:not(:nth-child(2))").css("opacity", "0.5");
                    $(this).css("opacity", "1");
                },
                function() {
                    $(".gallery > div:nth-child(2)").css("flex", "10");
                    $(".gallery > div:nth-child(1), .gallery > div:nth-child(3)").css("opacity", "0.5");
                    $(".gallery > div:nth-child(2)").css("opacity", "1");
                }
            );
        });
    </script>
@endsection
