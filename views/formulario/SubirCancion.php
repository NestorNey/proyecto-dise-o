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
                    placeholder="Album">
                
                </article>
            </section>
        
        
            <section class="cancion">
                <button id="play"><img src="./img/play-icon.svg"></button>
                <input type="file" name="archivo_audio" id="archivo_audio">

                <script>
                   //Cargar reproductor
                  </script>
                
                <p id="tiempo">0:00 - 4:30</p>
            </section>

            <section class="botones">
                <input id="btn_subir" type="submit" value="Subir">
                
            </section>
        </form>
        
    </main>
</body>
</html>