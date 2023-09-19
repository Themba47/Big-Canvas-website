<?php
  session_start();
?>
<!DOCTYPE html>

<html>
  <head>
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108740911-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108740911-1');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/book.css">
    <link rel="preload" as="font"  href='../fonts/airstrike.ttf' />
        <link rel="preload" as="font" href='../fonts/Mostwasted.ttf'/>
        <link rel="preload" as="font" href='../fonts/Cambria.ttf' />
        <link rel="preload" as="font" href='../fonts/Olde English Regular.ttf' />
        <link rel="preload" as="font" href='../fonts/True Lies.ttf' />
        <link rel="preload" as="font" href='../fonts/SF-Pro-Display-Regular.otf' />
        <link rel="preload" as="font" href='../fonts/SF-Pro-Display-Thin.otf'/>
        <link rel="preload" as="font" href='../fonts/Baskerville Old Face.ttf'/>
        <link rel="preload" as="font" href='../fonts/Pacifico-Regular.ttf'/>
        <link rel="preload" as="font" href='../fonts/Phosphate.ttc'/>
        <link rel="preload" as="font" href='../fonts/BEYNO.ttf'/>
        <link rel="preload" as="font" href='../fonts/Blanka-Regular.otf'/>
        <link rel="preload" as="font" href='../fonts/Ailerons-Regular.otf' />
    <style>

        @font-face { font-family: airstrike; src: url('../fonts/airstrike.ttf'); }
        @font-face { font-family: Mostwasted; src: url('../fonts/Mostwasted.ttf'); }
        @font-face { font-family: cambria; src: url('../fonts/Cambria.ttf'); }
        @font-face { font-family: Olde English Regular; src: url('../../fonts/Olde English Regular.ttf'); }
        @font-face { font-family: True Lies; src: url('../fonts/True Lies.ttf'); }
        @font-face { font-family: SF-Pro-Display-Regular; src: url('../fonts/SF-Pro-Display-Regular.otf'); }
        @font-face { font-family: SF-Pro-Display-Thin; src: url('../fonts/SF-Pro-Display-Thin.otf'); }
        @font-face { font-family: Baskerville Old Face; src: url('../fonts/Baskerville Old Face.ttf'); }
        @font-face { font-family: pacifico; src: url('../fonts/Pacifico-Regular.ttf'); }
        @font-face { font-family: Phosphate; src: url('../fonts/Phosphate.ttc'); }
        @font-face { font-family: BEYNO; src: url('../fonts/BEYNO.ttf'); }
        @font-face { font-family: Blanka; src: url('../fonts/Blanka-Regular.otf'); }
        @font-face { font-family: Ailerons; src: url('../fonts/Ailerons-Regular.otf'); }

      body {
        font-family: "Arial", sans-serif;
      }

      nav {
        display: inline;
      }

      .main {
        padding: 5% 0;
        display: grid;
        grid-template-columns: 60% 40%;
        height: 100vh;
      }

      #download {
            padding: 2%;
        text-align: right;
        width: 100%;
        background-color: #1e1f31;
            }

            #download a {
                padding: 2%;
                text-decoration: none;
                margin: 5%;
                color: #fff;
                background-color: #1caf1c;
                border-radius: 8px;
            }

          #links {
            position: absolute;
            background-color: #fff;
            padding: 2%;
            display: none;
            width: 50%;
            margin: 5%;
          }

          #links a {
            background-color: #1e1f31;
          }

      #blackscreen {
          width: 100%;
          height: 100%;
          display: grid;
          place-items: center;
      }

      #business-card {
        background-color: #32a852;
        /* width: 340px 90mm; */
        /* height: 192px 50mm; */
        width: 680px;
        height: 384px;
        display: grid;
        grid-template-columns: 1fr;
        background-size: 100% 100%;
        background-position: center;
      }


      #business-card-txt {
        background-color: #000;
        display: grid;
        place-items: center;
        padding: 5%;
        border-top-right-radius: 150px;
        border-bottom-right-radius: 150px;
        color: #fff;
      }

      .text_container {
        width: 95%;
      }

      .bttn {
        margin: 1%;
        padding: 10px;
        background-color: transparent;
        display: grid;
        place-items: center;
        text-decoration: none;
      } 

      h2, h3 {
        text-align: center;
        margin: 0;
      }
      h2 {
        font-size: 30px;
        padding: 2%;
        position: absolute;
      }
      h3 {
        font-size: 20px;
      }

      p {
        margin: 0;
        font-size: 15px;
      }

      .txt_p {
        display: grid;
        grid-template-columns: 10% 1fr;
        margin-bottom: 4%;
      }

      #business-card-logo {
        display: grid;
        place-items: center;
      }

      #mylogo {
        width: 40%;
      }

      #mytxt {
        display: none;
        position: fixed;
        z-index: 3;
        top: 25px;
        left: 5%;
            }

      #instructions {
        border: 3px solid #fff;
        color: #fff;
        width: fit-content;
        padding: 2%;
        margin: 2%;
      }

      #download_cloth {
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 1;
        background-color: #1e1f31;
        display: none;
        place-items: center;
      }

      #download_cloth h2 {
        color: #fff;
        background-color: #267be3;
        padding: 2%;
      }

      @media (max-width: 768px) {
        .main {
            place-items: center;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr;
        overflow: hidden;
      }
      #business-card {
            width: 100vw;
            height: 30vh;
        }


      #business-card-btns {
        position: fixed;
        width: 90%;
        z-index: 1;
        bottom: 0;
        padding: 5%;
        background-color: #1e1f31;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
      }


        h2 {
        font-size: 15px;
      }
      h3 {
        font-size: 10px;
      }

      p {
        margin: 0;
        font-size: 7.5px;
      }


      }

    </style>
  </head>
  <body>
  <?php include('headsgubu.php'); ?>
        <div id="download_cloth">
          <h2>Downloading...</h2>
        </div>
        <div id="download">
            <a href="javascript:void(0)" onclick="vulaLinks()">Share Page <i class="fa fa-link" style="font-size:20px; color: #ffffff;"></i></a>
            <a href="javascript:void(0)" id="downloadbtn" onclick="createPDF()">Download <i class="fa fa-download" style="font-size:20px; color: #ffffff;"></i></a>
            <div id="links">
                <a href="https://www.facebook.com/sharer.php?u=https://bit.ly/4aCanV5"><i class="fa fa-facebook" style="font-size:20px; color: #ffffff;"></i></a>
                <a href="https://twitter.com/share?url=https://bit.ly/4aCanV5"><i class="fa fa-twitter" style="font-size:20px; color: #ffffff;"></i></a>
            </div>
        </div>
    <div class="container main">
      <div id="business-card">
        
        <div id="business-card-logo">
          <div id="blackscreen">
            <img src="" id="mylogo" alt="">
            <h2 contenteditable="true" class="txt draggable" id="drag-1">Why Not</h2>
          </div>
        </div>
      </div>

      <div id="business-card-btns">
      <textarea id="mytxt"></textarea>
      <input id="inputFile" type="file" style="display: none;">
    
      <a href="javascript:void(0)" onclick="changeColor(1)" title="background color" class="bttn"><i class="fas fa-fill-drip" style="font-size:25px; color: #ffffff;"></i></a>
      <a href="javascript:void(0)" onclick="changeColor(2)" title="font color" class="bttn"><i class="fas fa-paint-brush" style="font-size:25px; color: #ffffff;"></i></a>
      <a href="javascript:void(0)" onclick="changeFont()" title="font"  class="bttn"><i class="fa fa-font" style="font-size:25px; color: #ffffff;"></i></a>
      <a href="javascript:void(0)" onclick="changeIMG()" title="image" class="bttn"><i class="fa fa-image" style="font-size:25px; color: #ffffff;"></i></a>
      <a href="javascript:void(0)" onclick="changePatt()" title="gradient" class="bttn"><i class="fas fa-paint-roller" style="font-size:25px; color: #ffffff;"></i></a>
      <a href="javascript:void(0)" onclick="changeAngle()" title="angle" class="bttn"><i class="fas fa-redo" style="font-size:25px; color: #ffffff;"></i></a>
      <div id="myinputs"></div>
      <div class="color-picker"></div>
    </div>
      
    </div>

      <?php include('bottom.php'); ?> 
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
    <script>
      var ibox = document.querySelector(".txt"),
      bcl = document.getElementById("business-card"),
      con = document.querySelector(".container"),
      txt_area = document.getElementById("mytxt"),
      igama = "",
      add_more = document.getElementById("addmore");
      mylogo = document.getElementById("mylogo"),
      inputFile = document.getElementById("inputFile"),
      inputColor = document.getElementById("inputColor"),
      myin = document.getElementById("myinputs"),
      b_card = ["680px", "384px", "100vw", "30vh", "80vw", "70vh", "1280px", "768px"],
      font_array = ["Times","airstrike", "Mostwasted", "cambria", "pacifico", "SF-Pro-Display-Thin", "SF-Pro-Display-Regular", "BEYNO", "Blanka", "True Lies", "Phosphate", "Olde English Regular, Ailerons"],
      font_num = 0,
      patt = ["", "patt1", "patt2", "patt3", "patt4", "patt5"],
      angle = [0, -20, 20],
      an = 0,
      gradient_num = 0,
      card_orientation = true, // true means landscape and false is vertical
      cloth = document.getElementById("download_cloth"),
      x = '', num = 0;

      function changeFont() {
        if(font_num >= font_array.length -1) {
                    font_num = 0;
                } else {
                    font_num++;
                }
                ibox.style.fontFamily = font_array[font_num];
      }

      txt_area.addEventListener("keyup", (e) => {
               
                // igama = txt_area.value;
                if(txt_area.value.charAt(txt_area.value.length-1) == '\n') {
                    igama += `<br>`;
                    txt_area.value += '<br>';
                    
                } else {
                    igama = txt_area.value;
                }
                ibox.innerHTML = igama;
                
            })

            ibox.innerHTML = "Tap text to edit";
            ibox.addEventListener("click", () => {
            ibox.textContent = igama;
            });
            

