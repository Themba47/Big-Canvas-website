var cStream,
  aStream,
  vid,
  recorder,
  analyser,
  dataArray,
  bufferLength,
  sixty = 60,
  hour = 0,
  min = 0,
  secs = 0,
  theTrack = [],
  chunks = [];
var user = detect.parse(navigator.userAgent);

const qalaRecording = document.getElementById("qalaRecording");
const download_duration = document.getElementById("download_duration");
const d_d = document.getElementById("d_d");
const record_clock = document.getElementById("record_clock");
const linkbtn = document.getElementById("thelink");
const fileupload = document.getElementById("trackupload");
const visual_edit = document.getElementById("visual_edit");

// This function records the canvas and adds the Audio
function clickHandler() {
  qalaRecording.style.display = "none";
  rec.style.display = "block";
  rec.innerHTML =
    '<img class="pallette_icons" src="../img/media-control.svg" alt="">';
  cStream = canvas.captureStream(30);
  cStream.addTrack(aStream.getAudioTracks()[0]);

  if (user.browser.family != "Chrome" || user.browser.family != "Opera") {
    console.log(user.browser.family);
    try {
      recorder = new MediaRecorder(cStream, {
        mimeType: "video/webm",
      });
    } catch (err1) {
      try {
        // Fallback for iOS
        console.log(user.browser.family);
        recorder = new MediaRecorder(cStream, {
          mimeType: "video/mp4",
        });
      } catch (err2) {
        // If fallback doesn't work either. Log / process errors.
        console.error({ err1 });
        console.error({ err2 });
      }
    }
  } else {
    console.log(user.browser.family);
    try {
      recorder = new MediaRecorder(cStream, {
        mimeType: "video/webm; codecs=vp8",
      });
    } catch (err1) {
      console.error({ err1 });
    }
  }
  recorder.start();

  recorder.ondataavailable = saveChunks;

  recorder.onstop = exportStream;
  rec.onclick = stopRecording;
}

// *************************************************************************

function exportStream(e) {
  if (chunks.length) {
    var blob = new Blob(chunks, { type: "video/webm; codecs=vp8" });

    if (user.browser.family != "Safari") {
      getSeekableBlob(blob, function (seekableBlob) {
        // invokeSaveAsDialog(seekableBlob);
        var vidURL = URL.createObjectURL(seekableBlob);
        var vid = document.createElement("video");
        vid.controls = true;
        vid.src = vidURL;
        linkbtn.style.display = "block";
        linkbtn.innerHTML =
          '<img class="pallette_icons" src="../img/download-icon.svg" alt="">';
        linkbtn.setAttribute("class", "pallette_btns action_btns");
        linkbtn.href = vidURL;
        createForm(blob, document.forms["downloadform"]["userid"].value);
        vid.onend = () => {
          URL.revokeObjectURL(vidURL);
        };
        visual_edit.appendChild(vid);
        displayText("Download is ready");
      });
    } else {
      var vidURL = URL.createObjectURL(blob);

      var vid = document.createElement("video");
      vid.controls = true;
      vid.src = vidURL;
      linkbtn.style.display = "block";
      linkbtn.innerHTML =
        '<img class="pallette_icons" src="../img/download-icon.svg" alt="">';
      linkbtn.setAttribute("class", "pallette_btns action_btns");
      linkbtn.href = vidURL;
      createForm(blob, document.forms["downloadform"]["userid"].value);
      vid.onend = () => {
        URL.revokeObjectURL(vidURL);
      };
      visual_edit.appendChild(vid);
      displayText("Download is ready");
    }
  } else {
    visual_edit.appendChild(document.createTextNode("No data available!!!"));
  }
}

function createForm(b, userid) {
  var formData = new FormData();
  var d = new Date();
  var newfilename =
    d.getFullYear().toString() +
    d.getMonth().toString() +
    d.getDay().toString() +
    userid +
    d.getTime().toString() +
    ".mp4";
  formData.append("dali", b, newfilename);
  document.forms["downloadform"]["link"].value = newfilename;
  document.forms["downloadform"]["canvas_type"].value = canvas_type;
  console.log(newfilename);

  fetch("../upload.php", {
    method: "post",
    body: formData,
  }).catch(console.error);
}

