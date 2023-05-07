/* DOCUMENTATION JAVASCRIPT */

function showFullscreen(image) {
    var fullScreen = document.getElementById('fullscreen');
    var img = fullScreen.getElementsByTagName('img')[0];
    img.src = "images/" + image;
    fullScreen.classList.add('show');
}

document.getElementById('fullscreen').onclick = function(event) {
    if (event.target == this) {
        this.classList.remove('show');
    }
}
