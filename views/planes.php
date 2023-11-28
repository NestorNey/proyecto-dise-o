<?php
    if(!isset($_SESSION['user'])){
        header('location: ./?screen=/login/login&message=Para cambiar tu plan    necesitas iniciar sesion');
        exit();
      }
?>

<head>
    <link rel="stylesheet" href="./static/css/planes.css">
</head>

    <section>
        <img src="./static/img/icons/individualy.svg" class="main-icon">
    </section>
    <section class="main-section">
        <h3 class="main-h3">Plan Mensual</h3>
        <ul>
            <li class="main-li">Escucha sin anuncios</li>
            <li class="main-li">Cuenta personalizable</li>
            <li class="main-li">Sube música sin limite de espacio</li>
            <li class="main-li">Acceso a todas las funciones</li>
        </ul>
        <p class="precio">$19.99 al mes</p>
        <form action="./?screen=cambiarPlan" method="POST">
            <input type="text" value="Mensual" hidden name="planG">
            <input type="submit" class="main-button" value="Comprar">
        </form>
    </section>

    <section>
        <img src="./static/img/icons/duo.svg" class="main-icon">
    </section>
    <section class="main-section">
        <h3 class="main-h3">Plan Anual</h3>
        <ul>
            <li class="main-li">Escucha sin anuncios</li>
            <li class="main-li">Cuenta personalizable</li>
            <li class="main-li">Sube música sin limite de espacio</li>
            <li class="main-li">Acceso a todas las funciones</li>
        </ul>
        <p class="precio">$179.99 al año</p>
        <form action="./?screen=cambiarPlan" method="POST">
            <input type="text" value="Anual" hidden name="planG">
            <input type="submit" class="main-button" value="Comprar">
        </form>
    </section>