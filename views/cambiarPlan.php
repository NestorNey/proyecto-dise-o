<?php
    require_once './conection.php';

    if(!isset($_SESSION['user'])){
        header('location: ./?screen=login/login');
    } else {
        $plan = $_GET['planG'];
    
        $userName = $_SESSION['user'];
        $sql = "UPDATE users SET Plan = '$plan' WHERE UserName='$userName';";

        $fetch = mysqli_query($conection, $sql);

        $_SESSION['plan'] = $plan;
        header('location: ./?screen=profile');
    }
?>