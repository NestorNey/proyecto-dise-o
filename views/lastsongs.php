<?php 
  require_once 'conection.php';
  require_once './api/listManager.php';

  if(!isset($_SESSION['user'])){
    header('location: ./?screen=/login/login&message=Para acceder a tu historial necesitas iniciar sesion');
    exit();
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
  <h2>Canciones escuchadas recientemente</h2>

  
  <?php
    $cancionesPorNombre = json_decode($cancionesPorNombre[0], true);

    if(count($cancionesPorNombre) === 0){
      echo '<p id="error">No hay canciones</p>';
    }else{
      
    foreach ($cancionesPorNombre as $key => $value){
  ?>
  <section class="cancion">
      <img src="./static/songs/<?php echo $value['ID']; ?>/<?php echo $value['img'];?>" />    <section class="songInfo">
      <section class="nameAndAlbum">
        <p class="nombre"><?php echo $value['NombreC']; ?></p>
        <p class="album"><?php echo $value['Album']; ?></p>
      </section>
      <p class="artista"><?php echo $value['Artista']; ?></p>
    </section>

    <button class="botones" id="play" onclick="songClick('<?php echo $rootDir; ?>', '<?php echo $value['ID']; ?>')">
      <span
        ><img src="./static/img/icons/play.svg" class="icons" id="icon1"
      /></span>
    </button>
    <button class="botones" id="like">
      <span><img src="./static/img/icons/favorite.svg" class="icons" id="icon3" onclick="document.location = './?screen=addFavorito&songId=<?php echo $value['ID']; ?>'"/></span>
    </button>
    </section>
  <?php }}?>
<script src="<?php echo $rootDir; ?>/static/js/songSelector.js"></script>