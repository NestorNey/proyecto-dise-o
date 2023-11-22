<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./static/css/Cancion-style.css">
    <title>Subir cancion</title>
</head>
<body>
    <header>
        <h1>Holaaaa</h1>
    </header>
    <aside>
        <p>jajajaj</p>
    </aside>
    <main>
        
        <h2 id="subtitulo">Info</h2> <br><br>
        
        <form action="subir.php" method="get">

            <section class="superior">
                <article class="img-up">
                    <input on type="file" id="subir_imagen" name="imagen_subida">
                    <img src="logotemp.jpg" id="can_img">
                    
                    
                    
                </article>
                
        
                <article class="info">
                    <label for="artista">Artista: </label>
                    <input type="text" name="artista" id="artista"><br><br><br>
                    <label for="name">Nombre de la cancion: </label>
                    <input type="text" name="name" id="NombreC"><br><br><br>
                    <label for="desc">Descripcion: </label>
                    <input type="text" name="desc" id="descripcion"><br><br><br><br>
                    <label for="genero">Genero: </label>
                    <input type="text" name="genero" id="genero">
                
                </article>
            </section>
        
        
            <section class="cancion">
                <button id="play"><img src="./img/play-icon.svg"></button>
                <input type="range" name="barrita" id="barrita">
                <p id="tiempo">0:00 - 4:30</p>
            </section>

            <section class="botones">
                <input id="btn_subir" type="submit" value="Subir">
                
            </section>
        </form>
        
    </main>
</body>
</html>