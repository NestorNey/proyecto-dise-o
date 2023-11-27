<?php
    require_once './conection.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == '' || $pass == ''){
        Error('Los campos no pueden estar vacios');
    }

    $sql= "SELECT * FROM users WHERE userName='$user'";
    $fetch = mysqli_query($conection, $sql);
    $data = mysqli_fetch_array($fetch);

    if(!isset($data['UserName'])){
        Error('Error: El usuario no existe');
    }

    if(!password_verify($pass,$data['Contrasena'])){
        Error('Error: Las credenciales son invalidas');
    }

    // session_start();
    $_SESSION['user'] = $user;
    $_SESSION['name'] = $data['Nombre'];
    $_SESSION['mail'] = $data['Correo'];
    $_SESSION['imgName'] = $data['Img'];
    $_SESSION['plan'] = $data['Plan'];
    header('location: ./?screen=profile');

    function Error($error){
        header("location: ./?screen=login/login&message=$error");
        exit();
    }
?>