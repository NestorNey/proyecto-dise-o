<?php
    require_once './conection.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql= "SELECT * FROM users WHERE userName='$user'";

    $fetch = mysqli_query($conection, $sql);
    
    $data = mysqli_fetch_array($fetch);

    if(password_verify($pass,$data['Contrasena'])){
        // session_start();
        $_SESSION['user'] = $user;
        $_SESSION['name'] = $data['Nombre'];
        $_SESSION['mail'] = $data['Correo'];
        $_SESSION['imgName'] = $data['Img'];
        $_SESSION['plan'] = $data['Plan'];
        header('location: ./?screen=profile');
    }else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../header.css">
    <title>Error</title>
</head>
<body>
    <section id="section-main">
        <h2><?php echo 'Contraseña incorrecta';} ?></h2>
    </section>
</body>
</html>