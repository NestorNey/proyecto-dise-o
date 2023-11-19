<?php
    $rootDir = "http://localhost:80/proyecto-dise-o";

    require_once 'conection.php';

    if (isset($_FILES['file'])){
        $imgName = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], 'static/img/users/'.$imgName);
    }else {
        $imgName = 'default.jpg';
    }

    $name = $_POST['name'];
    $user = $_POST['user'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    
    $pass = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 15]);

    if(mysqli_query($conection, "INSERT INTO users(Nombre, UserName, Correo, Img, Contrasena) VALUES ('$name','$user','$mail','$imgName','$pass');")){
        // session_start();
        $_SESSION['user'] = $user;
        $_SESSION['name'] = $name;
        $_SESSION['mail'] = $mail;
        $_SESSION['imgName'] = $imgName;
        header('location: ./?screen=main');
    }else {
        echo 'error';
    }
?>