// funtion to close text box if click occurs outside....
document.addEventListener("click", (ev) => {
  if (
    ev.target.id !== "mytxt" &&
    ev.target.id !== "drag-1"
  ) {
    txt_area.classList.remove("active");
    txt_area.style.display = "none";
  }
});
      
      
    //   function changeO() {
    //     if(card_orientation) {
    //         card_orientation = false
    //         if(window.innerWidth > 640) {
    //             bcl.style.width = b_card[1];
    //             bcl.style.height = b_card[0];
    //         } else {
    //             bcl.style.width = b_card[4];
    //             bcl.style.height = b_card[5];
    //         }
    //     } else {
    //         card_orientation = true;
    //         if(window.innerWidth > 640) {
    //             bcl.style.width = b_card[0];
    //             bcl.style.height = b_card[1];
    //         } else {
    //             bcl.style.width = b_card[2];
    //             bcl.style.height = b_card[3];
    //         }
    //     }
    //   }

    function changeAngle() {
        if(an >= angle.length -1) {
                    an = 0;
                } else {
                    an++;
                }
                ibox.style.transform = "rotateZ("+angle[an]+"deg)";
    }


      function changePatt() {
        if(gradient_num >= patt.length -1) {
                    gradient_num = 0;
                } else {
                    gradient_num++;
                }
                bcl.style.backgroundImage = "url(../patt/"+patt[gradient_num]+".png)";
      }

      // Function to change the logo
     function changeIMG() {
        inputFile.click();
     }

     
      // Function to change the logo
      inputFile.onchange = () => {
        var myfile = inputFile.files[0];
        var reader = new FileReader();
        reader.onloadend = () => {
          mylogo.src = reader.result;
        }
        if (myfile) {
          reader.readAsDataURL(myfile);
  }
      }

      // inputColor.onchange = () => {
      //   console.log(inputColor.value);
      //   bcl.style.backgroundColor = inputColor.value;
      // }

      // Simple example, see optional options for more configuration.
