let songs = [];
let apuntador = 0;
let isTimerFinished = true;

const left = document.getElementById('left');
const right = document.getElementById('right');

const hiddenLeftCart = {
    cart: document.getElementById("hiddenLeftCart"),
    title: document.getElementById('hlcTitle'),
    artist: document.getElementById('hlcArtist'),
    album: document.getElementById('hlcAlbum'),
    img: document.getElementById('hlcImg')
}

const leftCart = {
    cart: document.getElementById("leftCart"),
    title: document.getElementById('lcTitle'),
    artist: document.getElementById('lcArtist'),
    album: document.getElementById('lcAlbum'),
    img: document.getElementById('lcImg')
}

const mainCart = {
    cart: document.getElementById("mainCart"),
    title: document.getElementById('mcTitle'),
    artist: document.getElementById('mcArtist'),
    album: document.getElementById('mcAlbum'),
    img: document.getElementById('mcImg')
}

const rightCart = {
    cart: document.getElementById("rightCart"),
    title: document.getElementById('rcTitle'),
    artist: document.getElementById('rcArtist'),
    album: document.getElementById('rcAlbum'),
    img: document.getElementById('rcImg')
}

const hiddenRightCart = {
    cart: document.getElementById("hiddenRightCart"),
    title: document.getElementById('hrcTitle'),
    artist: document.getElementById('hrcArtist'),
    album: document.getElementById('hrcAlbum'),
    img: document.getElementById('hrcImg')
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
    let hiddenLeftSong = songs[(apuntador - 2 + songs.length) % songs.length]
    hiddenLeftCart.album.innerText = hiddenLeftSong.album
    hiddenLeftCart.artist.innerText = hiddenLeftSong.artista
    hiddenLeftCart.title.innerText = hiddenLeftSong.nombre
    //hiddenLeftCart.img.setAttribute("src", "http://localhost:80/proyecto-dise-o/static/img/canciones/" + hiddenLeftSong.img)

    let leftSong = songs[(apuntador - 1 + songs.length) % songs.length]
    leftCart.album.innerText = leftSong.album
    leftCart.artist.innerText = leftSong.artista
    leftCart.title.innerText = leftSong.nombre
    //leftCart.img.setAttribute("src", "http://localhost:80/proyecto-dise-o/static/img/canciones/" + leftSong.img)

    let mainSong = songs[apuntador]
    mainCart.cart.style.filter = "brightness(100%)"
    mainCart.album.innerText = mainSong.album
    mainCart.artist.innerText = mainSong.artista
    mainCart.title.innerText = mainSong.nombre
    //mainCart.img.setAttribute("src", "http://localhost:80/proyecto-dise-o/static/img/canciones/" + mainSong.img)

    let rightSong = songs[(apuntador + 1) % songs.length]
    rightCart.album.innerText = rightSong.album
    rightCart.artist.innerText = rightSong.artista
    rightCart.title.innerText = rightSong.nombre
    //rightCart.img.setAttribute("src", "http://localhost:80/proyecto-dise-o/static/img/canciones/" + rightSong.img)

    let hiddenRightSong = songs[(apuntador + 2) % songs.length]
    hiddenRightCart.album.innerText = hiddenRightSong.album
    hiddenRightCart.artist.innerText = hiddenRightSong.artista
    hiddenRightCart.title.innerText = hiddenRightSong.nombre
    //hiddenRightCart.img.setAttribute("src", "http://localhost:80/proyecto-dise-o/static/img/canciones/" + hiddenRightSong.img)
}

function next() {
    hiddenLeftCart.cart.classList.add("right")
    leftCart.cart.classList.add("right")
    leftCart.cart.style.filter = "brightness(100%)"
    mainCart.cart.classList.add("right")
    mainCart.cart.style.filter = "brightness(50%) blur(1px)"
    rightCart.cart.classList.add("right")
    hiddenRightCart.cart.classList.add("right")

    if(isTimerFinished){
        isTimerFinished = false
        setTimeout(() => {
            hiddenLeftCart.cart.classList.remove("right")
            leftCart.cart.classList.remove("right")
            leftCart.cart.style.filter = "brightness(50%) blur(1px)"
            mainCart.cart.classList.remove("right")
            mainCart.cart.style.filter = "brightness(100%)"
            rightCart.cart.classList.remove("right")
            hiddenRightCart.cart.classList.remove("right")
            apuntador = (apuntador - 1 + songs.length) % songs.length;
            updateSongDisplay();
            isTimerFinished = true
        }, 1000);
    }
}

function prev() {
    hiddenLeftCart.cart.classList.add("left")
    leftCart.cart.classList.add("left")
    mainCart.cart.classList.add("left")
    mainCart.cart.style.filter = "brightness(50%) blur(1px)"
    rightCart.cart.classList.add("left")
    rightCart.cart.style.filter = "brightness(100%)"
    hiddenRightCart.cart.classList.add("left")

    if(isTimerFinished){
        isTimerFinished = false
        setTimeout(() => {
            hiddenLeftCart.cart.classList.remove("left")
            leftCart.cart.classList.remove("left")
            mainCart.cart.classList.remove("left")
            mainCart.cart.style.filter = "brightness(100%)"
            rightCart.cart.classList.remove("left")
            rightCart.cart.style.filter = "brightness(50%) blur(1px)"
            hiddenRightCart.cart.classList.remove("left")
            apuntador = (apuntador + 1) % songs.length;
            updateSongDisplay();
            isTimerFinished = true
        }, 1000);
    }
}

async function main() {
    await fetchData();

    if (songs.length > 0) {
        left.addEventListener('click', () => {
            next()
        });

        right.addEventListener('click', () => {
            prev()
        });

    } else {
        console.log('No se encontraron canciones.');
    }
    
    updateSongDisplay()
}

main();