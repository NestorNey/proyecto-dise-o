<?php 
    $rootDir = "http://localhost:80/proyecto-dise-o";
    
    if(isset($_GET['showSearchBar']) && $_GET['showSearchBar'] == 'false'){
        $showSearchBar = false;
    }else{
        $showSearchBar = true;
    }
?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/static/css/header.css">
</head>
<header>
    <header>
        <section id="logoSec">
            <h1 id="logo">MyMusic</h1>
        </section>
        <section id="search">
            <?php if($showSearchBar){ ?>
            <div id="searchBar">
<<<<<<< Updated upstream
                <img src="<?php echo $rootDir; ?>/static/img/icons/search.svg">
                <input type="text" onkeydown="redirectSearch()">
=======
                <img src="./static/img/icons/search.svg">
                <input type="text" onkeydown="redirectSearch(event)" id="search-input">
>>>>>>> Stashed changes
            </div>
            <?php }?>
        </section>
        <section id="porfile">
            <section id="porfileMenu" onclick="openPorfileMenu()"> 
                <img src="<?php echo $rootDir; ?>/static/img/porfile/porfile.webp" alt="">
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
<<<<<<< Updated upstream
<script type="text/javascript" src="<?php echo $rootDir; ?>/static/js/header.js"></script>
=======
<script type="text/javascript" src="./static/js/header.js"></script>
>>>>>>> Stashed changes
