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
        Error('ERROR: El usuario no existe');
    }

    if(!password_verify($pass,$data['Contrasena'])){
        Error('contraseña incorrecta');
    }

    // session_start();
    $_SESSION['user'] = $user;
    $_SESSION['name'] = $data['Nombre'];
    $_SESSION['mail'] = $data['Correo'];
    $_SESSION['imgName'] = $data['Img'];
    $_SESSION['plan'] = $data['Plan'];
    header('location: ./?screen=profile');
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