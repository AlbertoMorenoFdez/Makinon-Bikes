document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("miModalImagen");
    var img = document.getElementById("imagenCita");
    var modalImg = document.getElementById("imagenCita");

    var span = document.getElementsByClassName("close")[0];

    if (span) {
        span.onclick = function() {
            modal.style.display = "none";
        }
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $('.imagen-link').click(function() {
        modal.style.display = "block";

        var imagen = $(this).data('imagen');
        modalImg.src = imagen;
    });
});