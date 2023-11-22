<?php 
    require_once 'conection.php';

    $randint = rand(1,4);
    $sql = "SELECT * FROM musica limit $randint,6";
?>

<head>
    <link rel="stylesheet" href="./static/css/carrusel.css" />
</head>
<section class="carousel-sec" class=".swiper-pagination">
    <h2 class="title">Descubre canciones nuevas</h2>
    <img id="left" src="./static/img/icons/arrow.svg">
    <section id="interCarousel">
        <article class="cSong" id="hiddenLeftCart">
            <img class="songImage" id="hlcImg" src="./static/img/canciones/album.png">
            <div class="leftSide">
                <h2 id="hlcTitle"></h2>
                <p class="artistAndAlbum">Artista: <span id="hlcArtist"></span></p>
                <p class="artistAndAlbum">Album: <span id="hlcAlbum"></span></p>
                <div class="iconPlay"><img src="./static/img/icons/play-white.svg" class="icon"></div>
            </div>
        </article>
        <article class="cSong" id="leftCart">
            <img class="songImage" id="lcImg" src="./static/img/canciones/Porfiado_Cuarteto_Nos.jpg">
            <div class="leftSide">
                <h2 id="lcTitle"></h2>
                <p class="artistAndAlbum">Artista: <span id="lcArtist"></span></p>
                <p class="artistAndAlbum">Album: <span id="lcAlbum"></span></p>
                <div class="iconPlay"><img src="./static/img/icons/play-white.svg" class="icon"></div>
            </div>
        </article>
        <article class="cSong" id="mainCart">
            <img class="songImage"  id="mcImg" src="./static/img/canciones/img1">
            <div class="leftSide">
                <h2 id="mcTitle"></h2>
                <p class="artistAndAlbum">Artista: <span id="mcArtist"></span></p>
                <p class="artistAndAlbum">Album: <span id="mcAlbum"></span></p>
                <div class="iconPlay"><img src="./static/img/icons/play-white.svg" class="icon"></div>
            </div>
        </article>
        <article class="cSong" id="rightCart">
            <img class="songImage" id="rcImg" src="./static/img/canciones/album.png">
            <div class="leftSide">
                <h2 id="rcTitle"></h2>
                <p class="artistAndAlbum">Artista: <span id="rcArtist"></span></p>
                <p class="artistAndAlbum">Album: <span id="rcAlbum"></span></p>
                <div class="iconPlay"><img src="./static/img/icons/play-white.svg" class="icon"></div>
            </div>
        </article>
        <article class="cSong" id="hiddenRightCart">
            <img class="songImage" id="hrcImg" src="./static/img/canciones/album.png">
            <div class="leftSide">
                <h2 id="hrcTitle"></h2>
                <p class="artistAndAlbum">Artista: <span id="hrcArtist"></span></p>
                <p class="artistAndAlbum">Album: <span id="hrcAlbum"></span></p>
                <div class="iconPlay"><img src="./static/img/icons/play-white.svg" class="icon"></div>
            </div>
        </article>
    </section>
    <img id="right" src="./static/img/icons/arrow.svg">
</section>
<script defer src="./static/js/carrusel.js" type="text/javascript"></script>