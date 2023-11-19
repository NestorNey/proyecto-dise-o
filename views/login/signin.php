<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
  </head>
  <body>
      <section>
        <h2>Registrarse</h2>
        <form
          action="./?screen=login/insertUser"
          method="POST"
          enctype="multipart/form-data"
          id="form-insert"
        >
          <div>
            <a href="registro.html" class="red-btn a-btn">Registrarse</a>
            <a href="iniciose.html" class="red-btn a-btn">Iniciar Sesión</a>
          </div>

          <label for="user">Usuario</label>
          <input type="text" name="user" placeholder="Usuario" class="input" />

          <label for="name">Nombre completo</label>
          <input
            type="text"
            name="name"
            placeholder="Nombre completo"
            class="input"
          />

          <label for="mail">Correo electronico</label>
          <input type="text" name="mail" placeholder="Correo" class="input" />

          <label for="file">Foto de perfil</label>
          <input type="file" name="file" class="input" id="img-input" />

          <label for="pass">Contraseña</label>
          <input
            type="password"
            name="pass"
            placeholder="Contraseña"
            class="input"
          />

          <label for="pass2">Confirmar contraseña</label>
          <input
            type="password"
            name="pass2"
            placeholder="Confirmar contraseña"
            class="input"
          />

          <div id="redbtns">
            <input type="submit" class="red-btn" />
            <input type="reset" class="red-btn" />
          </div>
        </form>
      </section>
  </body>
</html>
