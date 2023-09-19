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
        

            #container {width: 600px;}
            .main {
                height: 100vh;
            }

            #download {
                padding: 4%;
                text-align: right;
                width: 90%;
                background-color: transparent;
            }

            #download a {
                padding: 2%;
                text-decoration: none;
                color: #fff;
                background-color: #1caf1c;
                border-radius: 8px;
            }

            .title {
                width: 100%;
                height: 60px;
                background-color: #000;
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            .active {
                display: inline;
            }

            .title h2 {
                color: #fff;
                text-align: center;
            }

            .title #logo {
                color: crimson;
                margin-left: 2%;
                margin-top: 2%;
            }

            .mycanvas {
                display: grid;
                grid-template-columns: 40% 1fr;
                padding: 5%;
            }

            .the_canvas {
                padding: 5% 2.5%;
                height: 300px;
                width: 300px;
                background-size: cover;
                background-position: center;
            }

            #orderanddate {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            #orderanddate p {
                text-align: right;
            }

            table {
                border-collapse: collapse;
                width: 50%;
                border: 2px solid #000;
            }

            table tr:nth-child(odd) {
                background-color: rgb(255, 255, 255);
                color:rgb(0, 0, 0);
            }

            table tr:nth-child(1) {
                background-color: #000;
                color:cornsilk;
            }

            #total {
                width: 100%;
                display: grid;
                text-align: right;
            }

            .footer {
                width: 100%;
                height: 60px;
                background-color: #000;
                display: grid;
                place-items: center;
            }

            #mytxt {
                display: none;
            }

            #colorPallete {
                overflow: hidden;
                display: none;
            }

            .footer p {
                color: #fff;
            }
            #drag-1{
                width: 50%;
                min-height: auto;
                margin: 1rem 0 0 1rem;
                color: black;
                border-radius: 0.75em;
                padding: 2%;
                display: grid;
                place-items: center;
                touch-action: none;
                user-select: none;
                background-size: cover;
                background-position: center;
                transform: translate(48.1016px, 62.2148px);
                }


            @media (max-width: 768px) {
                .mycanvas {
                display: grid;
                grid-template-columns: 1fr;
                padding: 0;
            }

            
            #editbtns {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
                width: 100%;
                padding: 5%;
                
            }
		 }
        </style>
  </head>
  <body>
  <?php include('headsgubu.php'); ?>
    <div class="container main">
         <div id="download">
            <a href="javascript:void(0)" id="dwnl" onclick="createPDF()">Download <i class="fa fa-download" style="font-size:20px; color: #ffffff;"></i></a>
         </div>
      <div class="mycanvas">
            <div class="the_canvas">
                <p id="drag-1" class="draggable">  You can drag one element </p>
            </div>
            <div id="editbtns">
                <textarea id="mytxt"></textarea>
                <input id="inputFile" type="file" style="display: none;">
                <div class="color-picker"></div>
                <a href="javascript:void(0)" id="fontsbtn"><i class="fa fa-font" style="font-size:25px; color: #ffffff;"></i></a>
                <a href="javascript:void(0)" onclick="changeColor(1)"><i class="fas fa-fill-drip" style="font-size:25px; color: #ffffff;"></i></a>
                <a href="javascript:void(0)" onclick="changeColor(2)"><i class="fa fa-tint" style="font-size:25px; color: #ffffff;"></i></a>
                <a href="javascript:void(0)" id="theimage"><i class="fa fa-image" style="font-size:25px; color: #ffffff;"></i></a>
                <a href="javascript:void(0)" onclick="changeFontSize()"><i class="fa fa-text-height" style="font-size:25px; color: #ffffff;"></i></a>
            </div>
      </div>
    </div>

      <?php include('bottom.php'); ?>  
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
        <script>
            var open_text_box = false,
            ibox = document.querySelector('#drag-1'),
            fontsbtn = document.getElementById("fontsbtn"),
            the_canvas = document.querySelector(".the_canvas"),
            openPallette = document.getElementById("openPallette"),
            txt_area = document.getElementById("mytxt"),
            inputFile = document.getElementById("inputFile"),
            mylogo = document.getElementById("theimage"),
            colrs = ["#32a852", "#f5e7c1", "#a3d633", "#29e", "#6d22ee", "#c0a6ed", "#a6edeb"],
            font_array = ["Times","airstrike", "Mostwasted", "cambria", "pacifico", "SF-Pro-Display-Thin", "SF-Pro-Display-Regular", "BEYNO", "Blanka", "True Lies", "Phosphate", "Olde English Regular, Ailerons"],
            font_size = ["smaller", "medium", "larger", "xx-large", "xxx-large", "60px"],
            fs = 0,
            igama = "Why Not",
            num = 0;
            font_num = 0;
            the_canvas.style.backgroundColor = "#e2fffe";

            function changeFontSize() {
               ibox.style.fontSize = font_size[fs];
               if(fs < font_size.length - 1) {
                   fs++;
               } else {
                   fs = 0;
               }
            }


            // Function to change the logo
      mylogo.addEventListener("click", () => {
        inputFile.click();
        console.log("Double click happened");
      })
      // Function to change the logo
      inputFile.onchange = () => {
        console.log("change image");
        var myfile = inputFile.files[0];
        var reader = new FileReader();
        reader.onloadend = () => {
          the_canvas.style.backgroundImage = "url("+reader.result+")";
        }
        if (myfile) {
          reader.readAsDataURL(myfile);
  }
      }

            txt_area.addEventListener("keyup", (e) => {
                console.log(txt_area.value.charAt(txt_area.value.length-1));
                // igama = txt_area.value;
                if(txt_area.value.charAt(txt_area.value.length-1) == '\n') {
                    igama += `<br>`;
                    txt_area.value += '<br>';
                    console.log("new line detected");
                } else {
                    igama = txt_area.value;
                }
                ibox.innerHTML = igama;
                
            })

            if(window.innerWidth > 640) {
                ibox.innerHTML = "Double tap text to edit";
                ibox.addEventListener("dblclick", () => {
                txt_area.style.display = "block";
                txt_area.value = igama;
                document.querySelector("#drag-1").textContent = igama;
                openTextBox();
                });
            } else {
                ibox.innerHTML = "Tap text to edit";
                ibox.addEventListener("click", () => {
                txt_area.style.display = "block";
                txt_area.value = igama;
                document.querySelector("#drag-1").textContent = igama;
                openTextBox();
                });
            }

            function openTextBox() {
  txt_area.classList.toggle("active");
}

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

            fontsbtn.addEventListener("click", () => {
                if(font_num >= font_array.length -1) {
                    font_num = 0;
                } else {
                    font_num++;
                }
                ibox.style.fontFamily = font_array[font_num];
               
            })

            // openPallette.addEventListener("click", () => {
            //     colorPallette.style.display = "block";
            // })


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
      the_canvas.style.backgroundColor = color;
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
  .resizable({
    // resize from all edges and corners
    edges: { left: true, right: true, bottom: true, top: true },

    listeners: {
      move (event) {
        var target = event.target
        var x = (parseFloat(target.getAttribute('data-x')) || 48.1016)
        var y = (parseFloat(target.getAttribute('data-y')) || 62.2148)

        // update the element's style
        target.style.width = event.rect.width + 'px'
        target.style.height = event.rect.height + 'px'

        // translate when resizing from top or left edges
        x += event.deltaRect.left
        y += event.deltaRect.top

        target.style.transform = 'translate(' + x + 'px,' + y + 'px)'

        target.setAttribute('data-x', x)
        target.setAttribute('data-y', y)
        var textEl = event.target.querySelector('p')

        // textEl && (textEl.textContent =
        //   'moved a distance of ' +
        //   (Math.sqrt(Math.pow(event.pageX - event.x0, 2) +
        //              Math.pow(event.pageY - event.y0, 2) | 0))
        //     .toFixed(2) + 'px')
        textEl && (textEl.textContent = igama)
      }
    },
    modifiers: [
      // keep the edges inside the parent
      interact.modifiers.restrictEdges({
        outer: 'parent'
      }),

      // minimum size
      interact.modifiers.restrictSize({
        min: { width: 100, height: 50 }
      })
    ],

    inertia: true
  })
  .draggable({
    listeners: { move: window.dragMoveListener },
    inertia: true,
    modifiers: [
      interact.modifiers.restrictRect({
        restriction: 'parent',
        endOnly: true
      })
    ]
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
        </script>
        <script>
            function createPDF() {
                if(window.innerWidth < 640) {
                    the_canvas.style.width = "600px";
                    the_canvas.style.height = "600px";
                    ibox.style.fontSize = font_size[fs];
                }
                document.querySelector('#dwnl').innerHTML = "Downloading...";
  domtoimage.toPng(document.querySelector('.the_canvas'), { quality: 0.98 })
    .then(function (dataUrl) {
        var link = document.createElement('a');
        link.download = 'quote.ong';
        link.href = dataUrl;
        link.click();
        location.reload();
    });

}
        </script>
  </body>
</html>