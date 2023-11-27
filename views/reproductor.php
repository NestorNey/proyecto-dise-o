<?php 
  require 'conection.php';
  require './api/listManager.php';

  if(isset($_GET['songId'])){
    $songId = $_GET['songId'];
  }else{
    $songId = 'No se encontro la canción solicitada';
  }

  if($songId == 'null'){
    header('location: ./?screen=results&input=');
  }else{
    
  $sql = "SELECT * FROM musica WHERE ID='$songId'";

  $fetch = mysqli_query($conection, $sql);
  $song = mysqli_fetch_array($fetch);

  if(isset($_SESSION['user'])){
    $songToSave = array(
      "ID" => $song['ID'],
      "NombreC" => $song['NombreC'],
      "Artista" => $song['Artista'],
      "Album" => $song['Album'],
      "img" => $song['img']
    );
    
    addSongToList("UltimasEscuchadas", $songToSave, $_SESSION['user']);
  }
  
?>

<head>
  <link rel="stylesheet" href="./static/css/reproductor.css">
</head>

<section id="player-section">
  <article class="music-player-container">
    <div class="title-music-container">
        <h4 class="song-title"><?php echo $song['NombreC']; ?></h4>
        <span class="song-author"><?php echo $song['Artista']; ?></span>
    </div>
    <div class="controls-music-container">
        <div class="progress-song-container">
            <div class="progress-bar">
                <span class="progress"></span>
            </div>
        </div>
        <div class="time-container">
            <span class="time-left" id="CurrentSongTime"></span>
            <span class="time-left" id="SongLength"></span>
        </div>
    </div>
    <audio controls preload="metadata" src="<?php echo $rootDir; ?>/static/songs/<?php echo $song['ID']; ?>/song.mp3"></audio>
    <div class="main-song-controls">
        <img 
          src="./static/img/icons/backward-step-svgrepo-com.svg" 
          alt="prev" 
          class="icon" 
          id="changeSongBack"
          onclick="changeSongBack()"
        >
        <img src="./static/img/icons/backward-step-svgrepo-com.svg" alt="prev" class="icon" id="Back10">
        <img src="./static/img/icons/play1.svg" alt="play" class="icon" id="PlayPause">
        <img src="./static/img/icons/forward-step-svgrepo-com.svg" alt="next" class="icon" id="Plus10">
        <img 
          src="./static/img/icons/forward-step-svgrepo-com.svg" 
          alt="next" 
          class="icon" 
          id="changeSongForward" 
          onclick="changeSongForward('<?php echo $song['ID']; ?>')"
        >
    </div>
  </article>
</section>

<script src="<?php echo $rootDir; ?>/static/js/reproductor.js"></script>

<?php } ?>
