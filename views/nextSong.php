<?php
    require_once('./conection.php');

    if(isset($_GET['songName'])){
        $songNameRep = $_GET['songName'];
    }

    // if(isInPlaylist()){
        RandomNextSong($songNameRep, $conection);
    // }

    function RandomNextSong($songNameRep, $conection){
        $sql = "SELECT * FROM musica ORDER BY RAND() LIMIT 1;";
        $fetch = mysqli_query($conection, $sql);
        $song = mysqli_fetch_array($fetch);

        while($song['NombreC'] == $songNameRep){
            $sql = "SELECT * FROM musica ORDER BY RAND() LIMIT 1;";
            $fetch = mysqli_query($conection, $sql);
            $song = mysqli_fetch_array($fetch);
        }

        header('location: ./?screen=reproductor&songName='.$song['NombreC']);
    }
?>