<?php
    require_once './api/listManager.php';

    if(!isset($_SESSION['user'])) header("Location: ./?screen=login/signin&message=Para escuchar canciones anteriores necesitas registrarte");

    $lastSongs = getList("UltimasEscuchadas", $_SESSION['user']);
    $lastSongs = json_decode($lastSongs[0], true);

    header('location: ./?screen=reproductor&songId='.$lastSongs[1]['ID']);
?>