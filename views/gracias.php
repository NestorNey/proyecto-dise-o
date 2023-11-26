<?php
    if(isset($_SESSION['plan'])){
        $plan = $_SESSION['plan'];
    }else {
        $plan = 'Gratuito';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./static/css/gracias.css">
</head>
<section id="body-gracias">
    <div id="mensaje-agradecimiento" class="mensaje-agradecimiento">
        <h1 class="titulo-agradecimiento">¡Gracias por tu compra!</h1>
        <p class="texto-agradecimiento">Ahora tienes el plan <?php echo $plan; ?></p>
    </div>
</section>
</html>