linkbtn.addEventListener("click", () => {
  console.log("Downloading...");
  console.log(navigator.userAgent);
  if (user.browser.family == "Safari") {
    console.log(user.browser.family);
    setTimeout(() => {
      document.forms.downloadform.submit();
    }, 10);
  } else {
    console.log("Not Safari!!!!!!");
    document.forms.downloadform.submit();
  }
});

// *************************************************************************

function saveChunks(e) {
  e.data.size && chunks.push(e.data);
}

// *************************************************************************

function stopRecording() {
  vid.pause();
  try {
    rec.parentNode.removeChild(rec);
    if (canvas_type == 6) {
      clearInterval(canvas6time);
    }
  } catch (error) {}
  audio1.pause();
  recorder.stop();
}

// *************************************************************************

function initAudioStream(evt) {
  const audio1 = document.getElementById("audio1");
  var AudioContext = window.AudioContext || window.webkitAudioContext;
  var audioCtx = new AudioContext();
  audio1.src = URL.createObjectURL(theTrack);

  let dest = audioCtx.createMediaStreamDestination();
  aStream = dest.stream;

  let sourceNode = audioCtx.createMediaElementSource(audio1);
  sourceNode.connect(dest);

  audio1.play();
  audio1.addEventListener("timeupdate", audioTimer);

  analyser = audioCtx.createAnalyser();
  sourceNode.connect(analyser);

  switch (canvas_type) {
    case 1: {
      analyser.fftsize = 2048;
      break;
    }
    case 2: {
      analyser.fftsize = 1024;
      break;
    }
    default: {
      analyser.fftsize = 2048;
    }
  }

  bufferLength = analyser.frequencyBinCount;
  dataArray = new Uint8Array(bufferLength);
  analyser.getByteTimeDomainData(dataArray);

  sourceNode.connect(audioCtx.destination);

  startCanvasAnim(
    soul.background_color[1],
    soul.text_color[1],
    soul.graphic_color[1],
    b_i
  );
  clickHandler();
  rec.disabled = false;
}

var loadVideo = function () {
  vid = document.createElement("video");
  vid.crossOrigin = "anonymous";
  initAudioStream();
  vid.src = "../img/anything.mp4";
};

// This function displays the percentage of the recording and the duration of the song
function audioTimer() {
  var record_percentage = parseInt(
    (audio1.currentTime / audio1.duration) * 100
  );
  download_duration.innerHTML = record_percentage + "%";
  record_clock.style.backgroundImage =
    "linear-gradient(transparent " + (100 - record_percentage) + "%, #fff 0%)";

  if (record_percentage == 100) {
    console.log(`Song is done recording!!!`);
    stopRecording();
  }

  var date = new Date(0);
  date.setSeconds(audio1.duration); // specify value for SECONDS here
  try {
    var timeString = date.toISOString().substr(11, 8);
  } catch (error) {
    console.log(error);
  }

  var ct = new Date(0);
  ct.setSeconds(audio1.currentTime); // specify value for SECONDS here
  try {
    var currenttimeString = ct.toISOString().substr(11, 8);
  } catch (error) {
    console.log(error);
  }

  d_d.innerHTML = currenttimeString + " / " + timeString;
}

// *************************************************************************

// ************************************************************************

fileupload.addEventListener("change", (e) => {
  const files = fileupload.files;
  if (files.length != 0) {
    theTrack = files[0];
    qalaRecording.style.display = "block";
    document.getElementById("uploadbtn").style.display = "none";
    displayText(theTrack.name);
  }
});

qalaRecording.addEventListener("click", () => {
  document.getElementById("timeDisplay").style.opacity = "1";
  loadVideo();
});

//The green box with text that will show when called
function displayText(txt) {
  document.getElementById("trackname").innerHTML = txt;
  document.getElementById("trackname").style.width = "auto";
  document.getElementById("trackname").style.opacity = "1";

  setTimeout(() => {
    document.getElementById("trackname").style.opacity = "0";
  }, 1500);
}

// ****************************************************************************

// the parameters meaning
// bc = background color
// tc = text color
// gc = graphic color
// stombe = uploaded image
