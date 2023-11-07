<head>
  <link rel="stylesheet" href="./static/css/reproductor.css">
</head>

<section id="player-section">
  <article class="music-player-container">
    <div class="title-music-container">
        <h4 class="song-title">Dreamer</h4>
        <span class="song-author">Laufey</span>
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
    <audio controls preload="metadata" src="./static/songs/Dreamer.mp3"></audio>
    <div class="main-song-controls">
        <img src="./static/img/icons/backward-step-svgrepo-com.svg" alt="prev" class="icon" id="Back10">
        <img src="./static/img/icons/play.svg" alt="play" class="icon" id="PlayPause">
        <img src="./static/img/icons/forward-step-svgrepo-com.svg" alt="next" class="icon" id="Plus10">
    </div>
  </article>
</section>

<script src="<?php echo $rootDir; ?>/static/js/reproductor.js"></script>

<!-- <section>
  <article id="title">
    <div>
      <h2>Titulo de cancion</h2>
      <h3>Artista</h3>
    </div>
    <p id="user">Uploaded by "user"</p>
  </article>
  <article id="img-article">
    <img
      src="./static/img/icons/backward-step-svgrepo-com.svg"
      alt="backwards"
      class="icon-song"
    />
    <img src="./static/img/canciones/album.png" alt="cancion" id="song-img"/>
    <img
      src="./static/img/icons/forward-step-svgrepo-com.svg"
      alt="forwards"
      class="icon-song"
    />
  </article>
  <article id="pause-article">
    <div>icono de pausa</div>
  </article>
</section>
<section>
  <article>
    <audio>
      <source src="./static/songs/provSong.mp3" type="audio/mpeg">
    </audio>
  </article>
</section> -->