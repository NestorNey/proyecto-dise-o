<?php 
  require_once 'conection.php';

  if(isset($_GET['songName'])){
    $songName = $_GET['songName'];
  }else{
    $songName = 'No se encontro la canción solicitada';
  }

  $sql = "SELECT * FROM musica WHERE NombreC='$songName'";

  $fetch = mysqli_query($conection, $sql);
  $song = mysqli_fetch_array($fetch);

  $songName = str_replace(".mp3", "", $songName);
?>

<head>
  <link rel="stylesheet" href="./static/css/reproductor.css">
</head>

<section id="player-section">
  <article class="music-player-container">
    <div class="title-music-container">
        <h4 class="song-title"><?php echo $songName; ?></h4>
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
    <audio controls preload="metadata" src="<?php echo $rootDir; ?>/static/songs/<?php echo $song['NombreC']; ?>"></audio>
    <div class="main-song-controls">
        <img src="./static/img/icons/backward-step-svgrepo-com.svg" alt="prev" class="icon" id="Back10">
        <img src="./static/img/icons/play.svg" alt="play" class="icon" id="PlayPause">
        <img src="./static/img/icons/forward-step-svgrepo-com.svg" alt="next" class="icon" id="Plus10">
    </div>
  </article>
</section>

<script src="<?php echo $rootDir; ?>/static/js/reproductor.js"></script>