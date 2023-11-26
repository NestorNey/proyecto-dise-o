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
    $pass2 = $_POST['pass2'];

    if($pass != $pass2){
        Error('ERROR: las contraseñas deben ser iguales');
    }

    if($name == '' || $user == '' || $mail == '' || $pass == ''){
        Error('ERROR: Los campos no pueden estar vacios');
    }
    
    $pass = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 15]);

    if(!mysqli_query($conection, "INSERT INTO users(Nombre, UserName, Correo, Img, Contrasena, UltimasEscuchadas, Favoritos) VALUES ('$name','$user','$mail','$imgName','$pass','{}','{}');")){
        Error('ERROR: El nombre de usuario o correo ya estan registrados');
    }
    
    // session_start();
    $_SESSION['user'] = $user;
    $_SESSION['name'] = $name;
    $_SESSION['mail'] = $mail;
    $_SESSION['imgName'] = $imgName;
    $_SESSION['plan'] = 'Gratuito';
    header('location: ./?screen=main');
?>

<?php
    function Error($error){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <section id="section-main">
            <h2><?php echo $error; ?></h2>
        </section>
    </body>
    </html>
<?php
    exit(); }
?>