function changeColor(mow) {
  const pickr = Pickr.create({
    el: '.color-picker',
    theme: 'classic', // or 'monolith', or 'nano'

    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 1)',
        'rgba(156, 39, 176, 1)',
        'rgba(103, 58, 183, 1)',
        'rgba(63, 81, 181, 1)',
        'rgba(33, 150, 243, 1)',
        'rgba(3, 169, 244, 1)',
        'rgba(0, 188, 212, 1)',
        'rgba(0, 150, 136, 1)',
        'rgba(76, 175, 80, 1)',
        'rgba(139, 195, 74, 1)',
        'rgba(205, 220, 57, 1)',
        'rgba(255, 235, 59, 1)',
        'rgba(255, 193, 7, 1)'
    ],

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});

pickr.show();

pickr.on('change', (...args) => {
  let color = args[0].toHEXA().toString();
  switch (mow) {
      case 1:
      bcl.style.backgroundColor = color;
      ibox.style.backgroundColor = color;
          break;
      case 2:
      ibox.style.color = color;
          break;
      default:
          break;
  }
})
.on("save", (color, instance) => {})
    .on("hide", (instance) => {
      document
        .querySelector(".pickr")
        .setAttribute("id", "colour");
      document.querySelector("#colour").className = "color-picker";
    });
}

      
      

   // target elements with the "draggable" class
