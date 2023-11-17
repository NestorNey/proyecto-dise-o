<?php 
require("../conection.php");

$randint = rand(1,4);
$sql = "SELECT * FROM musica limit $randint,6";

$query = mysqli_query($conection, $sql);

$result = array();

while($song=mysqli_fetch_array($query)){
    array_push($result, array(
        "nombre" => $song["NombreC"],
        "artista" => $song["Artista"],
        "album" => $song["Album"]
    ));
}

$jsonData = json_encode($result);

header('Content-Type: application/json');

echo $jsonData;
?>