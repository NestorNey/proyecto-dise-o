<?php 
?>

<head>
    <link rel="stylesheet" href="./static/css/carrusel.css" />
</head>
<section class="carousel-sec" class=".swiper-pagination">
    <h2 class="title">Descubre canciones nuevas</h2>
    <section id="interCarousel">
        <img id="left" src="./static/img/icons/arrow.svg">
        <article class="cSong" id="cart_1">
            <img id="cart_1_playicon" src="./static/img/icons/play-white.svg" class="icon">
            <img class="songImage" id="cart_1_img" src="">
            <h2 id="cart_1_title"></h2>
            <p class="artistAndAlbum">Artista: <span id="cart_1_artist"></span></p>
            <p class="artistAndAlbum">Album: <span id="cart_1_album"></span></p>
        </article>
        <article class="cSong" id="cart_2">
            <img id="cart_2_playicon" src="./static/img/icons/play-white.svg" class="icon">
            <img class="songImage" id="cart_2_img" src="">
            <h2 id="cart_2_title"></h2>
            <p class="artistAndAlbum">Artista: <span id="cart_2_artist"></span></p>
            <p class="artistAndAlbum">Album: <span id="cart_2_album"></span></p>
        </article>
        <article class="cSong" id="cart_3">
            <img id="cart_3_playicon" src="./static/img/icons/play-white.svg" class="icon">
            <img class="songImage" id="cart_3_img" src="">
            <h2 id="cart_3_title"></h2>
            <p class="artistAndAlbum">Artista: <span id="cart_3_artist"></span></p>
            <p class="artistAndAlbum">Album: <span id="cart_3_album"></span></p>
        </article>
        <article class="cSong" id="cart_4">
            <img id="cart_4_playicon" src="./static/img/icons/play-white.svg" class="icon">
            <img class="songImage" id="cart_4_img" src="">
            <h2 id="cart_4_title"></h2>
            <p class="artistAndAlbum">Artista: <span id="cart_4_artist"></span></p>
            <p class="artistAndAlbum">Album: <span id="cart_4_album"></span></p>
        </article>
        <article class="cSong" id="cart_5">
            <img id="cart_5_playicon" src="./static/img/icons/play-white.svg" class="icon">
            <img class="songImage" id="cart_5_img" src="">
            <h2 id="cart_5_title"></h2>
            <p class="artistAndAlbum">Artista: <span id="cart_5_artist"></span></p>
            <p class="artistAndAlbum">Album: <span id="cart_5_album"></span></p>
        </article>
        <article class="cSong" id="cart_6">
            <img id="cart_6_playicon" src="./static/img/icons/play-white.svg" class="icon">
            <img class="songImage" id="cart_6_img" src="">
            <h2 id="cart_6_title"></h2>
            <p class="artistAndAlbum">Artista: <span id="cart_6_artist"></span></p>
            <p class="artistAndAlbum">Album: <span id="cart_6_album"></span></p>
        </article>
        <article class="cSong" id="cart_7">
            <img id="cart_7_playicon" src="./static/img/icons/play-white.svg" class="icon">
            <img class="songImage" id="cart_7_img" src="">
            <h2 id="cart_7_title"></h2>
            <p class="artistAndAlbum">Artista: <span id="cart_7_artist"></span></p>
            <p class="artistAndAlbum">Album: <span id="cart_7_album"></span></p>
        </article>
        <img id="right" src="./static/img/icons/arrow.svg">
    </section>
</section>
<section id="uploadYourSong">
    <img src="./static/img/author.png" alt="">
    <div id="textSide">
        <h3>¿Eres compositor?</h3>
        <p>Sube tus propias canciones en MusicHub!</p>
        <button onclick="document.location = './?screen=formulario/SubirCancion'">Subir cancion</button>
    </div>
</section>
<script defer src="./static/js/carrusel.js" type="text/javascript"></script>
<script src="<?php echo $rootDir; ?>/static/js/songSelector.js"></script>