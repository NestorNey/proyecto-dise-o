<head>
    <link rel="stylesheet" href="./static/css/menu.css">
</head>
<section id="blurCont"></section>

<menu id="menuCont">
    <section>
        <div id="menuButton" class="lista menuCont"><img src="./static/img/icons/menu.svg"><p>Menu</p></div>
        <div class="lista menuCont" onclick="document.location = './'"><img src="./static/img/icons/home.svg"><p>Home</p></div>
        <div class="lista menuCont" onclick="document.location = './?screen=reproductor&songId=null'"><img src="./static/img/icons/player.svg"><p>Reproductor</p></div>
        <div class="plan menuCont" onclick="document.location = './?screen=planes'"><img src="./static/img/icons/family.svg"><p>Planes</p></div>
        <div class="plan menuCont" onclick="document.location = './?screen=formulario/SubirCancion'"><img src="./static/img/icons/player.svg"><p>Subir canción</p></div>
        <div class="lista menuCont" onclick="document.location = './?screen=lastsongs'"><img src="./static/img/icons/recent.svg"><p>Recientes</p></div>
        <div class="lista menuCont" ><img src="./static/img/icons/favorite.svg"><p>Favoritos</p></div>
    </section>

</menu>

<script type="text/javascript">
    menu = document.getElementById('menuButton')

    menu.addEventListener('click', ()=>{
        document.getElementById('menuCont').classList.toggle('open')
        document.getElementById('blurCont').classList.toggle('open')
    })
</script>