<head>
    <link rel="stylesheet" href="./static/css/menu.css">
</head>
<menu>
    <section>
        <div class="lista menuCont" onclick="document.location = './'"><img src="./static/img/icons/home.svg"><p>Home</p></div>
        <div class="lista menuCont" onclick="document.location = './?screen=reproductor'"><img src="./static/img/icons/player.svg"><p>Reproductor</p></div>
        <div class="plan menuCont" onclick="document.location = './?screen=planes'"><img src="./static/img/icons/family.svg"><p>Planes</p></div>
        <div class="plan menuCont" onclick="document.location = './?screen=formulario/SubirCancion'"><img src="./static/img/icons/player.svg"><p>Subir canción</p></div>
    </section>
    <section>
        <h2>Tus listas</h2>
        <div class="lista menuCont" onclick="document.location = './?screen=lastsongs'"><img src="./static/img/icons/recent.svg"><p>Recientes</p></div>
        <div class="lista menuCont" ><img src="./static/img/icons/favorite.svg"><p>Favoritos</p></div>
        
    </section>
    <!-- <section>
        <h2>Planes</h2>
        
    </section> -->
</menu>