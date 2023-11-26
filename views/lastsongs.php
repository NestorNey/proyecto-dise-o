<?php 
  require_once 'conection.php';
  require_once './api/listManager.php';

  if(!isset($_SESSION['user'])){
    header('location: ./');
  }

  if(isset($_GET['input'])){
    $input = $_GET['input'];
    $input = trim($input);
  }else{
    $input = '';
  }

  if(isset($_SESSION['user'])){
    
    
    $cancionesPorNombre = getList("UltimasEscuchadas", $_SESSION['user']);
  }

?>

<head>
  <link rel="stylesheet" href="./static/css/list.css" />
</head>
<article id="main">
  <h2>Canciones escuchadas recientemente</h2>

  
  <?php
    $cancionesPorNombre = json_decode($cancionesPorNombre[0], true);

    echo $cancionesPorNombre[1]["NombreC"];

    foreach ($cancionesPorNombre as $key => $value){
  ?>
  <!-- /?screen=reproductor&songName=$cancionesPorNombre['NombreC'] -->
  <section class="cancion">
    <img src="./static/img/canciones/<?php echo $value['img']; ?>" />
    <section class="songInfo">
      <section class="nameAndAlbum">
        <p class="nombre"><?php echo $value['NombreC']; ?></p>
        <p class="album"><?php echo $value['Album']; ?></p>
      </section>
      <p class="artista"><?php echo $value['Artista']; ?></p>
    </section>

    <button class="botones" id="play" onClick="songClick('<?php echo $rootDir; ?>', '<?php echo $value['NombreC']; ?>')">
      <span
        ><img src="./static/img/icons/play.svg" class="icons" id="icon1"
      /></span>
    </button>

    <button class="botones" id="cola">
      <span><img src="./static/img/icons/queue.svg" class="icons" id="icon2" /></span>
    </button>
    <button class="botones" id="like">
      <span><img src="./static/img/icons/favorite.svg" class="icons" id="icon3" /></span>
    </button>
    </section>
  <?php } ?>
</article>
<script src="<?php echo $rootDir; ?>/static/js/songSelector.js"></script>