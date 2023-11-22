<!DOCTYPE html>
  <head>
        <link rel="stylesheet" href="./static/css/profile.css">
  </head>
    <section class="maibudi">
      <article>
        <h1 class="user"><?php echo $_SESSION['user'] ?></h1>
      </article>
      <article class="ola">
        <p class="pe">Nombre: <?php echo $_SESSION['name'] ?></p>
        <p class="pe">Mail: <?php echo $_SESSION['mail'] ?></p>
        <p class="pe">Plan actual: <?php echo $_SESSION['plan'] ?></p>
        <img src="./static/img/users/<?php echo $_SESSION['imgName'] ?>" alt="Imagen de usuario" class="thisimg" />
      </article>
    </section>
</html>