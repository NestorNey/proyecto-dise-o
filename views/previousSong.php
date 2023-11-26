<?php
    require_once './api/listManager.php';

    $lastSongs = getList("UltimasEscuchadas", $_SESSION['user']);
    $lastSongs = json_decode($lastSongs[0], true);

    header('location: ./?screen=reproductor&songName='.$lastSongs[1]['NombreC']);
?>