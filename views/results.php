<?php 
  require_once 'conection.php';

  if(isset($_GET['input'])){
    $input = $_GET['input'];
    $input = trim($input);
  }else{
    $input = '';
  }

?>

<head>
  <link rel="stylesheet" href="./static/css/result.css" />
</head>
<article id="main">
  <h2>Canciones</h2>
  
  <?php 
    if ($input == ''){
      $sql = "SELECT * FROM musica";
    }else {
      $sql = "SELECT * FROM musica WHERE NombreC LIKE LOWER('%$input%')";
    }

    $fetch = mysqli_query($conection, $sql);
    while($cancionesPorNombre=mysqli_fetch_array($fetch)){
      $songName = str_replace(".mp3", "", $cancionesPorNombre['NombreC']);
      $songName = str_replace($cancionesPorNombre['ID'], "", $songName);
  ?>
  <section class="cancion">
    <img src="./static/img/canciones/<?php echo $cancionesPorNombre['img'];?>" />
    <section class="songInfo">
      <section class="nameAndAlbum">
        <p class="nombre"><?php echo $songName; ?></p>
        <p class="album"><?php echo $cancionesPorNombre['Album']; ?></p>
      </section>
      <p class="artista"><?php echo $cancionesPorNombre['Artista']; ?></p>
    </section>

    <button class="botones" id="play" onclick="songClick('<?php echo $rootDir; ?>', '<?php echo $cancionesPorNombre['NombreC']; ?>')">
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