<?php
    if(isset($_GET['screen'])){
        $screen = $_GET['screen'];
    }else{
        $screen = 'main';
    }
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./static/css/main.css">
        <title>MyMusic</title>
    </head>
    <body>

        <?php require('./views/header.php'); ?>

        <main>
        
            <?php require('./views/menu.php'); ?>

            <section id="mainPanel">
                <?php
                    require("./views/$screen.php");
                ?>
            </section>
        </main>
    </body>
</html>