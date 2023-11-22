<?php 
    $conection = mysqli_connect("127.0.0.1","root","","daw_bd");

    $Nombre_cancion = $_POST['name'];
    $Artista = $_POST['artista'];
    $Descripcion = $_POST['desc'];
    $Genero = $_POST['genero'];
    $Album = $_POST['album'];
    

    $buscador_id = "SELECT ID FROM `musica`";
    $Viene_viene = mysqli_query($conection,  $buscador_id);
    

    while ($lista_id = mysqli_fetch_array($Viene_viene)){

        $ultimo_lista = end($lista_id);   
    }

    $ultimo_lista = $ultimo_lista + 1;


    $carpeta_destino = 'repositorio/';

    if (!file_exists($carpeta_destino)) {
        mkdir($carpeta_destino, 0777, true);
    }

    $archivo_subido = $carpeta_destino . $ultimo_lista . basename($_FILES['archivo']['name']);
    
    move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo_subido);



    $carpeta_canciones = 'canciones/';

    if (!file_exists($carpeta_canciones)) {
        mkdir($carpeta_canciones, 0777, true);
    }

    $cancion_subida = $carpeta_canciones . $ultimo_lista . basename($_FILES['archivo_audio']['name']);

    move_uploaded_file($_FILES['archivo_audio']['tmp_name'], $cancion_subida);


    $instruccion = "INSERT INTO musica (NombreC, Artista, Genero, Descripcion, Album, img, Cancion) VALUES ('$Nombre_cancion', '$Artista', '$Genero', '$Descripcion', '$Album', '$archivo_subido', '$cancion_subida')";

    $mandadero = mysqli_query($conection, $instruccion);

    if($mandadero){
        echo('Si');
    }
    else{
        echo('No');
    }

    
?>