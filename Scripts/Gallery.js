window.onload = function() {
    document.getElementById('gallery').style.display = 'block';
};

function changeImage(thumbnail) {
    var displayedImage = document.getElementById('displayedImage');
    displayedImage.src = thumbnail.src;
    displayedImage.alt = thumbnail.alt;
}