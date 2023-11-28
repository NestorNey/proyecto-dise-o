  <head>
    <link rel="stylesheet" href="./static/css/login.css">
    <link rel="stylesheet" href="./static/css/message.css">
  </head>
  <section id="general">
    
    <form autocomplete="off" action="./?screen=login/verify" method="POST" id="form-insert">
    <h2>Iniciar sesión</h2> <br>
      <article id="inputs-labels">
        <input type="text" name="user" placeholder="Usuario" class="input" /><br><br>

        <input
          type="password"
          name="pass"
          placeholder="Contraseña"
          class="input"
        /><br> <br>
      </article>
      
      <div id="redbtns">
        <input type="submit" class="red-btn" value="Iniciar sesión" />
        <input type="reset" class="red-btn" />
      </div>
    </form>
    <div id="message">
      <img src="./static/img/icons/error.png">
      <p id="messageP">Error: Usuario no econtrado</p>
    </div>
  </section>

  <script type="text/javascript" src="./static/js/message.js"></script>
  <script type="text/javascript" src="./static/js/formValidation.js"></script>
