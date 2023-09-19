// Author: Themba Sishuba
// Canvas 1 finished on the 1st of September 2021

function setCanvasSize() {
  // Set canvas size
  if (window.innerWidth >= 1440) {
    canvas.width = 1920;
    canvas.height = 1080;
  } else if (window.innerWidth >= 640 && window.innerWidth < 1440) {
    canvas.width = 1280;
    canvas.height = 720;
    canvas_textfontSize = 60;
    canvas_lineWidth = 3;
    radius = 150;
  } else {
    canvas.width = 854;
    canvas.height = 480;
    canvas_textfontSize = 40;
    canvas_lineWidth = 2;
    radius = 100;
  }
}

function callCanvasOnce(w, b, t, g, i) {
  //CANVAS_TYPE...
  canvas_type = 1;
  var canvasCtx = canvas.getContext("2d");

  canvasCtx.fillStyle = b;
  canvasCtx.lineWidth = canvas_lineWidth * 10;
  canvasCtx.strokeStyle = g;

  canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

  if (i != null) {
    displayBackgroundImg(canvasCtx, i);
  }

  canvasCtx.beginPath();

  var sliceWidth = (canvas.width * 1.0) / 1024;
  var x = 0;

  for (var i = 0; i < 1024; i++) {
    canvasCtx.save();
    canvasCtx.translate(canvas.width / 2, canvas.height / 2);
    canvasCtx.rotate(-i * (Math.PI / 180) * 7);
    var v = 128 / -512.0;
    var y = (v * canvas.height) / 2;

    if (i === 0) {
      canvasCtx.moveTo(x, y);
    } else {
      canvasCtx.lineTo(x, y);
    }

    x += sliceWidth;
    canvasCtx.restore();
  }

  //canvasCtx.lineTo(canvas.width * 0.75, canvas.height / 2);
  canvasCtx.stroke();

  canvasCtx.fillStyle = t;
  canvasCtx.font = canvas_textfontSize + "px SF-Pro-Display-Black";
  canvasCtx.textAlign = "center";
  canvasCtx.fillText(w, canvas.width / 2, canvas.height / 2);
  watermark.onload = () => {
    waterMark(canvasCtx);
  };
}

function startCanvasAnim(bc, tc, gc, img) {
  // from MDN https://developer.mozilla.org/en/docs/Web/API/AnalyserNode#Examples
  var canvasCtx = canvas.getContext("2d");

  canvasCtx.lineWidth = canvas_lineWidth * 10;
  canvasCtx.strokeStyle = gc;

  var draw = function () {
    var drawVisual = requestAnimationFrame(draw);

    analyser.getByteTimeDomainData(dataArray);

    canvasCtx.fillStyle = soul.background_color[1];
    canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

    displayBackgroundImg(canvasCtx, b_i);

    canvasCtx.beginPath();

    var sliceWidth = (canvas.width * 1.0) / bufferLength;
    var x = 0;

    for (var i = 0; i < bufferLength; i++) {
      canvasCtx.save();
      canvasCtx.translate(canvas.width / 2, canvas.height / 2);
      canvasCtx.rotate(-i * (Math.PI / 180) * 7);
      var v = dataArray[i] / -512.0;
      var y = (v * canvas.height) / 2;

      if (i === 0) {
        canvasCtx.moveTo(x, y);
      } else {
        canvasCtx.lineTo(x, y);
      }

      x += sliceWidth * -1;
      canvasCtx.restore();
    }

    //canvasCtx.lineTo(canvas.width * 0.75, canvas.height / 2);
    canvasCtx.stroke();

    canvasCtx.fillStyle = soul.text_color[1];
    canvasCtx.font = canvas_textfontSize + "px SF-Pro-Display-Black";
    canvasCtx.textAlign = "center";
    canvasCtx.fillText(canvas_txt, canvas.width / 2, canvas.height / 2);
     waterMark(canvasCtx);
  };

  draw();
}
