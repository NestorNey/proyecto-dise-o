<?php 
    $rootDir = "http://localhost:80/proyecto-dise-o";
    
    if(isset($_GET['showSearchBar']) && $_GET['showSearchBar'] == 'false'){
        $showSearchBar = false;
    }else{
        $showSearchBar = true;
    }

    session_start();
?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./static/css/header.css">
</head>
    <header>
        <section id="logoSec">
            <img src="./static/img/Logo.png" id="logo" alt="Music Hub">
        </section>
        <section id="search">
            <?php if($showSearchBar){ ?>
            <div id="searchBar">
                <img src="./static/img/icons/search.svg">
                <input type="text" onkeydown="redirectSearch(event)" id="search-input">
            </div>
            <?php }?>
        </section>
        <section id="porfile">
            <?php if(!isset($_SESSION['user'])){ ?>
                    <button onclick="redirectLogin()" class="sessionBtn">Iniciar sesión</button>
                    <button onclick="redirectSignin()" class="sessionBtn">Registrarse</button>
            <?php }else { ?>
                <section id="porfileMenu" onclick="openPorfileMenu()"> 
                    <img src="./static/img/users/<?php echo $_SESSION['imgName']; ?>" alt="">
                    <br>
                    <br>
                    <h3><?php echo $_SESSION['user']; ?></h3>
                    <p id="mail"><?php echo $_SESSION['mail']; ?></p>
                    <br>
                    <p class="option" onclick="redirectPlanes()">Plan actual: <?php echo $_SESSION['plan']; ?></p>
                    <p class="option" onclick="redirectPlanes()" id="btn-plan">Actualizar plan</p>
                    <p class="option" onclick="document.location = './?screen=formulario/subirCancion'">Subir cancion</p>
                    <p class="option" onclick="document.location = './?screen=PoliticaPrivacidad'">Politica de privacidad</p>
                    <br>
                    <br>
                    <div>
                        <button id="config" class="porfileButton" onclick="redirectProfile()">Mi perfil</button>
                        <button id="closeSession" class="porfileButton" onclick="redirectCloseSession()">Cerrar sesion</button>
                    </div>
                </section>
            <?php } ?>
        </section>
    </header>
<script type="text/javascript" src="./static/js/header.js"></script>
