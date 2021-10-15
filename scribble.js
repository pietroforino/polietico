
var coloreVero = "#fbe54e";
var traccia = 20;

var drawing = [];

var isDrawing = false;
var isErasing = false;

var k = Math.random() * (1.9 - 1.3) + 1.3; // create random variables to scale and move the sketch that you have to complete
var fx = Math.random() * (1080 / 8 * ((k - 1) / k) - 1); // use of Math.round because it is before draw function and it is global
var fy = Math.random() * (1920 / 8 * ((k - 1) / k) - 1);

var altezza;
var larghezza;

var poster;

function setup() {

  altezza = windowHeight / 10 * 9;
  larghezza = altezza / 1.4;

  if (larghezza <= windowWidth) {
    canvas = createCanvas(larghezza, altezza);
    console.log("desktop")
  } else {
    altezza = windowWidth * 1.4;
    larghezza = windowWidth;
    console.log("mobile")
    canvas = createCanvas(larghezza, altezza);
  }

  canvas.background("white");

  // canvas.mousePressed(startPath);
  canvas.parent('createImg');

  bg = loadImage("assets/computer.png");
}

//start drawing, hiding scribble's controller buttons and store the drawn path in the drawing array
function startPath() {
  $('#controller').fadeOut('fast')
  isDrawing = true;
}

function touchStarted() {
  $('#controller').fadeOut('fast')
  isDrawing = true;
  return false;
}

//scribble's controller buttons reapper
function endPath() {
  $('#controller').fadeIn('fast')
  isDrawing = false;
}

function touchEnded() {
  $('#controller').fadeIn('fast')
  isDrawing = false;
}

function draw() {
  background(bg);

  let speed = abs(winMouseX - pwinMouseX);

  push()

    if (isDrawing) {

      stroke(coloreVero);
      noFill();

      var setSpeed = lerp(speed/10,2,0.5)

      traccia = 20/(setSpeed + 0.8);

      strokeWeight(traccia);
      line(mouseX, mouseY, pmouseX, pmouseY);

    }
  pop()
}
