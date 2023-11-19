<?php 
    require_once '../conection.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $hash = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 15]);

    $sql= "UPDATE users SET contra='$hash' WHERE usuario='$user';";

    if (mysqli_query($conection, $sql)){
        header('location: ../index.php');
    }else {
        echo 'Ocurrio un error';
    }
?>