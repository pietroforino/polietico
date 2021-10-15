<!DOCTYPE html>
<html>
<head>
  <title>scribbleLoop | scribble</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="/style.css">

  <script language="javascript" type="text/javascript" src="addons/p5.min.js"></script>
  <script language="javascript" type="text/javascript" src="addons/p5.dom.min.js"></script>
  <script language="javascript" type="text/javascript" src="addons/p5.sound.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


  <style>
    .content {
      position: absolute;
      width: 360px;
      height: 640px;
      background: transparent;
      left:50%;
      top: 54.8%;
      transform: translate(-50%, -50%);
    }
  </style>

</head>

<body>
  <div id="containerBG" style="z-index:-1"></div>
  <div class="grid"></div>
  <!-- <img src="assets/logo.png" id="mylogo" style="margin-top: 5vh"/> -->
  <div class="ml16" style="width:100%;top: 60px; text-align: center; position:absolute">Scribble Loop</div>

  <a href="index.php">
    <img src="assets/prev.svg" class="goBack">
  </a>

  <h1 style="position: absolute;  left: 10%; top: 50%;width:20%;line-height:1.3">Merge the previous scribble in your own drawing and create new possibilities for the next ones!</h1>

  <div style="position: absolute;  right: 10%; top: 50%;width:20%;">
    <h2 style="line-height:1.3">When you're done, press the Loop button in the bottom-right corner.</h2>
    <img src="assets/arrow-with-scribble.svg" style="width: 80%;margin-left: -30%;">

  </div>

  <script src="index.js"></script>


  <div class="content">
    <iframe src="scribble.php" style="width:100%;border:none;height:100%; background:transparent; border-top-left-radius: 255px 15px; border-top-right-radius: 15px 225px; border-bottom-right-radius: 225px 15px; border-bottom-left-radius:15px 255px; border:solid 2px #41403E;" />
  </div>

</body>
</html>
