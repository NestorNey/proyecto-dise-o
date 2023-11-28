<?php
    require_once 'conection.php';
    require_once 'api/listManager.php';

    if(!isset($_SESSION['user'])){
      header('location: ./?screen=/login/login&message=Para acceder a favoritos necesitas iniciar sesion');
    }

    $cancionesFav = getList('Favoritos', $_SESSION['user']);
?>
<head>
  <link rel="stylesheet" href="./static/css/list.css" />
</head>
  <h2>Canciones Favoritas</h2>
  
  <?php
    $cancionesFav = json_decode($cancionesFav[0], true);

    if(count($cancionesFav) === 0){
      echo '<p id="error">No hay canciones</p>';
    }else{
      
    foreach ($cancionesFav as $key => $value){
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
      <span><img src="./static/img/icons/favorite.svg" class="icons" id="icon3" /></span>
    </button>
    </section>
  <?php }}?>
<script src="<?php echo $rootDir; ?>/static/js/songSelector.js"></script>