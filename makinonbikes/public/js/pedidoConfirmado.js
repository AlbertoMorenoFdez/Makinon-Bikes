document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        var containerLoopBike = document.querySelector('.container-loop-bike');
        var containerText = document.querySelector('.container-text');
        if (containerLoopBike) {
            containerLoopBike.style.display = "none";
        }
        if (containerText) {
            containerText.style.display = "flex";
        }
    }, 6000);
});