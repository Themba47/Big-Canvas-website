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
<script data-ad-client="ca-pub-2085627779889164" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Create your own business card with our easy to use business card builder, create and download your business card for free.">
  <meta name="keywords" content="business card, create, free">
  <meta name="theme-color" content="#111f3b"/>
    <title>Business card 3</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/>
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

      #business-card {
        background-color: #32a852;
        /* width: 340px 90mm; */
        /* height: 192px 50mm; */
        width: 680px;
        height: 384px;
        display: grid;
        grid-template-columns: 55% 45%;
      }

      #business-card-txt {
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
      }

      .inputbox {
        margin: 1%;
        padding: 2%;
        display: none;
      }

      .bttn {
        margin: 1%;
        padding: 5px;
      } 

      label {
        color: #fff;
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
        width: 100%;
      }

      #instructions {
        border: 3px solid #fff;
        color: #fff;
        width: fit-content;
        padding: 2%;
        margin: 2%;
      }

      @media (max-width: 768px) {
        .main {
        grid-template-columns: 1fr;
         place-items: center;
      }

        #business-card {
            width: 100vw;
            height: 30vh;
        }
        h2 {
        font-size: 4vw;
      }
      h3 {
        font-size: 3vw;
      }

      p {
        margin: 0;
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
    <div class="container main">
      <div id="business-card">
        <div id="business-card-txt">
          <div class="text_container">
            <h2 class="txt" onclick="openTxtbox(0)">Name Surname</h2>
            <h3 class="txt" onclick="openTxtbox(1)">Position</h3><br>
            <div class="txt_p">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="#fff" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3.445 17.827c-3.684 1.684-9.401-9.43-5.8-11.308l1.053-.519 1.746 3.409-1.042.513c-1.095.587 1.185 5.04 2.305 4.497l1.032-.505 1.76 3.397-1.054.516z"/></svg>
              <p class="txt" onclick="openTxtbox(2)">O73 101 2345</p>
            </div>
            <div class="txt_p">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="#fff" d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z"/></svg>
              <p class="txt" onclick="openTxtbox(3)">Email@bigcanvas.com</p>
            </div>
            <div class="txt_p">
              <p class="txt" onclick="openTxtbox(4)">Website</p>
            </div>
            <div class="txt_p">
              <p class="txt" onclick="openTxtbox(5)">@Social Media handle</p>
            </div>
          </div>
        </div>
        <div id="business-card-logo">
          <img src="../img/thebc2.png" id="mylogo" alt="">
        </div>
      </div>

      <div id="business-card-btns">
        <input id="inputFile" type="file" style="display: none;">
        <div id="myinputs"></div>
        <div id="instructions">
          <p><strong>Instructions</strong></p><br>
          <p>Tap logo to change logo</p>
          <p>Tap Text to edit</p>
        </div> 

        <button id="addmore" class="bttn">ADD FIELD</button><br>
        <button onclick="changeColor()" class="bttn">background</button>
        <button onclick="changeFontColor()" class="bttn">font</button>
        <div class="color-picker"></div>
        <?php 
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
									echo "<button onclick='redirectToLogin(\"Login to download\")' class='bttn'>Download</button>"; 
							}else {
								echo "<button onclick='createPDF()' class='bttn'>Download</button>";
							};
							?>
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
function changeColor() {
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
   bcl.style.backgroundColor = color;
})
.on("save", (color, instance) => {})
    .on("hide", (instance) => {
      document
        .querySelector(".pickr")
        .setAttribute("id", "colour");
      document.querySelector("#colour").className = "color-picker";
    });
}

function changeFontColor() {
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
  txt.forEach(element => {
            element.style.color = color;
          });
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
          document.querySelector(".text_container").innerHTML += `<div class="txt_p"><p class="txt" onclick="openTxtbox(${num})">MORE DETAILS</p></div>`;
            myin.innerHTML += `<input class="inputbox" onfocus="inputfunction(${num})" onblur="hideInput(${num})" type="text"/><br>`;
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
        if( window.innerWidth < 640) {
          con.style.overflow = "hidden";
          bcl.style.width = "640px";
          bcl.style.height = "384px";
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