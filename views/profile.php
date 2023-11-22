<!DOCTYPE html>
<html lang="en">
  <head></head>
  <section>
    <article>
      <h2><?php echo $_SESSION['user'] ?></h2>
    </article>
    <article>
      <p>Nombre: <?php echo $_SESSION['name'] ?></p>
      <p>Mail: <?php echo $_SESSION['mail'] ?></p>
      <p>Plan actual: <?php echo $_SESSION['plan'] ?></p>
      <img src="./static/img/users/<?php echo $_SESSION['imgName'] ?>" alt="Imagen de usuario" />
    </article>
  </section>
</html>
