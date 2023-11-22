<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./static/css/login.css">
    <title>Iniciar sesión</title>
  </head>
  <section id="general">
    
    <form action="./?screen=login/verify" method="POST" id="form-insert">
    <h2>Iniciar sesión</h2> <br>
      <article id="inputs-labels">
        <label for="user">Usuario</label> <br>
        <input type="text" name="user" placeholder="Usuario" class="input" /><br><br>

        <label for="pass">Contraseña</label><br>
        <input
          type="password"
          name="pass"
          placeholder="Contraseña"
          class="input"
        /><br> <br>
      </article>
      

      <a href="olvideMiContra.html" class="olvide">Olvide mi contraseña</a><br><br>

      <div id="redbtns">
        <input type="submit" class="red-btn" value="Iniciar sesión" />
        <input type="reset" class="red-btn" />
      </div>
    </form>
  </section>
</html>
