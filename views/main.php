<?php 
    require_once 'conection.php';

    $randint = rand(1,4);
    $sql = "SELECT * FROM musica limit $randint,6";
?>

<head>
    <link rel="stylesheet" href="./static/css/carrusel.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <style>
        .cSong{
            display: none;
        }
    </style>
</head>
<section id="carousel-sec" class=".swiper-pagination">
   <button id="left">Left</button>
   <section id="interCarousel">
        <article id="leftCart">
            <img i="lcImg" src="./static/img/canciones/album.png">
            <div>
                <h2 id="lcTitle">Danza kuduro</h2>
                <p id="lcArtist">Artista</p>
                <p id="lcAlbum">El album</p>
            </div>
        </article>
        <article id="mainCart">
            <img i="mcImg" src="./static/img/canciones/album.png">
            <div>
                <h2 id="mcTitle">Danza kuduro</h2>
                <p id="mcArtist">Artista</p>
                <p id="mcAlbum">El album</p>
            </div>
        </article>
        <article id="rightCart">
            <img i="rcImg" src="./static/img/canciones/album.png">
            <div>
                <h2 id="rcTitle">Danza kuduro</h2>
                <p id="rcArtist">Artista</p>
                <p id="rcAlbum">El album</p>
            </div>
        </article>
   </section>
   <button id="right">Right</button>
</section>
<script defer src="./static/js/carrusel.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>