<?php
    if(!isset($_SESSION['user'])){
        header('location: ./?screen=/login/login');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./static/css/Cancion-style.css">
    <title>Subir cancion</title>
</head>
<body>
    <main id="main-panel">
        
        
        <form action="./?screen=formulario/subir" method="POST" enctype="multipart/form-data">

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
                    <label for="artista" class="labels-subir">Artista: </label>
                    <input type="text" name="artista" id="artista" class="inputs-subir"><br><br><br>
                    <label for="name" class="labels-subir">Nombre de la cancion: </label>
                    <input type="text" name="name" id="NombreC" class="inputs-subir"><br><br><br>
                    <label for="desc" class="labels-subir">Descripcion: </label>
                    <input type="text" name="desc" id="descripcion" class="inputs-subir"><br><br><br><br>
                    <label for="genero" class="labels-subir">Genero: </label>
                    <input type="text" name="genero" id="genero" class="inputs-subir"><br><br><br>
                    <label for="album" class="labels-subir">Artista: </label>
                    <input type="text" name="album" id="album" class="inputs-subir">
                
                </article>
            </section>
        
        
            <section class="cancion">
                <button id="play"><img src="./img/play-icon.svg"></button>
                <input type="file" name="archivo_audio" id="archivo_audio">

                <!-- <script>
                   //Cargar reproductor
                  </script> -->
                
                <!-- <p id="tiempo">0:00 - 4:30</p> -->
            </section>

            <section class="botones">
                <input id="btn_subir" type="submit" value="Subir">
                
            </section>
        </form>
        
    </main>
</body>
</html>