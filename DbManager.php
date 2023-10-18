<?php

function getSongs($limit){
    $COLUMN_NAME = "nombre";
    $COLUMN_ALBUM = "album";
    $COLUMN_ARTIST = "artista";
    $COLUMN_ALBUM_IMAGE = "albumImage";


    $conection = mysqli_connect('127.0.0.1', 'root', '', 'database');

    $sentence = "SELECT $limit FROM songs";

    $query = mysqli_query($conection, $sentence);

    $result = mysql_fetch_array($query);

    return array(
        "nombre" => $result[$COLUMN_NAME],
        "album" => $result[$COLUMN_ALBUM],
        "artista" => $result[$COLUMN_ARTIST],
        "albumImage" => $result[$COLUMN_ALBUM_IMAGE]
    );
}

?>