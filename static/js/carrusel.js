let songs = [];
let apuntador = 0;
let isTimerFinished = true;

const left = document.getElementById("left");
const right = document.getElementById("right");
const carts = []

for (let i = 1; i <= 7; i++){
  let cartId = `cart_${i}`

  carts[i] = {
    cart: document.getElementById(cartId),
    title: document.getElementById(`${cartId}_title`),
    artist: document.getElementById(`${cartId}_artist`),
    album: document.getElementById(`${cartId}_album`),
    img: document.getElementById(`${cartId}_img`),
    playicon: document.getElementById(`${cartId}_playicon`),
  }
}

async function fetchData() {
  try {
    const response = await fetch("./api/getCarouselSongs.php");
    songs = await response.json();
  } catch (error) {
    console.error("Error al cargar las canciones:", error);
  }
}

function updateSongDisplay() {
  for (let i = -3; i <= 3; i++) {
    let song
    if(i < 0){
      song = songs[(apuntador + i + songs.length) % songs.length]
    }else if(i > 0){
      song = songs[(apuntador + i) % songs.length]
    }else{
      song = songs[apuntador]
      carts[i + 4].cart.style.filter = "brightness(100%)"
    }
    
    carts[i + 4].album.innerText = song.album
    carts[i + 4].artist.innerText = song.artista
    carts[i + 4].title.innerText = song.nombre
    carts[i + 4].img.setAttribute(
      "src",
      `./static/songs/${song.id}/${song.img}`
    )
    carts[i + 4].playicon.setAttribute(
      "onclick", 
      `songClick('./', ${song.id})`
    )
  }
}

function next() {
  if (isTimerFinished) {
    for (let i = 1; i <= 7; i++) {
      carts[i].cart.classList.add("right")
      if(i === 3) carts[i].cart.style.filter = "brightness(100%)";
      if(i === 4) carts[i].cart.style.filter = "brightness(50%) blur(1px)";
    }

    isTimerFinished = false;
    setTimeout(() => {
      for (let i = 1; i <= 7; i++) {
        carts[i].cart.classList.remove("right")
        if(i === 3) carts[i].cart.style.filter = "brightness(50%) blur(1px)";
        if(i === 4)carts[i].cart.style.filter = "brightness(100%)";
      }
      apuntador = (apuntador - 1 + songs.length) % songs.length;
      updateSongDisplay();
      isTimerFinished = true;
    }, 1000);
  }
}

function prev() {
  if (isTimerFinished) {
    for (let i = 1; i <= 7; i++) {
      carts[i].cart.classList.add("left")
      if(i === 4) carts[i].cart.style.filter = "brightness(50%) blur(1px)";
      if(i === 5) carts[i].cart.style.filter = "brightness(100%)";
    }

    isTimerFinished = false;
    setTimeout(() => {
      for (let i = 1; i <= 7; i++) {
        carts[i].cart.classList.remove("left")
        if(i === 4) carts[i].cart.style.filter = "brightness(100%)";
        if(i === 5) carts[i].cart.style.filter = "brightness(50%) blur(1px)";
      }
      apuntador = (apuntador + 1) % songs.length;
      updateSongDisplay();
      isTimerFinished = true;
    }, 1000);
  }
}

async function main() {
  await fetchData();

  if (songs.length > 0) {
    left.addEventListener("click", () => {
      next();
    });

    right.addEventListener("click", () => {
      prev();
    });
  } else {
    console.log("No se encontraron canciones.");
  }

  updateSongDisplay();
}

main();
