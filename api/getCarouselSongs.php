<?php 
require("../conection.php");

$randIds = [];
while (count($randIds) < 5) {
    $randId = rand(1, 10);
    if (!in_array($randId, $randIds)) {
        $randIds[] = $randId;
    }
}

$randIdsStr = implode(',', $randIds);
$sql = "SELECT * FROM musica WHERE id IN ($randIdsStr)";

$query = mysqli_query($conection, $sql);

$result = array();

while ($song = mysqli_fetch_array($query)) {
    array_push($result, array(
        "nombre" => $song["NombreC"],
        "artista" => $song["Artista"],
        "album" => $song["Album"],
        "img" => $song["img"]
    ));
}

$jsonData = json_encode($result);

header('Content-Type: application/json');

echo $jsonData;
?>