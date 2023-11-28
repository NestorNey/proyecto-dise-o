<?php
    require_once('./conection.php');

    if(isset($_GET['songId'])){
        $songIdRep = $_GET['songId'];
    }

    RandomNextSong($songIdRep, $conection);

    function RandomNextSong($songIdRep, $conection){
        $sql = "SELECT * FROM musica ORDER BY RAND() LIMIT 1;";
        $fetch = mysqli_query($conection, $sql);
        $song = mysqli_fetch_array($fetch);

        while($song['ID'] === $songIdRep){
            $sql = "SELECT * FROM musica ORDER BY RAND() LIMIT 1;";
            $fetch = mysqli_query($conection, $sql);
            $song = mysqli_fetch_array($fetch);
        }

        header('location: ./?screen=reproductor&songId='.$song['ID']);
    }
?>