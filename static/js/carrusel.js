// const previous = () => {
//     if (selected == 0) {
//         allObjects[selected3].style.display = "none";
//         selected = allObjects.length - 1;
//         selected2 -= 1;
//         selected3 -= 1;
//         applyDisplay();
//         return 0;
//     }

//     if (selected2 == 0) {
//         allObjects[selected3].style.display = "none";
//         selected -= 1;
//         selected2 = allObjects.length - 1;
//         selected3 -= 1;
//         applyDisplay();
//         return 0;
//     }

//     if (selected3 == 0) {
//         allObjects[selected3].style.display = "none";
//         selected -= 1;
//         selected2 -= 1;
//         selected3 = allObjects.length - 1;
//         applyDisplay();
//         return 0;
//     }

//     allObjects[selected3].style.display = "none";
//     selected -= 1;
//     selected2 -= 1;
//     selected3 -= 1;
//     applyDisplay();
// };

// const next = () => {
//     if (selected3 == allObjects.length - 1) {
//         allObjects[selected].style.display = "none";
//         selected += 1;
//         selected2 += 1;
//         selected3 = 0;
//         applyDisplay();
//         return 0;
//     }

//     if (selected2 == allObjects.length - 1) {
//         allObjects[selected].style.display = "none";
//         selected += 1;
//         selected2 = 0;
//         selected3 += 1;
//         applyDisplay();
//         return 0;
//     }

//     if (selected == allObjects.length - 1) {
//         allObjects[selected].style.display = "none";
//         selected = 0;
//         selected2 += 1;
//         selected3 += 1;
//         applyDisplay();
//         return 0;
//     }

//     allObjects[selected].style.display = "none";
//     selected += 1;
//     selected2 += 1;
//     selected3 += 1;
//     applyDisplay();
// };

// const applyDisplay = () => {
//     allObjects[selected].style.display = "flex";
//     allObjects[selected2].style.display = "flex";
//     allObjects[selected3].style.display = "flex";
// };

// var allObjects = document.getElementsByClassName("carousel-box");
// var selected = 0;
// var selected2 = 1;
// var selected3 = 2;

// allObjects[selected].style.display = "flex";
// allObjects[selected2].style.display = "flex";
// allObjects[selected3].style.display = "flex";

const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

/*class CarruselInfinito {
  constructor(numeros) {
    this.numeros = numeros;
    this.apuntador = 0;
  }

  next() {
    this.apuntador = (this.apuntador + 1) % this.numeros.length;
    return this.numeros[this.apuntador];
  }

  prev() {
    this.apuntador = (this.apuntador - 1 + this.numeros.length) % this.numeros.length;
    return this.numeros[this.apuntador];
  }
}*/

// Ejemplo de uso
const numeros = [0, 1, 2, 3, 4]
var apuntador = 0
//const carrusel = new CarruselInfinito(numeros);
const cSongs = document.getElementsByClassName('cSong')

const left = document.getElementById('left')
const right = document.getElementById('right')

/*const leftCart = document.getElementById('leftCart')
const mainCart = document.getElementById('mainCart')
const rightCart = document.getElementById('rightCart')*/

function next() {
  apuntador = (apuntador + 1) % numeros.length;
  return numeros[apuntador];
}

function prev() {
  apuntador = (apuntador - 1 + numeros.length) % numeros.length;
  return numeros[apuntador];
}

left.addEventListener('click', () => {
  prev()

  console.log(numeros[(apuntador - 1 + numeros.length) % numeros.length])
  console.log(numeros[apuntador])
  console.log(numeros[(apuntador + 1) % numeros.length])

  cSongs.item(numeros[(apuntador - 1 + numeros.length) % numeros.length]).style.display = "block"
  cSongs.item(numeros[apuntador]).style.display = "block"
  cSongs.item(numeros[(apuntador + 1) % numeros.length]).style.display = "block"

  for (let i = 0; i < cSongs.length; i++) {
    if(i != numeros[(apuntador - 1 + numeros.length) % numeros.length] &&
        i != numeros[apuntador] &&
        i != numeros[(apuntador + 1) % numeros.length]){

      cSongs.item(i).style.display = "none"
    }
  }
  
  /*leftCart.innerText = carrusel.numeros[(carrusel.apuntador - 1 + carrusel.numeros.length) % carrusel.numeros.length];
  rightCart.innerText = carrusel.numeros[(carrusel.apuntador + 1) % carrusel.numeros.length];
  mainCart.innerText = carrusel.numeros[carrusel.apuntador];*/
})

right.addEventListener('click', () => {
  console.log(carrusel.next());
  leftCart.innerText = carrusel.numeros[(carrusel.apuntador - 1 + carrusel.numeros.length) % carrusel.numeros.length];
  rightCart.innerText = carrusel.numeros[(carrusel.apuntador + 1) % carrusel.numeros.length];
  mainCart.innerText = carrusel.numeros[carrusel.apuntador];
})


/*for (let i = 0; i < 10; i++) {
  console.log(carrusel.next());
}

for (let i = 0; i < 10; i++) {
  console.log(carrusel.prev());
}*/
