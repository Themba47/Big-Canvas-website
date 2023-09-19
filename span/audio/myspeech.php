<!DOCTYPE html>
<html>
<head>
	<title>experiment Xttp</title>
<link rel="stylesheet" type="text/css" href="css/book.css">
</head>
<body>

    <div id="diebuttons">
        <a href="#" id="praat"><img src="img/play.svg" width="30" height="32" style=" -webkit-filter: drop-shadow(5px 7px 3.5px #747474);
          filter: drop-shadow(5px 7px 3.5px #747474);"></a>
            <a href="#" id="yeka"><img src="img/pause.svg" width="30" height="32" style=" -webkit-filter: drop-shadow(5px 7px 3.5px #747474);
          filter: drop-shadow(5px 7px 3.5px #747474);"></a>
            <a href="#" id="dlala"><img src="img/play.svg" width="30" height="32" style=" -webkit-filter: drop-shadow(5px 7px 3.5px #747474);
          filter: drop-shadow(5px 7px 3.5px #747474);"></a>
          <a href="#" id="stoep"><img src="img/square-solid.svg" width="30" height="32" style=" -webkit-filter: drop-shadow(5px 7px 3.5px #747474);
          filter: drop-shadow(5px 7px 3.5px #747474);"></a>
    </div><br><br>

    <input type="range" id="seek-bar" class="slider" min="1" max="100">



<p id="theBox" style="display: none;"></p>

<div id="panel"></div><br>
<div id="gvee"></div><br>

  <span style="display: none;" id="word"></span><br>

<script>

function speak () { window.speechSynthesis.speak(msg) }
function brick () { window.speechSynthesis.pause(msg) }
function dlalaFuthi () { window.speechSynthesis.resume(msg) }

var theBox = document.getElementById('theBox');
var xmlhttp = new XMLHttpRequest();
var url = 'json/thinkandgrowrich.txt';
var seekBar = document.getElementById("seek-bar");
var cyril = '';
var words = '';

xmlhttp.open("GET", url, true);
xmlhttp.onload = () => {
    cyril = xmlhttp.responseText;
    theBox.innerHTML = cyril;
	
	

var star = document.getElementById('praat');
var yeka = document.getElementById('yeka');
var dlala = document.getElementById('dlala');
var stoep = document.getElementById('stoep');
var hee = theBox.outerHTML;
var global_words = [];
var wordIndex = 0;

var msg = new SpeechSynthesisUtterance()
  var voices = window.speechSynthesis.getVoices()
  msg.voice = voices[7]
  msg.pitch = 1.6;
  msg.rate = 1;

  var words = hee.split(" ");
  global_words = words;
  spokenTextArray = words;
  msg.text = hee;

function speak () { window.speechSynthesis.speak(msg) }
function brick () { window.speechSynthesis.pause(msg) }
function dlalaFuthi () { window.speechSynthesis.resume(msg) }
function stoepAs () { window.speechSynthesis.cancel(msg) }

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
    document.getElementById("gvee").innerHTML = wordIndex / words.length * 100;
    howFar = wordIndex / words.length * 100;

    seekBar.value = howFar;

    seekBar.addEventListener("mousedown", function() {
        return brick();
    });

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