<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./static/css/header.css">
</head>
<header>
    <header>
        <section id="logoSec">
            <h1 id="logo">MyMusic</h1>
        </section>
        <section id="search">
            <div id="searchBar">
                <img src="./static/img/icons/search.svg">
                <input type="text" onkeydown="redirectSearch()">
            </div>
        </section>
        <section id="porfile">
            <section id="porfileMenu" onclick="openPorfileMenu()"> 
                <img src="./static/img/porfile/porfile.webp" alt="">
                <br>
                <br>
                <h3>Jessica Smith</h3>
                <p id="mail">correo@correo.com</p>
                <br>
                <p class="option">Plan actual: Gratuito</p>
                <p class="option">Actualizar plan</p>
                <p class="option">Politica de privacidad</p>
                <br>
                <br>
                <div><button id="config" class="porfileButton">Configuracion</button><button id="closeSession" class="porfileButton">Cerrar sesion</button></div>
            </section>
        </section>
    </header>
</header>
<script type="text/javascript" src="./static/js/buscador.js"></script>
<script type="text/javascript" src="./static/js/header.js"></script>