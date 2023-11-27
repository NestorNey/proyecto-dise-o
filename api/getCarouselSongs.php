<?php 
require("../conection.php");

function getMaxRows() {
    global $conection;

    $consulta = "SELECT COUNT(*) AS total_filas FROM musica";
    $resultado = mysqli_query($conection, $consulta);

    if ($resultado) {
        $fila = mysqli_fetch_assoc($resultado);
        return $fila['total_filas'];
    } else {
        return 0;
    }
}

$maxRows = getMaxRows();
$randIds = [];
while (count($randIds) < 7) {
    $randId = rand(1, $maxRows);
    if (!in_array($randId, $randIds)) {
        array_push($randIds, $randId);
    }
}

$result = array();

foreach ($randIds as $key => $value) {
    $sql = "SELECT * FROM musica WHERE id = '$value'";

    $query = mysqli_query($conection, $sql);

    $song = mysqli_fetch_array($query);

    array_push($result, array(
        "id" => $song["ID"],
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