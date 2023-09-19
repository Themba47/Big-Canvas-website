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
    <title>Create Your Email Newsletter | Johannesburg</title>
    <meta name="description" content="Create a quick email newsletter and send it to all your customers provided by Big Canvas Johannesburg.">
  <meta name="keywords" content="email, newsletter, Johannesburg">
   <meta property="og:title" content="Create a quick email newsletter">
  <meta property="og:image" content="https://www.bigcanvas.co.za/img/banner.jpg">
  <meta property="og:url" content="https://www.bigcanvas.co.za/">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#111f3b"/>
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
        padding: 5% 0;
        display: grid;
        grid-template-columns: 80% 20%;
        height: 100vh;
      }

      #download {
            padding: 2%;
        text-align: right;
        width: 100%;
        background-color: #1e1f31;
            }

            #download a {
                padding: 1%;
                text-decoration: none;
                margin: 5%;
                color: #fff;
                background-color: #1caf1c;
                border-radius: 8px;
            }

            #download a:active {
              opacity: 0.5;
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
        background-size: cover;
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

      #business-card-btns {
          padding: 0 10%;
      }

      .text_container {
        width: 95%;
      }

      .bttn {
        margin: 1%;
        padding: 10px;
        background-color: transparent;
        border: 1px solid #fff;
        display: grid;
        place-items: center;
        color: #fff;
        place-items: center;
        border-radius: 50px;
        width: max-content;
        text-decoration: none;
      } 

      .bttn i {
        font-size:25px; 
        color: #ffffff;
        text-align: center;
      }

      .btn-section {
        overflow: hidden;
        transition: all 0.5s ease-out;
        height: 0;
      }

      .active_div {
        height: max-content;
      }

      .btn-anchor {
          display: grid;
          place-items: center;
          padding: 5%;
          color: #fff;
          text-decoration: none;
      }

      .text-tab {
          display: grid;
          place-items: center;
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
      }

      .txt-color {
        padding: 1%;
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
        grid-template-rows: 80% 1fr;
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
        
      }

      .btn-div {
          display: grid;
          place-items: center;
      }

      .bttn {
          width: 15px;
          height: 15px;
          display: grid;
          place-items: center;
          margin-bottom: 12%;
      }

      .bttn i {
          font-size: 15px;
          padding-bottom: 10px;
          mix-blend-mode: difference;
      }

      .bttn p {
        mix-blend-mode: difference;
      }

      .btn-section {
        display: grid;
        place-items: center;
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
  <div id="die-kop"><?php include('headsgubu.php'); ?></div>
        <div id="download_cloth">
          <h2>Downloading...</h2>
        </div>
        <div id="download">
            <a href="javascript:void(0)" onclick="vulaLinks(1)">Share Page <i class="fa fa-link" style="font-size:14px; color: #ffffff;"></i></a>
            <a href="javascript:void(0)" id="downloadbtn" onclick="vulaLinks(2)">Send Newsletter <i class="fas fa-share" style="font-size:14px; color: #ffffff;"></i></a>
            <div id="links">
                <a href="https://www.facebook.com/sharer.php?u=https://bit.ly/4aCanV5"><i class="fab fa-facebook" style="font-size:20px; color: #ffffff;"></i></a>
                <a href="https://twitter.com/share?url=https://bit.ly/4aCanV5"><i class="fab fa-twitter" style="font-size:20px; color: #ffffff;"></i></a>
            </div>
        </div>
        <?php include('emailpopup.php'); ?>
    <div class="container main">
    <div class="container" id="main" style="background-color: rgb(255, 255, 255);padding: 5% 0; border-radius: 15px; max-width: 600px;margin: auto;">
          <div id="newsletter" style="background-color: aliceblue;margin: 5%;">
 
            <table class="title" style="border-collapse: collapse;width: 100%;">
                    <colgroup>
                        <col span="1" style="width: 50%;">
                        <col span="1" style="width: 50%;">
                    </colgroup>
                <tr>
                    <th class="newsletter_logo second-color" style="margin: 5%;padding: 10%; float: left;"><img src="https://www.bigcanvas.co.za/img/thebclogo.png" class="mylogo" id="img-0" alt="" width="30%"></th>
                    <th class="second-color"><h3 contenteditable="true" style="text-align: left;" class="header-color">click on any text to edit, click on logo to change</h3></th>
                </tr>
            </table>

            <div class="body my-tag" style="padding: 5%;">
                <div id="msg">
                    <p contenteditable="true" class="txt-color">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque harum nobis ex pariatur expedita quisquam iusto suscipit eveniet laborum dolor, quae sit ipsa, ducimus, soluta perspiciatis deserunt dolorum similique sapiente.<br><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt consectetur corrupti, excepturi ducimus odit in aspernatur. Ipsam temporibus deleniti, illo natus soluta maxime, corrupti aut doloribus consectetur eveniet ratione ad?<br><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde perspiciatis quaerat voluptatem. Quasi quam neque unde commodi voluptates non adipisci sequi aperiam, at a deleniti velit provident incidunt? Accusantium, veniam.
                    </p><br><br>
                </div>      
            </div>
            
            <div class="footer second-color" style="background-color: rgb(198, 178, 223); width: 100%;
							text-align: center;">
				<p id="businessreg" contenteditable="true" class="header-color" style="color: #000; padding: 5%;">Big Canvas</p>
			</div>

          </div>  


        </div>
        

      <div id="business-card-btns">
      <textarea id="mytxt"></textarea>
      <input id="inputFile" type="file" accept=".png, .jpg" style="display: none;" multiple>

        <div class="btn-section">
          <div class="btn-div"><a href="javascript:void(0)" class="btn-anchor" onclick="changeColor(1)" title="background color"><i class="fas fa-fill-drip bttn"></i><p class="text-tab">Background</p></a></div>
          <div class="btn-div"><a href="javascript:void(0)" class="btn-anchor" onclick="changeColor(2)" title="font color"><i class="fas fa-text bttn"></i><p class="text-tab">Text</p></a></div>
          <div class="btn-div"><a href="javascript:void(0)" class="btn-anchor" onclick="removeElement()" title="font color"><i class="fas fa-times bttn"></i><p class="text-tab">Delete</p></a></div>
        </div>
      
        <div class="btn-section">
            <div class="btn-div"><a href="javascript:void(0)" class="btn-anchor sub-anchor" onclick="addElement('h1')" title="Title"><span class="bttn"><b>  H1  </b></span><p class="text-tab">Title</p></a></div>
            <div class="btn-div"><a href="javascript:void(0)" class="btn-anchor sub-anchor" onclick="addElement('h3')" title="Subtitle"><span class="bttn">  H3  </span><p class="text-tab">Sub title</p></a></div>
            <div class="btn-div"><a href="javascript:void(0)" class="btn-anchor sub-anchor" onclick="addElement('p')" title="Paragraph"><span class="bttn">  P  </span><p class="text-tab">Paragraph</p></a></div>
            <div class="btn-div"><a href="javascript:void(0)" class="btn-anchor sub-anchor" onclick="addElement('img')" title="Paragraph"><i class="far fa-image bttn"></i><p class="text-tab">Image</p></a></div>
        </div>

        <div class="btn-section">
            <div class="btn-div"><a href="javascript:void(0)" id="changeImgBtn" class="btn-anchor sub-anchor" title="Title"><i class="fas fa-upload bttn"></i><p class="text-tab">Change Image</p></a></div>
        </div>

        <div class="btn-div"><a href="javascript:void(0)" class="btn-anchor" onclick="addDiv()" title="add div"><i class="fas fa-edit bttn"></i><p class="text-tab">Add Element</p></a></div>

      <div class="color-picker"></div>
    </div>
      
    </div>

      <?php include('bottom.php'); ?> 
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      var ibox = document.querySelector(".txt"),
      cib = document.getElementById("changeImgBtn"),
      con = document.querySelector(".container"),
      newsletter = document.querySelector("#newsletter"),
      txt_area = document.getElementById("mytxt"),
      igama = "",
      myfile,
      add_more = document.getElementById("addmore");
      mylogo = document.querySelectorAll(".mylogo"),
      inputFile = document.getElementById("inputFile"),
      theFiles = new Map(),
      myin = document.getElementById("myinputs"),
      popupform = false,
      bttn = document.querySelectorAll(".bttn"),
      btn_anchor = document.querySelectorAll(".btn-anchor"),
      btn_section = document.querySelectorAll(".btn-section"),
      second_color = document.querySelectorAll(".second-color");
      header_color = document.querySelectorAll(".header-color");
      gradient_num = 0,
      cloth = document.getElementById("download_cloth"),
      x = '', num = 0, num_of_img = 1;

      bttn[0].style.backgroundColor = "rgb(136, 185, 208)";
      bttn[1].style.backgroundColor = "rgb(0, 0, 0)";

        document.getElementById("newsletter").addEventListener("mouseover", (e) => {
        e.target.style.border = "2px solid red";
      })

      document.getElementById("newsletter").addEventListener("mouseout", (e) => {
        e.target.style.removeProperty('border');
      })

      // ****************** Click Action ******************************
      newsletter.addEventListener("click", (e) => {
        let thebtn = document.querySelectorAll('.active_div');

        if(thebtn.length > 0) {
            thebtn.forEach(element => {
              thebtn[0].classList.remove('active_div');
            })
          }

          if(e.target.localName != "img") {
            let current = document.querySelectorAll('.active');
          
          if(current.length > 0) {
            current.forEach(element => {
              current[0].classList.remove('active');
            })
          }
          e.target.classList.add('active');
          bttn[0].style.backgroundColor = e.target.style.backgroundColor;
          bttn[1].style.backgroundColor = e.target.style.color;
          btn_section[0].classList.add('active_div');
          getElementCount(btn_section[0]);
        } else {
          let current = document.querySelectorAll('.active_img');
          if(current.length > 0) {
            current.forEach(element => {
              current[0].classList.remove('active_img');
            })
          }
          e.target.classList.add('active_img');
          btn_section[2].classList.add('active_div');
          getElementCount(btn_section[2]);
        }
      })


        if(window.innerWidth < 640) {
            // document.querySelector("#die-kop").style.display = "none";
            second_color.forEach(element => {
            element.style.cssText = "height: 30px; background-color: #FD9E6E; text-align: left;";
            }); 
            document.querySelector(".thetable").style.cssText = "border: 1px solid #000; font-size: 12px;";
        } else {
            second_color.forEach(element => {
            element.style.cssText = "height: 60px; background-color: #FD9E6E; text-align: left;";
            });
        }  
        document.querySelector(".footer").style.textAlign = "center";
        header_color.forEach(element => {
            element.style.color = "#101447";
            });

        
        function addElement(e) {
          let node = document.createElement(e);
          switch(e) {
            case 'h1':
              node.innerText = 'This is a Title';
              node.contentEditable = true;
              node.classList.add('txt-color');
              break;
            case 'h3':
              node.innerText = 'This is a subtitle';
              node.contentEditable = true;
              node.classList.add('txt-color');
              break;
            case 'p':
              node.innerText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque harum nobis ex pariatur expedita quisquam iusto suscipit eveniet laborum dolor, quae sit ipsa, ducimus, soluta perspiciatis deserunt dolorum similique sapiente.';
              node.contentEditable = true;
              node.classList.add('txt-color');
              break;
            case 'img':
              node.setAttribute('width', '30%');
              node.classList.add('mylogo');
              node.setAttribute('id', 'img-'+num_of_img);
              node.src = 'https://www.bigcanvas.co.za/img/thebclogo.png';
              num_of_img++;
            default:
              break;
          }
          document.querySelector('#msg').appendChild(node);
        }

        function addDiv() {
          let thebtn = document.querySelectorAll('.active_div');

        if(thebtn.length > 0) {
            thebtn.forEach(element => {
              thebtn[0].classList.remove('active_div');
            })
          }

          btn_section[1].classList.add('active_div');
          getElementCount(btn_section[1]);
        }

        function removeElement() {
          document.querySelector('.active').remove();
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
      
      
        function AddColumn() {
                document.querySelector(".thetable tbody").innerHTML += `<tr><td contenteditable="true">The invoice</td><td contenteditable="true">5</td contenteditable="true"><td contenteditable="true">100</td></tr>`;
           }


          // Function to change the logo
          cib.addEventListener("click", () => {
          inputFile.click();
        })
      // Function to change the logo
      inputFile.onchange = () => {

        myfile = inputFile.files[0];
        theFiles.set(document.querySelector('.active_img').id, myfile);
        var reader = new FileReader();
        reader.onloadend = () => {
          document.querySelector('.active_img').src = reader.result;
        }
        if (myfile) {
          reader.readAsDataURL(myfile);
         }
      }

      function createForm(theBlob) {
        if(theBlob.size > 0) {
        theBlob.forEach(async (value, key) => {
          var formData = new FormData();
          var d = new Date();
        newfilename =
          key + "-" +
          d.getFullYear().toString() +
          d.getMonth().toString() +
          d.getDay().toString() +
          d.getTime().toString() +
          ".png";
        formData.append("dali", value, newfilename);
          theFiles.set(key, newfilename);

        fetch("../upload_logos.php", {
          method: "post",
          body: formData,
        })
        
        .then(data => {
          document.getElementById(key).src = 'https://www.bigcanvas.co.za/images/' + theFiles.get(key);
        })
        .catch(console.error);
      })
        }
        document.querySelector("#msgsent").innerHTML = "Sending...";
        setTimeout(sendMyMail, 1000);
        }
        
        
async function sendMyMail() {
    var sendEmail = new FormData();
        var email = document.querySelector("#newsletter").outerHTML;
        sendEmail.append("newsletter", email);
        sendEmail.append("subject", document.querySelector("#form-subject").value);
        sendEmail.append("fromemail", document.querySelector("#form-from-email").value);
        email_array.forEach(element => {
          sendEmail.append("toemail", element);
        })
       await fetch("https://www.marketonweb.co.za/sendemail", {
          method: "post",
          mode: 'no-cors',
          body: sendEmail,
          headers: {"Content-type": "application/json; charset=UTF-8"}
        })
        .then(data => {
        document.querySelector("#msgsent").innerHTML = `Message sent to all emails you listed <br><a href="../../user.php">Get in touch <i class="fas fa-envelope"></i></a>`;
        document.querySelector("#msgsent").style.cssText = "color: #1caf1c; display: block;";
    })
    .catch(function(error) {                    
        console.log('Request failed', error);
      });
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
      document.querySelectorAll(".active").forEach(element => {
            element.style.backgroundColor = color;
          });
          bttn[0].style.backgroundColor = color;
          break;
      case 2:
        document.querySelectorAll(".active").forEach(element => {
            element.style.color = color;
        });
        bttn[1].style.backgroundColor = color;
          break;
      case 3:
        document.querySelector("#newsletter").style.backgroundColor = color;
        bttn[2].style.backgroundColor = color;
          break;
      case 4:
          document.querySelector(".thetable tr:nth-child(1)").style.backgroundColor = color;
          break;
      case 5:
        document.querySelectorAll(".header-color").forEach(element => {
            element.style.color = color;
        });
        bttn[3].style.backgroundColor = color;
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

      function getElementCount(e) {
        if(window.innerWidth < 640) {
          var numOfEl = document.querySelector('.active_div').childElementCount;
          var gridnum = '';
          console.log(numOfEl);
          for(let j = 0; j < numOfEl; j++) {
            gridnum += '1fr ';
          }
          e.style.gridTemplateColumns = gridnum;
        }
      }

      function redirectToLogin(msg) {
        var link = document.createElement('a');
              link.href = '../login.php?msg='+msg;
              link.click();
      }

      function vulaLinks(e) {
        if(e == 1) {
            document.getElementById('links').style.display = "block";
        }
        if(e == 2) {
            if(!popupform) {
                popupform = true;
                document.getElementById('popup').style.display = "grid";
            } else {
                popupform = false;
                document.getElementById('popup').style.display = "none";
            }
        }
    }

function PrintHTML() {
    if(myfile != undefined) {
        createForm(theFiles);
    } else {
        createForm();
    }
    
}


     
    </script>
  </body>
</html>