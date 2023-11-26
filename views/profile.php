<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" href="./static/css/profile.css">
  </head>
  <body>
    <section class="maibudi">
      <div class="procont">
        <section class="imgsect">
          <img src="./static/img/users/<?php echo $_SESSION['imgName'] ?>" alt="Imagen de usuario" class="thisimg" />
        </section>
        <section class="userinf">
          <h1 class="user">Bienvenido! <br> <?php echo $_SESSION['user'] ?>   <br> :) </h1>
          <p class="pe">Nombre: <?php echo $_SESSION['name'] ?></p>
          <p class="pe">Mail: <?php echo $_SESSION['mail'] ?></p>
          <p class="pe">Plan actual: <?php echo $_SESSION['plan'] ?></p>
        </section>
      </div>
    </section>
  </body>
</html>


