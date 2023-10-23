const previous = () => {
    if (selected == 0) {
        allObjects[selected3].style.display = "none";
        selected = allObjects.length - 1;
        selected2 -= 1;
        selected3 -= 1;
        applyDisplay();
        return 0;
    }
  
    if (selected2 == 0) {
        allObjects[selected3].style.display = "none";
        selected -= 1;
        selected2 = allObjects.length - 1;
        selected3 -= 1;
        applyDisplay();
        return 0;
    }
  
    if (selected3 == 0) {
        allObjects[selected3].style.display = "none";
        selected -= 1;
        selected2 -= 1;
        selected3 = allObjects.length - 1;
        applyDisplay();
        return 0;
    }
  
    allObjects[selected3].style.display = "none";
    selected -= 1;
    selected2 -= 1;
    selected3 -= 1;
    applyDisplay();
};
  
const next = () => {
    if (selected3 == allObjects.length - 1) {
        allObjects[selected].style.display = "none";
        selected += 1;
        selected2 += 1;
        selected3 = 0;
        applyDisplay();
        return 0;
    }
  
    if (selected2 == allObjects.length - 1) {
        allObjects[selected].style.display = "none";
        selected += 1;
        selected2 = 0;
        selected3 += 1;
        applyDisplay();
        return 0;
    }
  
    if (selected == allObjects.length - 1) {
        allObjects[selected].style.display = "none";
        selected = 0;
        selected2 += 1;
        selected3 += 1;
        applyDisplay();
        return 0;
    }
  
    allObjects[selected].style.display = "none";
    selected += 1;
    selected2 += 1;
    selected3 += 1;
    applyDisplay();
};
  
const applyDisplay = () => {
    allObjects[selected].style.display = "flex";
    allObjects[selected2].style.display = "flex";
    allObjects[selected3].style.display = "flex";
};
  
var allObjects = document.getElementsByClassName("carousel-box");
var selected = 0;
var selected2 = 1;
var selected3 = 2;

allObjects[selected].style.display = "flex";
allObjects[selected2].style.display = "flex";
allObjects[selected3].style.display = "flex";