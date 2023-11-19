<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar sesión</title>
  </head>
  <section>
    <h2>Iniciar sesión</h2>
    <form action="./?screen=login/verify" method="POST" id="form-insert">
      <label for="user">Usuario</label>
      <input type="text" name="user" placeholder="Usuario" class="input" />

      <label for="pass">Contraseña</label>
      <input
        type="password"
        name="pass"
        placeholder="Contraseña"
        class="input"
      />

      <a href="olvideMiContra.html" class="olvide">Olvide mi contraseña</a>

      <div id="redbtns">
        <input type="submit" class="red-btn" value="Iniciar sesión" />
        <input type="reset" class="red-btn" />
      </div>
    </form>
  </section>
</html>
