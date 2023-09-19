// Author: Themba Sishuba
// Canvas 1 finished on the 15th of August 2021
var canvasCtx = canvas.getContext("2d");
var radialbars = 1;

function setCanvasSize() {
  // Set canvas size
  if (window.innerWidth >= 1440) {
    canvas.width = 1920;
    canvas.height = 1080;
  } else if (window.innerWidth >= 640 && window.innerWidth < 1440) {
    canvas.width = 1280;
    canvas.height = 720;
    canvas_textfontSize = 60;
    radialbars = 0.75;
    radius = 150;
  } else {
    canvas.width = 854;
    canvas.height = 480;
    canvas_textfontSize = 40;
    canvas_lineWidth = 2;
    radialbars = 0.4;
    radius = 100;
  }
}

function displayCdImg(ctx, stombe, r) {
  var radius = 100 / r;
  if (stombe != null) {
    ctx.beginPath();
    if (stombe.height > stombe.width) {
      ctx.drawImage(
        stombe,
        canvas.width / 2 -
          (canvas.height * (stombe.width / stombe.height) * radius) / 2,
        canvas.height / 2 - (canvas.height / 2) * radius,
        canvas.height * (stombe.width / stombe.height) * radius,
        canvas.height * radius
      );
    } else {
      ctx.drawImage(
        stombe,
        canvas.width / 2 - (canvas.width / 2) * radius,
        canvas.height / 2 -
          (canvas.width * (stombe.height / stombe.width) * radius) / 2,
        canvas.width * radius,
        canvas.width * (stombe.height / stombe.width) * radius
      );
    }
  }
}

function callCanvasOnce(w, b, t, g, i) {
  //CANVAS_TYPE...
  canvas_type = 3;
  var canvasCtx = canvas.getContext("2d");

  canvasCtx.fillStyle = b;
  canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

  for (let degree = 0, j = 0; degree < 32; degree++, j++) {
    canvasCtx.translate(canvas.width / 2, canvas.height / 2);
    canvasCtx.rotate((Math.PI / 180) * 11.25);
    canvasCtx.translate(-canvas.width / 2, -canvas.height / 2);
    canvasCtx.beginPath();
    if (j % 4 == 0) {
      j = 0;
    }
    canvasCtx.fillStyle = "black";
    canvasCtx.fillRect(
      canvas.width / 2,
      canvas.height / 4,
      radius / 10,
      radius
    );
  }

  if (i != null) {
    canvasCtx.save();
    canvasCtx.filter = "blur(10px)";
    displayBackgroundImg(canvasCtx, b_i);
    canvasCtx.restore();
  }

  canvasCtx.beginPath();
  canvasCtx.fillStyle = g;
  canvasCtx.arc(canvas.width / 2, canvas.height / 2, radius, 0, Math.PI * 2);
  canvasCtx.fill();

  if (b_i != null) {
    canvasCtx.save();
    canvasCtx.clip();
    displayCdImg(canvasCtx, b_i, radius);
    canvasCtx.restore();
  }

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

  animate();
}

var draw = function (bufferLength, wow, barWidth, barHeight, dataArray) {
  canvasCtx.fillStyle = soul.background_color[1];
  canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

  canvasCtx.save();
  canvasCtx.filter = "blur(20px)";
  displayBackgroundImg(canvasCtx, b_i);
  canvasCtx.restore();

  for (let i = 0; i < bufferLength; i++) {
    barHeight = dataArray[i] * radialbars;
    canvasCtx.save();
    canvasCtx.translate(canvas.width / 2, canvas.height / 2);
    canvasCtx.rotate(i * (Math.PI / 180) * 4);
    const red = (i * barHeight) / 20;
    const green = i / 2;
    const blue = barHeight / 2;

    canvasCtx.fillStyle = "rgb(" + red + "," + green + "," + blue + ")";
    canvasCtx.fillRect(0, 100, barWidth, barHeight * 2);
    wow += barWidth;
    canvasCtx.restore();
  }

  canvasCtx.beginPath();
  canvasCtx.fillStyle = soul.graphic_color[1];
  canvasCtx.arc(canvas.width / 2, canvas.height / 2, radius, 0, Math.PI * 2);
  canvasCtx.fill();

  if (b_i != null) {
    canvasCtx.save();
    canvasCtx.clip();
    displayCdImg(canvasCtx, b_i, radius);
    canvasCtx.restore();
  }

  canvasCtx.fillStyle = soul.text_color[1];
  canvasCtx.font = canvas_textfontSize + "px SF-Pro-Display-Black";
  canvasCtx.textAlign = "center";
  canvasCtx.fillText(canvas_txt, canvas.width / 2, canvas.height / 2);
   waterMark(canvasCtx);
};
