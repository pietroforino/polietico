<!DOCTYPE html>
<html>
  <head>
    <title>ScribbleLoop | home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="/style.css">

    <script language="javascript" type="text/javascript" src="addons/p5.min.js"></script>
    <script language="javascript" type="text/javascript" src="addons/p5.dom.min.js"></script>
    <script language="javascript" type="text/javascript" src="addons/p5.sound.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


    <!-- <link rel="shortcut icon" href="assets/squaredloop.png"> -->


  </head>
  <body>

    <div id="containerBG" style="z-index:-1"></div>
    <div class="grid"></div>


    <div class="buttonContainer">
        <div class="ml16">Scribble Loop</div>
      <!-- <img src="/assets/logo.png" alt="" style="margin-bottom:100px;"> -->

      <br>
      <button class="buttonUno" onclick="openScribble()">
        <span>Start scribbling</span>
      </button>
      <button class="buttonDue" onclick="openAbout()">
        <span>About</span>
      </button>
        <div class="ml17" style="margin-top:100px;line-height:1.4">Create infinite drawings and collaborate with others!</div>

    </div>

  </body>
</html>


<script>

function openScribble() {
  if (window.width <= 415) {
    window.open("scribble.php", "_self");
  } else {
    setTimeout(function(){
      window.open("scribble_desktop.php", "_self");
    }, 1000);  }
    out()

}

function openCourse() {
  window.open("https://drawwithcode.github.io/2019/");
}

function openAbout() {
  setTimeout(function(){
    window.open("about.php", "_self");
  }, 1000);
  out()
}

</script>

<script src="index.js"></script>
