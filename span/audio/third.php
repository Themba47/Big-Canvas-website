<!DOCTYPE html>
<html>
<head>
	<title>experiment Xttp</title>
<link rel="stylesheet" type="text/css" href="css/book.css">
</head>
<body>
  <header>
    <div class="headkop">
      <div class="head-tings"><a href="list.php"><img id="logo" src="img/chevron-left-solid.svg" width="30" height="32"></a></div>
      <div class="head-tings"><h3>Funda Online</h3></div>
      <div class="head-tings"><a href="#" id="txt-display"><img id="fileOpen" src="img/file.svg" width="30" height="32"></a><a href="#" id="txt-display2"><img id="fileOpen" src="img/filered.svg" width="30" height="32"></a></div>
    </div>
  </header>

    <div class="main-shabang">

      <div class="grid">
        <div class="diecontent">
            <div class="bamba">
                    <img id="cover-book" src="img/atomichabits.jpg">
                    <h2 style="text-align: center;" id="name-of-book">Think and Grow Rich</h2>
                    <h3 style="text-align: center;" id="name-of-author">By Napolean Hill</h3>
                    <div id="panel" style="display: none; text-align: center;"></div><br>
                    <h4 id="gvee"></h4><br>
                    <p id="word"></p><br>
                    <p id="dieindex"></p><br>
                    <div id="reading-rate">
                        <h2><b><u>Select reading speed</u></b></h2>
                        <a href="#" id="rate-zero">Very slow reading speed</a>
                        <a href="#" id="rate-ofive">Slow reading speed</a>
                        <a href="#" id="rate-one">Normal</a>
                        <a href="#" id="rate-onefive">Fast reading speed</a>
                        <a href="#" id="rate-two">x2 reading speed</a>
                    </div>
            </div>
        </div>


    <div id="diebuttons">
      <div id="greyslider"><div id="theslider"></div></div>
      <div id="controla">
          <div>
              <a href="#" id="reading-speed"><img src="img/speed.svg" width="30" height="32" style=" -webkit-filter: drop-shadow(5px 7px 3.5px #747474);
              filter: drop-shadow(5px 7px 3.5px #747474);"></a>
          </div>
          <div>
            <a href="#" id="praat"><img src="img/play.svg" width="30" height="32" style=" -webkit-filter: drop-shadow(5px 7px 3.5px #747474);
              filter: drop-shadow(5px 7px 3.5px #747474);"></a>
                <a href="#" id="yeka"><img src="img/pause.svg" width="30" height="32" style=" -webkit-filter: drop-shadow(5px 7px 3.5px #747474);
              filter: drop-shadow(5px 7px 3.5px #747474);"></a>
                <a href="#" id="dlala"><img src="img/play.svg" width="30" height="32" style=" -webkit-filter: drop-shadow(5px 7px 3.5px #747474);
              filter: drop-shadow(5px 7px 3.5px #747474);"></a>
          </div>
          <div>
              <a href="#" id="stoep"><img src="img/square-solid.svg" width="30" height="32" style=" -webkit-filter: drop-shadow(5px 7px 3.5px #747474);
              filter: drop-shadow(5px 7px 3.5px #747474);"></a>
          </div>
      </div>
    </div><br><br>


<p id="theBox" style="display: none;"></p>

<div id="onLine-na"></div><br>


<script>

function speak () { window.speechSynthesis.speak(msg) }
function brick () { window.speechSynthesis.pause(msg) }
function dlalaFuthi () { window.speechSynthesis.resume(msg) }

var theBox = document.getElementById('theBox');
var xmlhttp = new XMLHttpRequest();
var url = 'json/thinkandgrowrich.txt';
var seekBar = document.getElementById("theslider");
var cyril = '';
var words = '';

xmlhttp.open("GET", url, true);
xmlhttp.onload = () => {
    cyril = xmlhttp.responseText;
    theBox.innerHTML = cyril;
	
	
var veza = document.getElementById('txt-display');
var vezaTwo = document.getElementById('txt-display2');
var coverBook = document.getElementById('cover-book');
var star = document.getElementById('praat');
var yeka = document.getElementById('yeka');
var dlala = document.getElementById('dlala');
var stoep = document.getElementById('stoep');
var rs = document.getElementById('reading-speed');
var checka = document.getElementById('onLine-na');
var hee = theBox.innerHTML;
var global_words = [];
var wordIndex = 0;

var msg = new SpeechSynthesisUtterance()
  var voices = window.speechSynthesis.getVoices()
  msg.voice = voices[7]
  msg.pitch = 1.6;
  msg.rate = 1;

var rateZero = document.getElementById('rate-zero');
var rateZerofive = document.getElementById('rate-onefive');
var rateOne = document.getElementById('rate-one');
var rateOnefive = document.getElementById('rate-onefive');
var rateTwo = document.getElementById('rate-two');
var rateList = document.getElementById('reading-rate');

rateZero.onclick = () => { msg.rate = 0; rateList.style.height = "0%";};
rateZerofive.onclick = () => { msg.rate = 0.5; rateList.style.height = "0%"; };
rateOne.onclick = () => { msg.rate = 1; rateList.style.height = "0%";};
rateOnefive.onclick = () => { msg.rate = 1.5; rateList.style.height = "0%";};
rateTwo.onclick = () => { msg.rate = 2; rateList.style.height = "0%";};
rs.onclick = () => { rateList.style.height = "100%";}


  var words = hee.split(' ');
  global_words = words;
  spokenTextArray = words;
  msg.text = hee;

//check if your online so you can update book list
if (navigator.onLine) {
  checka.innerHTML = '<h1 id="online-offline">Your Online</h1>';
}else {
  checka.innerHTML = '<h1 id="offline-online">Your Offline</h1>';
};

function speak () { window.speechSynthesis.speak(msg) }
function brick () { window.speechSynthesis.pause(msg) }
function dlalaFuthi () { window.speechSynthesis.resume(msg) }
function stoepAs () { window.speechSynthesis.cancel(msg) }

  veza.onclick = () => {
      coverBook.style.display = 'none';
      veza.style.display = 'none';
      vezaTwo.style.display = 'block';
      document.getElementById("word").style.display = 'block';
    }

    vezaTwo.onclick = () => {
      coverBook.style.display = 'block';
      veza.style.display = 'block';
      vezaTwo.style.display = 'none';
      document.getElementById("word").style.display = 'none';
    };

  star.onclick = () => {
    //haa.textContent = theTxt.value;
    speak();
    star.style.display = 'none';
    yeka.style.display = 'block';
    document.getElementById("panel").innerHTML = words.length;

    };


msg.onboundary = function(event){
    var e = hee;
    var word = getWordAt(e.value,event.charIndex);
    // Show Speaking word : x
    document.getElementById("word").innerHTML = word;
    //Increase index of span to highlight
    console.info(global_words[wordIndex]);
    howFar = wordIndex / words.length * 100;
    howFarInt = parseFloat(howFar).toFixed(2);
    document.getElementById("gvee").innerHTML = howFarInt + "%";

    spellWord = global_words[wordIndex];
    var writeWord = [];
    for(var j = 0; j < wordIndex; j++) {
      writeWord += global_words[j] +  " ";
      // if statement to remove previous 10 words
      /*if (j === 10) {
        global_words.splice(0, 10);
      }*/
    }

    document.getElementById("word").innerHTML = writeWord;


    seekBar.style.width = howFar + '%';


    // Play the video when the slider handle is dropped
    seekBar.addEventListener("mouseup", function() {
        return dlalaFuthi();
    });


    try{
        document.getElementById("word_span"+wordIndex).style.color = "red";
    }catch(e){}

    wordIndex++;
};



msg.onend = function(){
    document.getElementById("word").innerHTML = "";
    wordIndex = 0;
    document.getElementById("panel").innerHTML = "";
};

// Get the word of a string given the string and the index
function getWordAt(str, pos) {
    // Perform type conversions.
    str = String(str);
    pos = Number(pos) >>> 0;

    // Search for the word's beginning and end.
    var left = str.slice(0, pos + 1).search(/\S+$/),
        right = str.slice(pos).search(/\s/);

    // The last word in the string is a special case.
    if (right < 0) {
        return str.slice(left);
        
    }
    // Return the word, using the located bounds to extract it from the string.
    return str.slice(left, right + pos);
}


yeka.onclick = () => { brick(); star.style.display = 'none'; yeka.style.display = 'none'; dlala.style.display = 'block'  };
dlala.onclick = () => { dlalaFuthi(); star.style.display = 'none'; yeka.style.display = 'block'; dlala.style.display = 'none'};
stoep.onclick = () => { stoepAs(); star.style.display = 'block'; yeka.style.display = 'none'; dlala.style.display = 'none'};

   
};


xmlhttp.send();


</script>
</body>
</html>