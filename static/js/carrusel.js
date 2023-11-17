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
    leftCart.album = leftSong.album
    leftCart.artist = leftSong.artista
    leftCart.title = leftSong.nombre

    let mainSong = songs[apuntador]
    mainCart.album = mainSong.album
    mainCart.artist = mainSong.artista
    mainCart.title = mainSong.nombre

    let rightSong = songs[(apuntador + 1) % songs.length]
    rightCart.album = rightSong.album
    rightCart.artist = rightSong.artista
    rightCart.title = rightSong.nombre

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
        });

        right.addEventListener('click', () => {
            console.log(next());
            updateSongDisplay();
        });

        // Muestra la primera canción al inicio
        //updateSongDisplay();
    } else {
        console.log('No se encontraron canciones.');
    }
}

main();
