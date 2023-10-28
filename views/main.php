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
</head>
<section id="carousel-sec" class=".swiper-pagination">
   <button id="left">Left</button>
   <button id="right">Right</button>
   <section>
        <p id="leftCart"></p>
        <p id="mainCart"></p>
        <p id="rightCart"></p>
   </section>
</section>
<script defer src="./static/js/carrusel.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>