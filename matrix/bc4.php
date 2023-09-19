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

    <style>
      body {
        font-family: "Arial", sans-serif;
      }

      nav {
        display: inline;
      }

      .main {
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

      #business-card {
        background-color: #32a852;
        /* width: 340px 90mm; */
        /* height: 192px 50mm; */
        width: 384px;
        height: 680px;
        display: grid;
        background-image: linear-gradient(transparent, #000 65%);
        grid-template-rows: 50% 50%;
        grid-template-areas: "row-1" "row-2"; 

      }

      #business-card-txt {
        display: grid;
        place-items: center;
        padding: 5%;
        border-top-right-radius: 150px;
        border-bottom-right-radius: 150px;
        color: #fff;
        grid-area: row-2;
      }

      .text_container {
        width: 95%;
      }

    

      h2, h3 {
        text-align: center;
        margin: 0;
      }
      h2 {
        font-size: 30px;
      }
      h3 {
        font-size: 20px;
      }

      p {
        margin: 0;
        font-size: 15px;
        width: 300px;
        text-align: center;
      }

      .inputbox {
        margin: 1%;
        padding: 2%;
        display: none;
      }

      .bttn {
        margin: 1%;
        padding: 5px;
        display: grid;
        place-items: center;
        text-decoration: none;
      } 

      label {
        color: #fff;
      }

      .txt_p {
        display: grid;
       
        margin-bottom: 4%;
      }

      #business-card-logo {
        display: grid;
        place-items: center;
        overflow: hidden;
        grid-area: row-1;
      }

      #mylogo {
        width: 75%;
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
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr;
        place-items: center;
      }

        #business-card {
            width: 80vw;
            height: 70vh;
        }

        #business-card-btns {
        position: fixed;
        width: 90%;
        z-index: 1;
        bottom: 0;
        padding: 5%;
        background-color: #1e1f31;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
      }

        h2 {
        font-size: 4vw;
      }
      h3 {
        font-size: 3vw;
      }

      p {
        margin: 0;
        width: 100%;
        font-size: 2vw;
      }
      .text_container {
        width: 40vw;
      }
      svg {
        display: none;
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
        <a href="javascript:void(0)" onclick="createPDF()">Download <i class="fa fa-download" style="font-size:20px; color: #ffffff;"></i></a>
    </div>
    <div class="container main">
       
      <div id="business-card">
        <div id="business-card-txt">
          <div class="text_container">
            <h2 contenteditable="true" class="txt">Name Surname</h2>
            <h3 contenteditable="true" class="txt">Position</h3><br>
            <div class="txt_p">
              <p contenteditable="true" class="txt">O73 101 2345</p>
            </div>
            <div class="txt_p">
              <p contenteditable="true" class="txt">Email@bigcanvas.com</p>
            </div>
            <div class="txt_p">
              <p contenteditable="true" class="txt">Website</p>
            </div>
            <div class="txt_p">
              <p contenteditable="true" class="txt">@Social Media handle</p>
            </div>
          </div>
        </div>
        <div id="business-card-logo">
          <img src="../img/thebc2.png" id="mylogo" alt="">
        </div>
      </div>
      <div id="myinputs"></div>
      <div id="business-card-btns">
        
        <a href="javascript:void(0)" id="addmore" class="bttn"><i class="fas fa-layer-group" style="font-size:25px; color: #ffffff;"></i></a>
        <a href="javascript:void(0)" onclick="changeColor(1)" class="bttn"><i class="fas fa-fill-drip" style="font-size:25px; color: #ffffff;"></i></a>
        <a href="javascript:void(0)" onclick="changeColor(2)" class="bttn"><i class="fas fa-fill-drip" style="font-size:25px; color: #ffffff;"></i></a>
        <a href="javascript:void(0)" onclick="changeColor(3)" class="bttn"><i class="fas fa-paint-brush" style="font-size:25px; color: #ffffff;"></i></a>
        <div class="color-picker"></div>
        <input id="inputFile" type="file" style="display: none;">
        
      </div>
      
    </div>

    <?php include('bottom.php'); ?> 

      
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
    <script>
      var txt = document.querySelectorAll(".txt"),
      bcl = document.getElementById("business-card"),
      con = document.querySelector(".container"),
      add_more = document.getElementById("addmore");
      mylogo = document.getElementById("mylogo"),
      inputFile = document.getElementById("inputFile"),
      inputColor = document.getElementById("inputColor"),
      myin = document.getElementById("myinputs"),
      cloth = document.getElementById("download_cloth"),
      x = '', num = 0;
      
      // Changes background color 
      bcl.addEventListener("dblclick", () => {
        console.log("background clicked");
        changeColor();
      })

      // con.addEventListener("click", (e) => {
      //   console.log(e.target.innerHTML);
      //   console.log(txt[0].innerHTML);
      
      // })


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
          mylogo.src = reader.result;
        }
        if (myfile) {
          reader.readAsDataURL(myfile);
  }
      }



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
          break;
      case 2:
        bcl.style.backgroundImage = "linear-gradient(transparent 40%, "+color+")";
          break;
      case 3:
        var c = document.querySelectorAll('.txt');
        c.forEach(element => {
        element.style.color = color;
        });
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

      
      
      createInputFields();
      console.log(txt.length);

      // creates the input fields
      function createInputFields() {
        txt.forEach(element => {
        x += `<input class="inputbox" onfocus="inputfunction(${num})" onblur="hideInput(${num})" placeholder="${txt[num].innerHTML}" type="text"/>`;
        console.log(`--------------${num}`);
        num++;
      });
      myin.innerHTML = x;
      }
      // gets all the input fields
      var ibox = document.querySelectorAll(".inputbox");

      function inputfunction(ev) {
        ibox[ev].addEventListener("keyup", () => {
          console.log(ibox[ev].value);
          if(ibox[ev].value.length < 25) {
            txt[ev].innerHTML = ibox[ev].value;
          }
          if(ev == 0 && ibox[ev].value.length > 20 ) {
              if(window.innerWidth > 640) {
                txt[ev].style.fontSize = "20px";
              txt[ev + 1].style.fontSize = "15px";
              } else {
              txt[ev].style.fontSize = "3w";
              txt[ev + 1].style.fontSize = "2vw";
              }
            }
          
        })
      }


      function openTxtbox(e) {
        console.log(e);
        ibox[e].style.display = "block";
      }

      function hideInput(e) {
        ibox[e].style.display = "none";
      }

      // Adds more text fields and input field
      add_more.addEventListener("click", () => {
        if(num < 9) {
          document.querySelector(".text_container").innerHTML += `<div class="txt_p"><p class="txt" contenteditable="true">MORE DETAILS</p></div>`;
            num++;
            txt = document.querySelectorAll(".txt");
            ibox = document.querySelectorAll(".inputbox");
            console.log(txt.length);
           
        }
      })

      function redirectToLogin(msg) {
        var link = document.createElement('a');
              link.href = '../login.php?msg='+msg;
              link.click();
      }

      // This function is used to download the image
      function createPDF() {
        document.querySelector("#download a").innerHTML = "Downloading...";
        document.querySelector("#download a").style.backgroundColor = "#267be3";
        document.querySelector("#download a").style.color = "#fff";
        if( window.innerWidth < 640) {
          bcl.style.overflow = "hidden";
          bcl.style.width = "384px";
          bcl.style.height = "640px";
          cloth.style.display = "grid";
          document.querySelector('.text_container').style.width = "95%";
          var c = document.querySelectorAll('#business-card p');

          c.forEach(element => {
            element.style.fontSize = "15px";
          });

          if(ibox[0].value.length > 20) {
            txt[0].style.fontSize = "20px";
            txt[1].style.fontSize = "15px";
          } else {
            txt[0].style.fontSize = "30px";
            txt[1].style.fontSize = "20px";
          }


          domtoimage.toPng(document.querySelector('#business-card'), { quality: 0.98 })
          .then(function (dataUrl) {
              var link = document.createElement('a');
              link.download = 'business-card.png';
              link.href = dataUrl;
              console.log(dataUrl);
              link.click();
              location.reload();
        });
        } else {
          domtoimage.toPng(document.querySelector('#business-card'), { quality: 0.98 })
          .then(function (dataUrl) {
              var link = document.createElement('a');
              link.download = 'business-card.png';
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