interact('.draggable')
  .draggable({
    // enable inertial throwing
    inertia: true,
    // keep the element within the area of it's parent
    modifiers: [
      interact.modifiers.restrictRect({
        restriction: 'parent',
        endOnly: true
      })
    ],
    // enable autoScroll
    autoScroll: true,

    listeners: {
      // call this function on every dragmove event
      move: dragMoveListener,

      // call this function on every dragend event
      end (event) {
        var textEl = event.target.querySelector('p')

        // textEl && (textEl.textContent =
        //   'moved a distance of ' +
        //   (Math.sqrt(Math.pow(event.pageX - event.x0, 2) +
        //              Math.pow(event.pageY - event.y0, 2) | 0))
        //     .toFixed(2) + 'px')
        textEl && (textEl.textContent = igama)
      }
    }
  })

function dragMoveListener (event) {
  var target = event.target
  // keep the dragged position in the data-x/data-y attributes
  var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
  var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy

  // translate the element
  target.style.transform = 'translate(' + x + 'px, ' + y + 'px)'

  // update the posiion attributes
  target.setAttribute('data-x', x)
  target.setAttribute('data-y', y)
}


// this function is used later in the resizing and gesture demos
window.dragMoveListener = dragMoveListener



      function redirectToLogin(msg) {
        var link = document.createElement('a');
              link.href = '../login.php?msg='+msg;
              link.click();
      }

      function vulaLinks() {
  document.getElementById('links').style.display = "block";
}


      // This function is used to download the image
      function createPDF() {
        document.querySelector("#downloadbtn").innerHTML = "Downloading...";
        document.querySelector("#downloadbtn").style.backgroundColor = "#267be3";
        document.querySelector("#downloadbtn").style.color = "#fff";
        if( window.innerWidth < 640) {
          bcl.style.overflow = "hidden";
          ibox.style.fontSize =  "60px";
          cloth.style.display = "grid";
          if(card_orientation) {
            bcl.style.width = "1280px";
            bcl.style.height = "768px";
          } else {
            bcl.style.width = b_card[7];
            bcl.style.height = b_card[6];
          }
          domtoimage.toPng(document.querySelector('#business-card'), { quality: 0.98 })
          .then(function (dataUrl) {
              var link = document.createElement('a');
              link.download = 'back-of-card.png';
              link.href = dataUrl;
              console.log(dataUrl);
              link.click();
              location.reload();
        });
        } else {
          domtoimage.toPng(document.querySelector('#business-card'), { quality: 0.98 })
          .then(function (dataUrl) {
              var link = document.createElement('a');
              link.download = 'back-of-card.png';
              link.href = dataUrl;
              console.log(dataUrl);
              link.click();
              location.reload();
              
        });
        }
      }
    </script>
  </body>
</html>