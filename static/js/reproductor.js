const audio = document.querySelector("audio"),
  songLength = document.getElementById("SongLength"),
  currentTime = document.getElementById("CurrentSongTime"),
  playPause = document.getElementById("PlayPause"),
  plus10 = document.getElementById("Plus10"),
  back10 = document.getElementById("Back10");

var areInAdd = true;

const calculateTime = (secs) => {
  const minutes = Math.floor(secs / 60),
    seconds = Math.floor(secs % 60),
    returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
  return `${minutes}:${returnedSeconds}`;
};

const displayDuration = () => {
  songLength.innerHTML = calculateTime(audio.duration);
};

function setProgress() {
  let percentage = (audio.currentTime / audio.duration) * 100;
  document.querySelector(".progress").style.width = percentage + "%";
}

function configureAudio(){
  if (audio.readyState > 0) {
    displayDuration();
    currentTime.innerHTML = calculateTime(audio.currentTime);
  } else {
    audio.addEventListener("loadedmetadata", () => {
      displayDuration();
    });
  }
  
  setTimeout(playPause.click(), 1000);
}

function changeSongForward(songName) {
  if(areInAdd) return
  window.location = `./?screen=nextSong&songId=${songName}`;
}
function changeSongBack() {
  if(areInAdd) return
  window.location = `./?screen=previousSong`;
}

function shouldShowAdd(boolean){
  setTimeout(() => {
    if(boolean){
      let songToShowThen = audio.getAttribute("src"),
          titleToShowThen = document.getElementById("song-title").innerText,
          authorToShowThen = document.getElementById("song-author").innerText,
          imgToShowThen = document.getElementById("songImg").getAttribute("src");

      songLength.innerText = '30'
      audio.setAttribute("src", `./static/add/add.mp3`)
      document.getElementById("song-title").innerText = "Anuncio"
      document.getElementById("song-author").innerText = ""
      document.getElementById("songImg").setAttribute("src", "./static/add/banner.png")

      audio.addEventListener('ended', () => {
        if(!areInAdd) return

        document.getElementById("song-title").innerText = titleToShowThen
        document.getElementById("song-author").innerText = authorToShowThen
        document.getElementById("songImg").setAttribute("src", imgToShowThen)
        audio.setAttribute("src", songToShowThen)

        areInAdd = false

        configureAudio()
      });
    }
    configureAudio()
  }, 1000);
}

playPause.addEventListener("click", () => {
  if (audio.paused) {
    playPause.src = "./static/img/icons/pause1.svg";
    audio.play();
  } else {
    playPause.src = "./static/img/icons/play1.svg";
    audio.pause();
  }
});

plus10.addEventListener("click", () => {
  if(areInAdd) return
  audio.currentTime += 10
});
back10.addEventListener("click", () => {
  if(areInAdd) return
  audio.currentTime -= 10
});

audio.ontimeupdate = function () {
  currentTime.innerHTML = calculateTime(audio.currentTime);
  setProgress();
};