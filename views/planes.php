<?php
    if(!isset($_SESSION['user'])){
        header('location: ./?screen=/login/login&message=Para cambiar tu plan    necesitas iniciar sesion');
        exit();
      }
?>

<head>
    <link rel="stylesheet" href="./static/css/planes.css">
</head>
<section id="presentPlan">
    <div id="textSide">
        <h3>Contrata MusicHub Premiun</h3>
        <p>¡Escucha todas tus canciones favoritas sin interrupciones o anuncios fastidiosos!</p>
        <button onclick="document.location = './?screen=planes#planes'">Ver planes</button>
    </div>
    <img src="./static/img/plan.png" alt="">
</section> 

<section id="planes">
    <section class="main-section">
        <h3 class="main-h3">Plan Mensual</h3>
        <ul>
            <li class="main-li">Escucha tu musica favorita sin anuncios</li>
        </ul>
        <p class="precio">$19.99 al mes</p>
        <form action="./?screen=cambiarPlan" method="POST">
            <input type="text" value="Mensual" hidden name="planG">
            <input type="submit" class="main-button" value="Comprar">
        </form>
    </section>

    <section class="main-section">
        <h3 class="main-h3">Plan Anual</h3>
        <ul>
            <li class="main-li">Escucha tu musica favorita sin anuncios</li>
        </ul>
        <p class="precio">$179.99 al año</p>
        <form action="./?screen=cambiarPlan" method="POST">
            <input type="text" value="Anual" hidden name="planG">
            <input type="submit" class="main-button" value="Comprar">
        </form>
    </section>
</section>
    