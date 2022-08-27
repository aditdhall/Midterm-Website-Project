// Adit Dhall, fade.js
// Creates the fade out and fade in


// takes in the element, adds the CSS element hidden
function fadeOut(ele) {
    ele.classList.add("hidden");
}

// takes in the element, removes the CSS element hidden
function fadeIn(ele) {
    ele.classList.remove("hidden");
}

// changes the innerHTML text
function changeText(ele, switcher) {
    if (!switcher) {
        ele.innerHTML = "नमस्ते और अतुल्य भारत में आपका स्वागत है!";
    } else {
        ele.innerHTML = "Hello and Welcome to Incredible India!";
    }
}

var imageArray = ["assets/img/a1.png", "assets/img/a2.png", "assets/img/a3.png"];

var arraySize = imageArray.length;

setInterval(slide, 2500);

var x = 1;

function slide() {
    document.getElementById('slideshow').src = imageArray[x];
    x++;
    if (x === arraySize) {
        x = 0;
    }
}

var imageArray1 = ["assets/img/food.png", "assets/img/food1.png", "assets/img/food2.png"];

var arraySize1 = imageArray1.length;

setInterval(slide1, 2500);

var x1 = 1;

function slide1() {
    document.getElementById('slideshow1').src = imageArray1[x1];
    x1++;
    if (x1 === arraySize1) {
        x1 = 0;
    }
}

var imageArray2 = ["assets/img/mountain.png", "assets/img/delhi.png", "assets/img/leh.png", "assets/img/a1.png"];

var arraySize2 = imageArray2.length;

setInterval(slide2, 2500);

var x2 = 1;

function slide2() {
    document.getElementById('slideshow2').src = imageArray2[x2];
    x2++;
    if (x2 === arraySize2) {
        x2 = 0;
    }
}