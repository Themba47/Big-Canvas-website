// Author: Themba Sishuba
// Canvas finished on the 23th of September 2021


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
  canvas_type = 8;
  var canvasCtx = canvas.getContext("2d");

  canvasCtx.fillStyle = b;
  canvasCtx.lineWidth = 8;
  var cr = canvas.height/5 // cr stands for circle radius
  var cx = canvas.width/2 // cx stands for circle x center coordinataes
  var cy = canvas.height/2 // cy stands for circle y center coordinataes
  var xCo = 0;
  var yCo = 0;


  canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

  if (i != null) {
    displayBackgroundImg(canvasCtx, i);
  }

  canvasCtx.beginPath();  
  canvasCtx.save();
//   canvasCtx.translate(canvas.width/2, canvas.height/2);
   
  canvasCtx.arc(canvas.width / 2, canvas.height / 2, cr + cr, 0, Math.PI * 2);
  canvasCtx.strokeStyle = soul.graphic_color[1];
  canvasCtx.stroke();
  canvasCtx.restore();

  canvasCtx.fillStyle = t;
  canvasCtx.font = canvas_textfontSize + "px Ailerons-Regular";
  canvasCtx.textAlign = "center";
 theText(canvasCtx, w);
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

    var sliceWidth = (canvas.width * 1.0) / bufferLength;
    var x = 0;
  canvasCtx.save();
//   canvasCtx.translate(canvas.width/2, canvas.height/2);
   
  for (let k = 0, angle = 5.625; angle < 360; k++, angle += 5.625) {

      var v = dataArray[k] / 128.0;
      var y = (v * canvas.height) / 2;

    canvasCtx.translate(canvas.width / 2, canvas.height / 2);
    canvasCtx.rotate((Math.PI / 180) * 5.625);
    canvasCtx.translate(-canvas.width / 2, -canvas.height / 2);
      if(k == 0) {
           
      } else {
        canvasCtx.lineTo(canvas.width / 2 - x * 1/8, canvas.height / 5 - y* 1/8);

      }

      x += sliceWidth;
 
  }

  
  
  canvasCtx.fillStyle = soul.graphic_color[1];
  canvasCtx.fill();
  canvasCtx.closePath();
  canvasCtx.restore();

  if (b_i != null) {
    canvasCtx.save();
    canvasCtx.clip();
    displayCdImg(canvasCtx, b_i, radius);
    canvasCtx.restore();
  }

    canvasCtx.fillStyle = soul.text_color[1];
    canvasCtx.font = canvas_textfontSize + "px Ailerons-Regular";
    canvasCtx.textAlign = "center";
    theText(canvasCtx, canvas_txt);
    
   
  };

  animate();
}
