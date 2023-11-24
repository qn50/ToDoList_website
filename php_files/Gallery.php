<?php include '../php_files/StartHTML.php'; ?>

<link rel="stylesheet" type="text/css" href="../CSS_Files/Gallery.css" />

<?php include '../php_files/HeaderNav.php'; ?>


<div id="gallery" class="gallery" style="display: none;">
    <div id="mainImageContainer">
        <img id="displayedImage" src="../image/calendaryLogo.png" alt="Image being displayed" />
    </div>
    <div id="thumbnails">
        <!-- Thumbnails -->
        <img class="thumbnail" src="../image/logo2.png" alt="Image 1" onclick="changeImage(this)" />
        <img class="thumbnail" src="../image/nature1.png" alt="Image 2" onclick="changeImage(this)" />
        <img class="thumbnail" src="../image/nature3.png" alt="Image 3" onclick="changeImage(this)" />
        <img class="thumbnail" src="../image/nature2.jpg" alt="Image 4" onclick="changeImage(this)" />
        <img class="thumbnail" src="../image/nature4.png" alt="Image 5" onclick="changeImage(this)" />
        <img class="thumbnail" src="../image/calendaryLogo.png" alt="Image 6" onclick="changeImage(this)" />
    </div>
</div>

<script type="text/javascript" src="../Scripts/Gallery.js"></script>

<?php include '../php_files/Footer.php'; ?>