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
    <!-- <button onclick="previous()">
        <img src="static/img/icons/arrow-prev.svg" alt="next" class="carousel-icon">
    </button> -->

    <button class="swiper-button-prev"></button>

    <article class="swiper">
        <div class="swiper-wrapper">
        <?php 
            $fetch = mysqli_query($conection, $sql);
            while($cancion=mysqli_fetch_array($fetch)){
        ?>
            <div class="swiper-slide">
                <img src="./static/img/canciones/album.png" alt="Imagen de album" />
                <p><?php echo $cancion['NombreC']; ?></p>
                <p><?php echo $cancion['Artista']; ?></p>
            </div>
        <?php } ?>
        </div>
    </article>

    <button class="swiper-button-next"></button>

    <!-- <button onclick="next()">
        <img src="static/img/icons/arrow-next.svg" alt="previous" class="carousel-icon">
    </button> -->
</section>
<script defer src="./static/js/carrusel.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>