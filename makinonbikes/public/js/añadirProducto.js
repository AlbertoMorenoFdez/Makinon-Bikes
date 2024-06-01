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