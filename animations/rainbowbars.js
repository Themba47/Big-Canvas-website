// Author: Themba Sishuba
// Canvas 1 finished on the 15th of August 2021
var canvasCtx = canvas.getContext("2d");

function setCanvasSize() {
  // Set canvas size
  if (window.innerWidth >= 640) {
    canvas.width = 1920;
    canvas.height = 1080;
    canvas_textfontSize = 300;
  } else {
    canvas.width = 854;
    canvas.height = 480;
    canvas_textfontSize = 40;
    canvas_lineWidth = 2;
  }
}

function callCanvasOnce(w, b, t, g, i) {
  //CANVAS_TYPE...
  canvas_type = 7;
  var canvasCtx = canvas.getContext("2d");

  canvasCtx.fillStyle = b;
  canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

  if (i != null) {
    displayBackgroundImg(canvasCtx, i);
  }

  canvasCtx.fillStyle = t;
  canvasCtx.font = canvas_textfontSize + "px Ailerons-Regular";
  canvasCtx.textAlign = "center";
  canvasCtx.fillText(w, canvas.width / 2, canvas.height / 3);
  watermark(canvasCtx);
}

function startCanvasAnim(bc, tc, gc, img) {
  // from MDN https://developer.mozilla.org/en/docs/Web/API/AnalyserNode#Examples

  const barWidth = canvas.width / 80;
  console.log(bufferLength + " and " + barWidth);
  let barHeight;
  let wow;

  function animate() {
    wow = 0;
    canvasCtx.clearRect(0, 0, canvas.width, canvas.height);
    analyser.getByteFrequencyData(dataArray);
    draw(bufferLength, wow, barWidth, barHeight, dataArray);
    requestAnimationFrame(animate);
  }

  var draw = function (bufferLength, wow, barWidth, barHeight, dataArray) {
    canvasCtx.fillStyle = soul.background_color[1];
    canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

    canvasCtx.fillStyle = soul.text_color[1];
    canvasCtx.font = canvas_textfontSize + "px Ailerons-Regular";
    canvasCtx.textAlign = "center";
    canvasCtx.fillText(canvas_txt, canvas.width / 2, canvas.height / 3);

    displayBackgroundImg(canvasCtx, b_i);

    canvasCtx.beginPath();
    var highest = 0;
    for (let i = 0; i < bufferLength; i++) {
      if (dataArray[i] > highest) {
        highest = dataArray[i];
      }

      barHeight = window.innerWidth >= 640 ? dataArray[i] * 2 : dataArray / 2;

      var num = parseInt((highest / 128 - 1) * 8);
      var coolers = "black";

      if (num <= 1) {
        coolers = "red";
      }
      if (num == 2) {
        coolers = "blue";
      }
      if (num == 3) {
        coolers = "yellow";
      }
      if (num == 4) {
        coolers = "#f067f5";
      }
      if (num == 5) {
        coolers = "purple";
      }
      if (num == 6) {
        coolers = "#61ff66";
      }
      if (num == 7) {
        coolers = "#61ff6B";
      }
      if (num >= 8) {
        coolers = "#61ffAB";
      }

      canvasCtx.fillStyle = coolers;
      canvasCtx.fillRect(wow, canvas.height - barHeight, barWidth, barHeight);

      wow += barWidth;
    }
    watermark(canvasCtx);
  };

  animate();
}
