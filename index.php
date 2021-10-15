<!DOCTYPE html>
<html>

  <head>
    <title>ScribbleLoop | scribble</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="stylesheet" href="/style.css">

    <script language="javascript" type="text/javascript" src="addons/p5.min.js"></script>
    <script language="javascript" type="text/javascript" src="addons/p5.dom.min.js"></script>
    <script language="javascript" type="text/javascript" src="addons/p5.sound.min.js"></script>
    <script language="javascript" type="text/javascript" src="scribble.js"></script>
    <style media="screen">
      body {
        overflow-x: hidden;
        overflow-y: hidden;
      }

      .iconColor {
        position: fixed;
        bottom: 75px;
        left: 27px;
        width: 50px;
      }

      .iconColor svg {
        max-width: 40px;
        padding: 5px;
        stroke-width: 6;
        fill: transparent;
        transition: 0.2s all;
        cursor: pointer;
      }

      #yellow {
        stroke: #fbe54e;
        fill: #fbe54e;
      }

      #yellow:hover {
        fill: #fbe54e;
      }

      #orange {
        stroke: #e8a03f;
      }

      #orange:hover {
        fill: #e8a03f;
      }

      #red {
        stroke: #d23a2f;
      }

      #red:hover {
        fill: #d23a2f;
      }

      #purple {
        stroke: #694990;
      }

      #purple:hover {
        fill: #694990;
      }

      #blu {
        stroke: #3e6eaf;
      }

      #blu:hover {
        fill: #3e6eaf;
      }

      #green {
        stroke: #449345;
      }

      #green:hover {
        fill: #449345;
      }

      #lightgreen {
        stroke: #53ad97;
      }

      #lightgreen:hover {
        fill: #53ad97;
      }

      #screen {
        position: fixed;
        left: 50vw;
        top: 50vh;
        transform: translate(-50%,-50%);
        padding: 2px 2px 0px 2px;
        background: black;
        max-height: calc(90% + 2px);
      }

      .scotch1 {
        position:fixed;
        left:50vw;
        top:10px;
        transform: translateX(-24vw);
        opacity: 0.9
      }

      .scotch2 {
        position:fixed;
        left:50vw;
        bottom:5px;
        transform: translateX(16vw) rotateZ(180deg);
        opacity: 0.9
      }

      @media only screen and (max-width: 500px) {
        #screen {
          position: relative;
          left: 0vw;
          top: 10vh;
          transform: translate(0%,0%);
          padding: 2px 2px 2px 2px;
          max-height: calc(79% + 0px);
        }

        .scotch1 {
          left: 0;
          transform: translateX(-30%);
        }

        .scotch2 {
          left:100vw;
          transform: translateX(-60%) translateY(-50%) rotateZ(180deg);
        }

        .iconColor {
          position: fixed;
          bottom: 57px;
          left: 15px;
          width: 30px;
        }

        .iconColor svg {
          max-width: 40px;
          padding: 5px;
          stroke-width: 6;
          fill: transparent;
          transition: 0.2s all;
          cursor: pointer;
        }

        #eraseButton {
          max-width: 30px;
          left: 20px;
        }

        #homeButton {
          max-width: 30px;
          left: 20px;
        }



      }


    </style>
  </head>

  <body>

  <!-- start php -->
  <?php // code to save var phpImage that is used in scribble.js
    $imagesDir = 'newSketches/';
    $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $randomImage = $images[array_rand($images)];
  ?>

  <script type="text/javascript">

    $.getJSON('https://ipapi.co/json/', function(data) {
    console.log(JSON.stringify(data.country_name, null, 2));
    });
  </script>
  <!-- end php -->


    <div id="screen" style="">
      <div id="createImg"></div>
      <!-- <div id="img" style="height: 100vh"> -->
        <img src="" id="newimg"/>
      <!-- </div> -->
    </div>
    <img src="assets/scotch.png" width="120px" alt="" class="scotch1">
    <img src="assets/scotch.png" width="120px" alt="" class="scotch2">

    <div id="controller">
      <div id="saveLoop" onclick="salvaLoop()" ontouchstart="salvaLoop()" style="">
        Bòn, ho finito &rarr;
      </div>
      <img src="assets/home.svg" id="homeButton"  type="button" onclick="window.open('index.php', '_top')" ontouchstart="window.open('index.php', '_top')" style="cursor:pointer"/>
      <!-- <img src="assets/loop.svg" id="saveLoop" onclick="salvaLoop()" ontouchstart="salvaLoop()" style="cursor:pointer"/> -->
      <img src="assets/erase.svg" id="eraseButton" onclick="cambiaColore('gomma', '#ffffff')" style="cursor:pointer"/>


      <div class="iconColor">
        <svg onclick="cambiaColore('yellow', '#fbe54e')" ontouchstart="cambiaColore('yellow', '#fbe54e')" version="1.1" id="yellow" x="0px" y="0px"
        	 viewBox="0 0 105.9 105.9" xml:space="preserve">
           <path d="M53,0C23.7,0,0,23.7,0,53s23.7,53,53,53s53-23.7,53-53S82.2,0,53,0L53,0z"/>
        </svg>

        <svg onclick="cambiaColore('orange', '#e8a03f')" ontouchstart="cambiaColore('orange', '#e8a03f')" version="1.1" id="orange" x="0px" y="0px"
        	 viewBox="0 0 105.9 105.9" xml:space="preserve">
           <path d="M53,0C23.7,0,0,23.7,0,53s23.7,53,53,53s53-23.7,53-53S82.2,0,53,0L53,0z"/>
        </svg>

        <svg onclick="cambiaColore('red', '#d23a2f')" ontouchstart="cambiaColore('red', '#d23a2f')" version="1.1" id="red" x="0px" y="0px"
           viewBox="0 0 105.9 105.9" xml:space="preserve">
           <path d="M53,0C23.7,0,0,23.7,0,53s23.7,53,53,53s53-23.7,53-53S82.2,0,53,0L53,0z"/>
        </svg>

        <svg onclick="cambiaColore('purple', '#694990')" ontouchstart="cambiaColore('purple', '#694990')" version="1.1" id="purple" x="0px" y="0px"
        	 viewBox="0 0 105.9 105.9" xml:space="preserve">
           <path d="M53,0C23.7,0,0,23.7,0,53s23.7,53,53,53s53-23.7,53-53S82.2,0,53,0L53,0z"/>
        </svg>

        <svg onclick="cambiaColore('blu', '#3e6eaf')" ontouchstart="cambiaColore('blu', '#3e6eaf')" version="1.1" id="blu" x="0px" y="0px"
        	 viewBox="0 0 105.9 105.9" xml:space="preserve">
           <path d="M53,0C23.7,0,0,23.7,0,53s23.7,53,53,53s53-23.7,53-53S82.2,0,53,0L53,0z"/>
        </svg>

        <svg onclick="cambiaColore('green', '#449345')" ontouchstart="cambiaColore('yellow', '#e8a03f')" version="1.1" id="green" x="0px" y="0px"
        	 viewBox="0 0 105.9 105.9" xml:space="preserve">
           <path d="M53,0C23.7,0,0,23.7,0,53s23.7,53,53,53s53-23.7,53-53S82.2,0,53,0L53,0z"/>
        </svg>

        <svg onclick="cambiaColore('lightgreen', '#53ad97')" ontouchstart="cambiaColore('lightgreen', '#53ad97')" version="1.1" id="lightgreen" x="0px" y="0px"
        	 viewBox="0 0 105.9 105.9" xml:space="preserve">
           <path d="M53,0C23.7,0,0,23.7,0,53s23.7,53,53,53s53-23.7,53-53S82.2,0,53,0L53,0z"/>
        </svg>

      </div>


    </div>

    <script type="text/javascript">

      function cambiaColore(cColor, coloreV) {
        coloreVero = coloreV;
        console.log(cColor)
        if (cColor == "gomma") {
          $('.iconColor svg').css("fill", "transparent")
        } else {
          document.getElementById(cColor).style.fill = coloreVero;
          $('.iconColor svg').not('#' + cColor).css("fill", "transparent")

        }
      }

    </script>

    <div id="modal">
      <div id="popup">
          <p id="testo">Oh ultima chance per ripensarci: è finito-finito?</p>
        <span id="closePopup" onclick="chiudiPopUp()" ontouchstart="chiudiPopUp()">&#10005;</span>

        <a href="#" id="galleryLink">
          <div id="buttonGallery"  onclick="galleria()" ontouchstart="galleria()">Invialo per farlo approvare</div>
          <div id="buttonGallery2"  onclick="apriGalleria()" ontouchstart="apriGalleria()">Dai vediamo che han fatto gli altri</div>
          <div id="buttonGallery3"  onclick="scribbleAgain()" ontouchstart="scribbleAgain()">Ne voglio fare un altro</div>
        </a>
      </div>
    </div>

    <!-- use of jquery to optimize with PHP + AJAX language -->
    <script>
      $('#buttonGallery2').hide()
      $('#buttonGallery3').hide()

      // show popup when button is pressed
      function salvaLoop() {
        $('#controller').fadeOut()
        $('#modal').fadeIn()
      }

    // press x and close popup
      function chiudiPopUp() {
        $('#controller').fadeIn()
        $('#modal').fadeOut()
      }

      var contaGallery = 0 // var to save sketch once

      function galleria() {
        html2canvas($("#screen"), { //use of library html2canvas
          onrendered: function(canvas) {
            var imgsrc = canvas.toDataURL("image/png");
            console.log(imgsrc)
              $("#newimg").attr('src', imgsrc);
              $("#img").show();
              $("#newimg").show();
              $("#createImg").hide();
              var dataURL = canvas.toDataURL();
              if (contaGallery == 0) { //save file, execute only once
                $.ajax({
                  type: "POST",
                  url: "server.php",
                  data: {
                    imgBase64: dataURL
                  }
                }).done(function(o) {
                  console.log('saved');
                  contaGallery = 1 // prevent a new saving

                  $('#buttonGallery').hide();
                  $('#buttonGallery2').show();
                  $('#buttonGallery3').show();
                  $("#testo").text('Giotto sei tu?? il tuo disegnino è stato inviato correttamente!'); //change popup text
                });
              }
         }
        });
      }

      function apriGalleria() {
        window.open("gallery.php","_self")
      }

      function scribbleAgain() {
        window.open("index.php", "_self");
      }

    </script>

  </body>

</html>
