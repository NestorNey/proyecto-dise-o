<?php
    require_once 'conection.php';
    require_once 'api/listManager.php';

    if(!isset($_SESSION['user'])){
        header('location: ./?screen=noSesion');
        exit();
    }
    
    $songId = $_GET['songId'];

    $sql = "SELECT * FROM musica WHERE ID='$songId'";
    $fetch = mysqli_query($conection, $sql);
    $song = mysqli_fetch_array($fetch);

    addSongToList('Favoritos', $song, $_SESSION['user']);
    header('location: ./?screen=favoritos');
?>