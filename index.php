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
        <title>Music Hub</title>
    </head>
    <body>

        <?php require('./views/header.php'); ?>

        <?php require('./views/menu.php'); ?>


        <main>
                <?php
                    require("./views/$screen.php");
                ?>
        </main>
    </body>
</html>