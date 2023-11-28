<?php
    if(!isset($_SESSION['user'])){
        header('location: ./?screen=/login/login&message=Para subir una cancion necesitas iniciar sesion');
    }
?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./static/css/Cancion-style.css">
    <link rel="stylesheet" href="./static/css/message.css">
    <title>Subir cancion</title>
</head>
        <form action="./?screen=formulario/subir" method="post" enctype="multipart/form-data">
            <section class="superior">
                <article class="img-up">
                    <input type="file" name="archivo" id="archivo">
                    <div id="Recarga"></div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $("#archivo").on("change", function(){
                            var imagen = $(this)[0].files[0]
                            var lector = new FileReader();
                            lector.readAsDataURL(imagen);
                            lector.onload = function(){
                                $("#Recarga").append("<img src='" + lector.result + "' class='uploaded-img'>");
                            };
                        });
                    </script>
                </article>

                <article class="info">
                    <input 
                    type="text" 
                    name="artista" 
                    id="artista" 
                    class="inputs-subir"
                    placeholder="Artista"
                    size="3"><br><br>

                    <input type="text" 
                    name="name" 
                    id="NombreC" 
                    class="inputs-subir"
                    placeholder="Nombre de la cancion"><br><br>

                    <input type="text" 
                    name="desc" 
                    id="descripcion" 
                    class="inputs-subir"
                    placeholder="Descripcion"><br><br>

                    <input type="text" 
                    name="genero" 
                    id="genero" 
                    class="inputs-subir"
                    placeholder="Genero"><br><br>

                    <input type="text" 
                    name="album" 
                    id="album" 
                    class="inputs-subir"
                    placeholder="Album"><br>

                    <label for="archivo_audio">Archivo mp3</label><br>
                    <input onchange="validateFile(event, 'audio')" type="file" name="archivo_audio" id="archivo_audio" class="inputs-subir" placeholder="Escoger canción">
                </article>
            </section>

            <section class="botones">
                <input id="btn_subir" type="submit" value="Subir">
            </section>
        </form>
    <div id="message">
      <img src="./static/img/icons/error.png">
      <p id="messageP">Error: Usuario no econtrado</p>
    </div>
<script type="text/javascript" src="./static/js/formValidation.js"></script>