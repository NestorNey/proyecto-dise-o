let songs = [];
let apuntador = 0;
let timerId = 0;

const left = document.getElementById('left');
const right = document.getElementById('right');

const leftCart = {
    title: document.getElementById('lcTitle'),
    artist: document.getElementById('lcArtist'),
    album: document.getElementById('lcAlbum')
}

const mainCart = {
    title: document.getElementById('mcTitle'),
    artist: document.getElementById('mcArtist'),
    album: document.getElementById('mcAlbum')
}

const rightCart = {
    title: document.getElementById('rcTitle'),
    artist: document.getElementById('rcArtist'),
    album: document.getElementById('rcAlbum')
}

async function fetchData() {
    try {
        const response = await fetch('./api/getCarouselSongs.php');
        songs = await response.json();
    } catch (error) {
        console.error('Error al cargar las canciones:', error);
    }
}

function updateSongDisplay() {
    let leftSong = songs[(apuntador - 1 + songs.length) % songs.length]
    leftCart.album.innerText = leftSong.album
    leftCart.artist.innerText = leftSong.artista
    leftCart.title.innerText = leftSong.nombre

    let mainSong = songs[apuntador]
    mainCart.album.innerText = mainSong.album
    mainCart.artist.innerText = mainSong.artista
    mainCart.title.innerText = mainSong.nombre

    let rightSong = songs[(apuntador + 1) % songs.length]
    rightCart.album.innerText = rightSong.album
    rightCart.artist.innerText = rightSong.artista
    rightCart.title.innerText = rightSong.nombre

    /*rightCart.innerText = songs[(apuntador + 1) % songs.length].nombre;
    mainCart.innerText = songs[apuntador].nombre;*/
}

function next() {
    apuntador = (apuntador + 1) % songs.length;
    return songs[apuntador];
}

function prev() {
    apuntador = (apuntador - 1 + songs.length) % songs.length;
    return songs[apuntador];
}

async function main() {
    await fetchData();

    if (songs.length > 0) {
        left.addEventListener('click', () => {
            console.log(prev());
            updateSongDisplay();
            console.clear()
            console.log(leftCart)
            console.log(mainCart)
            console.log(rightCart)
        });

        right.addEventListener('click', () => {
            console.log(next());
            updateSongDisplay();
            console.clear()
            console.log(leftCart)
            console.log(mainCart)
            console.log(rightCart)
        });

        // Muestra la primera canción al inicio
        updateSongDisplay();
    } else {
        console.log('No se encontraron canciones.');
    }
}

function slideRightCarousel(){
  
}

main();

const hiddenCart = document.getElementById("hiddenCart")

hiddenCart.addEventListener("click", (event)=>{
  hiddenCart.style.transitionDuration = ".5s"
})

hiddenCart.addEventListener("mouseover", (event)=>{
  hiddenCart.classList.toggle("show")
})