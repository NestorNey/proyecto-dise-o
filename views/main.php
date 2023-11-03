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
   <button id="right">Right</button>
   <section>
        <p id="leftCart"></p>
        <p id="mainCart"></p>
        <p id="rightCart"></p>
        <p class="cSong" id="cs1">1</p>
        <p class="cSong" id="cs1">2</p>
        <p class="cSong" id="cs1">3</p>
        <p class="cSong" id="cs1">4</p>
        <p class="cSong" id="cs1">5</p>
   </section>
</section>
<script defer src="./static/js/carrusel.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>