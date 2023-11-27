<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./static/css/login.css">
    <title>Formulario</title>
  </head>
  <body>
      <section id="general">
        
        <form
          action="./?screen=login/insertUser"
          method="POST"
          enctype="multipart/form-data"
          id="form-insert"
        >
        <h2>Registrarse</h2> <br>
          

          <article id="inputs-labels">
            <input type="text" name="user" placeholder="Usuario" class="input" /><br> <br>

            <input
              type="text"
              name="name"
              placeholder="Nombre completo"
              class="input"
            /> <br> <br>

            <input type="text" name="mail" placeholder="Correo" class="input" /> <br> <br>

            <label for="file">Foto de perfil</label><br>
            <input type="file" name="file" class="input" id="img-input" /> <br><br>

            <input
              type="password"
              name="pass"
              placeholder="Contraseña"
              class="input"
            /> <br><br>

            <input
              type="password"
              name="pass2"
              placeholder="Confirmar contraseña"
              class="input"
            /> <br><br>
          </article>
          

          <div id="redbtns">
            <input type="submit" class="red-btn" />
            <input type="reset" class="red-btn" />
          </div>
        </form>
      </section>
  </body>
</html>
