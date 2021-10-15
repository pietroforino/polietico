var myFont;

var coloreUno = "#3233ff";
var coloreDue = "#000000";

var num3

function setup() {

  const myCanvas = createCanvas(windowWidth, windowHeight);
  myCanvas.parent('containerBG');

  num3 = random(200, 600);
  num4 = random(100, 900);

}

var iterator = 0;

function draw() {

  //Updating a semitransparent background for a trail effect, which hints at the act of scribbling
  background('rgba(238, 234, 231, 0.1)');

  if (windowWidth > 415) {
    iterator++;
    noStroke();

    var x = noise(iterator / 200 + 400) * height;
    var y = (noise(iterator / 500 + 2000) * width) - 300;
    fill(coloreUno);
    ellipse(x, y, 10);

    var a = 900 + noise(-iterator / 174 + 420) * height;
    var b = (noise(-iterator / 400 + 1900) * width) - 300;
    fill(coloreDue);
    ellipse(a, b, 10);

    var c = num3 + noise(-iterator / 200 + 400) * height;
    var d = (noise(-iterator / 500 + 2000) * width) - 300;
    fill("#ff7949");
    ellipse(c, d, 10);

    var e = num4 + noise(-iterator / 150 + 400) * height;
    var f = (noise(-iterator / 350 + 2000) * width) - 300;
    fill("white");
    ellipse(e, f, 10);

  }
}

function windowResized() {
  //resizing the canvas when the window is resized
  resizeCanvas(windowWidth, windowWidth);
}


// Wrap every letter in a span
var textWrapper = document.querySelector('.ml16');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
  .add({
    targets: '.ml16 .letter',
    translateY: [100,0],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 30 * i
  })

function out() {
  anime.timeline({loop: false})
    .add({
      targets: '.ml16 .letter',
      opacity: 0,
      translateY: [0,-100],
      easing: "easeOutExpo",
      duration: 1000,
      delay: (el, i) => 30 * i
    }).add({
      targets: '.buttonUno',
      opacity: 0,
      translateY: [0,-100],
      easing: "easeOutExpo",
      duration: 1000,
      delay: (el, i) => 30 * i
    })

}
