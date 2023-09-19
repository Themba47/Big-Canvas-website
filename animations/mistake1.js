// Author: Themba Sishuba
// Canvas 1 finished on the 15th of August 2021
var canvasCtx = canvas.getContext("2d");

function setCanvasSize() {
  // Set canvas size
  if (window.innerWidth >= 1440) {
    canvas.width = 1920;
    canvas.height = 1080;
  } else if (window.innerWidth >= 640 && window.innerWidth < 1440) {
    canvas.width = 1280;
    canvas.height = 720;
    canvas_textfontSize = 60;
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
  canvas_type = 2;
  var canvasCtx = canvas.getContext("2d");

  canvasCtx.fillStyle = b;
  canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

  if (i != null) {
    displayBackgroundImg(canvasCtx, i);
  }

  canvasCtx.fillStyle = t;
  canvasCtx.font = canvas_textfontSize + "px SF-Pro-Display-Regular";
  canvasCtx.textAlign = "center";
  canvasCtx.fillText(w, canvas.width / 2, canvas.height / 2);
  watermark.onload = () => {
    waterMark(canvasCtx);
  };
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
    displayBackgroundImg(canvasCtx, b_i);

    canvasCtx.beginPath();

    canvasCtx.lineWidth = 4;
    canvasCtx.strokeStyle = soul.graphic_color[1];

    for (let i = 0, k = 0; i < canvas.width / barWidth; i++, k++) {
      if (k == 2) {
        k = 0;
      }

      barHeight = window.innerWidth >= 640 ? dataArray[i] : dataArray[i] / 2;

      const red = (i * barHeight) / 20;
      const green = i * 2;
      const blue = barHeight / 2;
      // const blue = barHeight * 8 => This will make it more blue;

      // Color Schemes

      // Color Scheme 1:
      //  const red = i * 20;
      //  const green = i / 2;
      //  const blue = barHeight * 8;

      if (k == 0) {
        canvasCtx.fillStyle = soul.graphic_color[1];
      } else {
        canvasCtx.fillStyle = soul.background_color[1];
      }
      canvasCtx.fillRect(wow, canvas.height - barHeight, barWidth, 10);

      canvasCtx.moveTo(wow, canvas.height - barHeight);
      canvasCtx.lineTo(canvas.width / 2, 0);
      // canvasCtx.fillRect(wow, canvas.height - barHeight, barWidth, 5);
      wow += barWidth;
    }

    canvasCtx.stroke();

    canvasCtx.fillStyle = soul.text_color[1];
    canvasCtx.font = canvas_textfontSize + "px SF-Pro-Display-Regular";
    canvasCtx.textAlign = "center";
    canvasCtx.fillText(canvas_txt, canvas.width / 2, canvas.height / 2);
    waterMark(canvasCtx);
  };

  animate();
}
