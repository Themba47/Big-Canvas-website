// Author: Themba Sishuba
// Canvas finished on the 20th of September 2021
document.getElementById("pallette_graphic").style.display = "none";

var canvasCtx = canvas.getContext("2d");
var spheres = [];

function setCanvasSize() {
  // Set canvas size
  if (window.innerWidth >= 1440) {
    canvas.width = 1920;
    canvas.height = 1080;
    spheres = [20, 40, 60];
  } else if (window.innerWidth >= 640 && window.innerWidth < 1440) {
    canvas.width = 1280;
    canvas.height = 720;
    canvas_textfontSize = 60;
    spheres = [15, 30, 45];
  } else {
    canvas.width = 854;
    canvas.height = 480;
    canvas_textfontSize = 40;
    canvas_lineWidth = 2;
    console.log("this 1 ran");
    spheres = [10, 20, 30];
    document.getElementById("pallette").style.gridTemplateAreas =
      '"btn-1 btn-2 btn-3 btn-4 btn-6"';
  }
}

console.log(spheres);

function callCanvasOnce(w, b, t, g, i) {
  //CANVAS_TYPE...
  canvas_type = 8;
  var canvasCtx = canvas.getContext("2d");

  canvasCtx.fillStyle = b;
  canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

  if (i != null) {
    displayBackgroundImg(canvasCtx, i);
  }

  for (let k = 0; k < 16; k++) {
    canvasCtx.beginPath();
    canvasCtx.translate(canvas.width / 2, canvas.height / 2);
    canvasCtx.rotate((Math.PI / 180) * 22.5);
    canvasCtx.translate(-canvas.width / 2, -canvas.height / 2);

    canvasCtx.fillStyle = "black";
    canvasCtx.fillRect(canvas.width / 2, canvas.height / 5, 20, 50 / 5);
  }

  canvasCtx.fillStyle = t;
  canvasCtx.font = canvas_textfontSize + "px Ailerons-Regular";
  canvasCtx.textAlign = "center";
  canvasCtx.fillText(w, canvas.width / 2, canvas.height / 2);
}

function startCanvasAnim(bc, tc, gc, img) {
  // from MDN https://developer.mozilla.org/en/docs/Web/API/AnalyserNode#Examples
  const barWidth = canvas.width / 80;
  const sphere_colors = [
    "#fff8333",
    "#33beff",
    "#ee33ff",
    "#ff3363",
    "#3dff33",
    "#ee33ff",
    "#ff3363",
    "#3dff33",
  ];
  let wow;

  function animate() {
    wow = 0;
    canvasCtx.clearRect(0, 0, canvas.width, canvas.height);
    analyser.getByteFrequencyData(dataArray);
    draw(bufferLength, dataArray);
    requestAnimationFrame(animate);
  }

  function rotatedBar(canvasCtx, barHeight, i, dataArray) {
    const red = (i * barHeight) / 20;
    const green = i / 2;
    const blue = barHeight / 2;

    canvasCtx.fillStyle = "rgb(" + red + "," + green + "," + blue + ")";
    canvasCtx.save();
    canvasCtx.translate(
      canvas.width / 2 + 25 / 2,
      canvas.height / 5 + dataArray / 2
    );
    canvasCtx.rotate(Math.PI * 3);
    canvasCtx.translate(
      -canvas.width / 2 + 25 / 2,
      -canvas.height / 5 + dataArray / 2
    );
    canvasCtx.fillRect(canvas.width / 2, canvas.height / 4, 20, dataArray);
    canvasCtx.restore();
  }

  var draw = function (bufferLength, dataArray) {
    canvasCtx.fillStyle = soul.background_color[1];
    canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

    displayBackgroundImg(canvasCtx, b_i);

    canvasCtx.beginPath();
    canvasCtx.save();
    var highest = 0;
    var num = parseInt((highest / 128 - 1) * 8);
    var coolers = 0;
    var circlearr = [];
    for (let i = 0; i < 100; i++) {
      coolers = dataArray[i];

      num = parseInt((highest / 128 - 1) * 8);

      if (num <= 2) {
        circlearr = ["#ff00f2", "transparent", "transparent"];
      }
      if (num == 2) {
        circlearr = ["#303bff", "transparent", "transparent"];
      }
      if (num == 3) {
        circlearr = ["#982aa5", "#303bff", "transparent"];
      }
      if (num >= 4 && num <= 5) {
        circlearr = ["#982aa5", "#303bff", "transparent"];
      }
      if (num >= 6) {
        circlearr = [
          "#3af2ff",
          "#ff00f2",
          sphere_colors[parseInt(Math.random() * sphere_colors.length)],
        ];
      }

      canvasCtx.beginPath();

      canvasCtx.translate(canvas.width / 2, canvas.height / 2);
      canvasCtx.rotate((Math.PI / 180) * bufferLength);
      canvasCtx.translate(-canvas.width / 2, -canvas.height / 2);

      if (i <= 50) {
        rotatedBar(canvasCtx, coolers, i, dataArray[i] / 4);
      } else {
        rotatedBar(canvasCtx, coolers, i, dataArray[i] / 2);
      }
    }
    canvasCtx.restore();

    canvasCtx.fillStyle = soul.text_color[1];
    canvasCtx.font = canvas_textfontSize + "px Ailerons-Regular";
    canvasCtx.textAlign = "center";
    canvasCtx.fillText(canvas_txt, canvas.width / 2, canvas.height / 2);
  };

  animate();
}
