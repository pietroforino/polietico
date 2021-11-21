<!DOCTYPE html>
<html>

  <head>
    <title>Polietico</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script> -->
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>



    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="stylesheet" href="/style.css">

    <script language="javascript" type="text/javascript" src="addons/p5.min.js"></script>
    <script language="javascript" type="text/javascript" src="addons/p5.dom.min.js"></script>
    <script language="javascript" type="text/javascript" src="addons/p5.sound.min.js"></script>
    <script language="javascript" type="text/javascript" src="scribble.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <style media="screen">
      body {
        overflow-x: hidden;
        overflow-y: hidden;
      }
    </style>

  </head>

  <body>

  <!-- start php -->
  <?php // code to save var phpImage that is used in scribble.js
    $imagesDir = 'newSketches/';
    $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $randomImage = $images[array_rand($images)];

    $nPoster = $_GET['poster'];

  ?>
  <!-- end php -->

<script>

  val = "<?php echo $nPoster ?>";

  if (val == "") {
    val = "responsabilita"
  }

</script>

    <div id="screen" style="">
      <div id="createImg"></div>
      <!-- <div id="img" style="height: 100vh"> -->
        <img src="" id="newimg" style="max-width:100%"/>
      <!-- </div> -->
    </div>
    <img src="assets/scotch.png" width="120px" alt="" class="scotch1">
    <img src="assets/scotch.png" width="120px" alt="" class="scotch2">

    <div id="controller">
      <div id="saveLoop" onclick="salvaLoop()" ontouchstart="salvaLoop()" style="">
        Bòn, ho finito &rarr;
      </div>
      <a href="https://www.pietroforino.com/polietico"><img src="assets/home.svg" id="homeButton"  type="button" style="cursor:pointer"/></a>
      <!-- <img src="assets/loop.svg" id="saveLoop" onclick="salvaLoop()" ontouchstart="salvaLoop()" style="cursor:pointer"/> -->

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


        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 155 155" style="enable-background:new 0 0 155 155;" xml:space="preserve" onclick="cambiaColore('white', '#ffffff')" ontouchstart="cambiaColore('white', '#ffffff')" version="1.1" id="white" style="cursor:pointer">
        	<path class="st0" d="M0.3,100.9C1.2,96.6,4,93.6,7,90.6c12.8-12.7,25.5-25.4,38.2-38.1c1-1,1.4-0.9,2.3,0
        		C66,71,84.4,89.4,103,107.8c1,1,1,1.5,0,2.4c-11.5,11.4-22.9,22.8-34.4,34.3c-0.4,0.4-0.9,0.7-1.1,1.3c0.5,0.3,1.1,0.1,1.6,0.1
        		c21.9,0,43.8,0,65.7,0c1.4,0,1.8,0.3,1.7,1.7c-0.1,2.1-0.1,4.2,0,6.3c0,0.8-0.2,1.1-1,1c-0.3,0-0.6,0-0.9,0c-27,0-54,0-81,0
        		c-4.6,0-8.5-1.5-11.8-4.9c-11.6-11.7-23.3-23.4-35.1-35c-3-3-5.7-6-6.5-10.3C0.3,103.5,0.3,102.2,0.3,100.9z"/>
        	<path class="st0" d="M155.3,54.4c-0.9,4.4-3.7,7.4-6.8,10.4C136.2,77,124,89.2,111.7,101.5c-0.9,0.9-1.4,1-2.3,0
        		c-18.5-18.5-37-37-55.5-55.4c-1-0.9-0.9-1.4,0-2.3C67,30.8,80,17.8,93,4.7c2.3-2.3,5-3.6,8.1-4.4c1.3,0,2.6,0,3.9,0
        		c4.3,0.8,7.3,3.5,10.3,6.4c11.1,11.2,22.3,22.4,33.5,33.5c3,2.9,5.6,6,6.5,10.2C155.3,51.8,155.3,53.1,155.3,54.4z M104.3,19.2
        		c-0.2,0.2-0.4,0.4-0.6,0.6c-1.6,1.6-3.3,3.3-4.9,4.9c-0.6,0.6-0.6,0.9,0,1.5c10.2,10.2,20.4,20.3,30.6,30.5c0.6,0.6,0.9,0.7,1.5,0
        		c1.5-1.6,3.1-3.2,4.7-4.7c0.8-0.8,0.8-1.2,0-2c-5.2-5.1-10.4-10.3-15.5-15.4c-4.9-4.9-9.8-9.7-14.6-14.6
        		C105.1,19.7,104.9,19.3,104.3,19.2z"/>
        </svg>

      </div>


    </div>

    <script type="text/javascript">

      function cambiaColore(cColor, coloreV) {
        coloreVero = coloreV;
        // console.log(cColor)
        if (cColor == "white") {
          console.log("gomma")
          $('#white').css("fill", "white")
          $('#white').css("stroke", "black")
        } else {
          document.getElementById(cColor).style.fill = coloreVero;
          // console.log("nGom")

          $('#white').css("stroke", "transparent")
          $('.iconColor svg').not('#' + cColor).css("fill", "transparent")
          $('#white').css("fill", "black")

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
        html2canvas($("#defaultCanvas0")[0], { //use of library html2canvas
          scale: 5
        }).then(function(canvas) {
          var imgsrc = canvas.toDataURL("image/png");
          // console.log(imgsrc)
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
            };

            var d = new Date();

            Email.send({
                SecureToken : "c704c912-b813-4008-902a-9dd6d497190d",
                To : 'pietrof@live.com, therealpristo@gmail.com',
                From : "Polietico @gmail.com",
                Subject : "Polietico - poster di " + d,
                Body : "Nuovo poster",
                Attachments : [
                {
                    name : "Polietico_" + d + ".png",
                    data : canvas.toDataURL()
                }]
            }).then(
              message => console.log(message)
            );

        });
      }


      function apriGalleria() {
        window.open("https://www.pietroforino.com/polietico/gallery.php","_self")
      }

      function scribbleAgain() {
        window.open("index.php?poster=" + val, "_self");
      }

    </script>

  </body>

</html>
