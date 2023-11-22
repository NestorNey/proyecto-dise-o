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
                <img src="<?php echo $rootDir; ?>/static/img/icons/search.svg">
                <input type="text" onkeydown="redirectSearch(event)" id="search-input">
            </div>
            <?php }?>
        </section>
        <section id="porfile">
            <?php if(!isset($_SESSION['user'])){ ?>
                <section>
                    <button onclick="redirectLogin()" class="sessionBtn">Log In</button>
                    <button onclick="redirectSignin()" class="sessionBtn">Sign In</button>
                </section>
            <?php }else { ?>
                <section id="porfileMenu" onclick="openPorfileMenu()"> 
                    <img src="<?php echo $rootDir; ?>/static/img/users/<?php echo $_SESSION['imgName']; ?>" alt="">
                    <br>
                    <br>
                    <h3><?php echo $_SESSION['user']; ?></h3>
                    <p id="mail"><?php echo $_SESSION['mail']; ?></p>
                    <br>
                    <p class="option" onclick="redirectPlanes()">Plan actual: <?php echo $_SESSION['plan']; ?></p>
                    <p class="option" onclick="redirectPlanes()" id="btn-plan">Actualizar plan</p>
                    <p class="option" onclick="document.location = './?screen=formulario/subirCancion'">Subir cancion</p>
                    <p class="option">Politica de privacidad</p>
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
</header>
<script type="text/javascript" src="<?php echo $rootDir; ?>/static/js/header.js"></script>
