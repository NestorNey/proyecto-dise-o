const audio = document.querySelector("audio"),
  songLength = document.getElementById("SongLength"),
  currentTime = document.getElementById("CurrentSongTime");

console.log(audio);

const calculateTime = (secs) => {
  const minutes = Math.floor(secs / 60),
    seconds = Math.floor(secs % 60),
    returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
  return `${minutes}:${returnedSeconds}`;
};

const displayDuration = () => {
  songLength.innerHTML = calculateTime(audio.duration);
};

console.log(audio.readyState);

if (audio.readyState > 0) {
  displayDuration();
  currentTime.innerHTML = calculateTime(audio.currentTime);
} else {
  audio.addEventListener("loadedmetadata", () => {
    displayDuration();
  });
}

audio.ontimeupdate = function () {
  currentTime.innerHTML = calculateTime(audio.currentTime);
  setProgress();
};

function setProgress() {
  let percentage = (audio.currentTime / audio.duration) * 100;
  document.querySelector(".progress").style.width = percentage + "%";
}

//Audio Controls
const playPause = document.getElementById("PlayPause"),
  plus10 = document.getElementById("Plus10"),
  back10 = document.getElementById("Back10");
// changeSongBack = document.getElementById("changeSongBack"),
// changeSongForward = document.getElementById("changeSongForward");

playPause.addEventListener("click", () => {
  if (audio.paused) {
    playPause.src = "./static/img/icons/pause1.svg";
    audio.play();
  } else {
    playPause.src = "./static/img/icons/play1.svg";
    audio.pause();
  }
});

plus10.addEventListener("click", () => (audio.currentTime += 10));
back10.addEventListener("click", () => (audio.currentTime -= 10));

function changeSongForward(songName) {
  window.location = `./?screen=nextSong&songId=${songName}`;
}
function changeSongBack() {
  window.location = `./?screen=previousSong`;
}

setTimeout(playPause.click(), 1000);
