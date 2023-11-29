<?php
require_once('./conection.php');

if($_POST['name'] == '' || $_POST['artista'] == ''){
    Error('Los campos "Nombre de la cancion" y "artista" no pueden estar vacios');
}

// Restablecer el valor de autoincremento para la tabla (ejecutar la sentencia SQL)
$reset_autoincrement = "ALTER TABLE musica AUTO_INCREMENT = 1";
mysqli_query($conection, $reset_autoincrement);

$Nombre_cancion = mysqli_real_escape_string($conection, $_POST['name']);
$Artista = mysqli_real_escape_string($conection, $_POST['artista']);
$Descripcion = mysqli_real_escape_string($conection, $_POST['desc']);
$Genero = mysqli_real_escape_string($conection, $_POST['genero']);
$Album = mysqli_real_escape_string($conection, $_POST['album']);

// Obtener el último ID insertado
$buscador_id = "SELECT MAX(ID) AS max_id FROM `musica`";
$resultado = mysqli_query($conection, $buscador_id);
$fila = mysqli_fetch_assoc($resultado);
$ultimo_lista = $fila['max_id'] + 1;

$carpeta_destino = './static/songs/' . $ultimo_lista . '/';
if (!file_exists($carpeta_destino)) {
    mkdir($carpeta_destino, 0777, true);
}

if ($_FILES['archivo_audio']['name'] == ''){
    Error('El campo de la cancion no puede estar vacio');
}
$cancion_subida = $carpeta_destino . 'song.' . pathinfo($_FILES['archivo_audio']['name'], PATHINFO_EXTENSION);
move_uploaded_file($_FILES['archivo_audio']['tmp_name'], $cancion_subida);
$songName = 'song.' . pathinfo($_FILES['archivo_audio']['name'], PATHINFO_EXTENSION);

if ($_FILES['archivo']['name'] == ''){
    Error('El campo de imagen no puede estar vacio');
}
$archivo_subido_img = $carpeta_destino . 'album.' . pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION);
move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo_subido_img);
$imgName = 'album.' . pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION);

$instruccion = "INSERT INTO musica (NombreC, Artista, Genero, Descripcion, Album, img) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conection, $instruccion);
mysqli_stmt_bind_param($stmt, "ssssss", $_POST['name'], $Artista, $Genero, $Descripcion, $Album, $imgName);
$resultado = mysqli_stmt_execute($stmt);

if($resultado){
    header('location: ./?screen=reproductor&songId=' . $ultimo_lista);
} else {
    Error('Hubo un error al insertar los datos, intentelo de nuevo mas tarde');
}

function Error($error){
    header("location: ./?screen=formulario/subirCancion&message=$error");
    exit();
}

?>