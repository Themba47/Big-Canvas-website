// Author: Themba Sishuba
// Canvas 6 finished on the 22nd of August 2021
// Edited on the 21st of September 2021

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

var amaSteps_wit = new Image();
amaSteps_wit.src = "../img/steps.png";
var amaSteps = new Image();
amaSteps.src = "../img/steps-white.png";
var amaSteps2 = new Image();
amaSteps2.src = "../img/steps-invert.png";
var amaSteps2_wit = new Image();
amaSteps2_wit.src = "../img/steps-invert-white.png";

function displayPatternImg(xCo, yCo, ctx, stombe, delay) {
  setTimeout(() => {
    ctx.drawImage(
      stombe,
      xCo,
      yCo,
      canvas.height * (stombe.width / stombe.height),
      canvas.height
    );
  }, delay);
}

function createStepPattern(ctx, delay_arg) {
  for (let r = 0; r < 3; r++) {
    if (r == 0) {
      displayPatternImg(canvas.width / 2, 0, ctx, amaSteps, delay_arg);
    } else {
      displayPatternImg(
        canvas.width / 2 + (canvas.width / 2) * (r / 3),
        0,
        ctx,
        amaSteps,
        delay_arg
      );
    }
  }

  for (let r = 0; r < 3; r++) {
    if (r == 0) {
      displayPatternImg(
        canvas.width / 2 - canvas.height * (amaSteps2.width / amaSteps2.height),
        0,
        ctx,
        amaSteps2,
        delay_arg
      );
    } else {
      displayPatternImg(
        (canvas.width / 2) * (r / 3) -
          canvas.height * (amaSteps2.width / amaSteps2.height),
        0,
        ctx,
        amaSteps2,
        delay_arg
      );
    }
  }
}

// ***** This 1 is different cause the shape is a square and not a circle *********
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
  canvas_type = 6;
  var canvasCtx = canvas.getContext("2d");

  canvasCtx.fillStyle = b;
  canvasCtx.lineWidth = canvas_lineWidth * 10;
  canvasCtx.strokeStyle = g;

  canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

  canvasCtx.fillStyle = g;
  canvasCtx.fillRect(
    canvas.width / 2 - canvas.height / 4,
    canvas.height / 4,
    canvas.height / 2,
    canvas.height / 2
  );

  if (b_i !== null) {
    canvasCtx.save();
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

class myPattern {
  constructor(ctx, img, img_invert) {
    this.x_co =
      canvas.width / 2 - canvas.height * (amaSteps.width / amaSteps.height);
    this.x_co_invert =
      canvas.width / 2 -
      (canvas.height * (amaSteps.width / amaSteps.height)) / 2;
    this.ctx = ctx;
    this.img = img;
    this.img_invert = img_invert;
  }

  update(num) {
    this.x_co += num;
    this.x_co_invert -= num;
  }

  show() {
    this.ctx.save();
    this.ctx.translate(40, 0);
    this.ctx.drawImage(
      this.img,
      this.x_co,
      0,
      canvas.height * (amaSteps.width / amaSteps.height),
      canvas.height
    );
    this.ctx.drawImage(
      this.img_invert,
      this.x_co_invert,
      0,
      canvas.height * (amaSteps.width / amaSteps.height),
      canvas.height
    );
    this.ctx.restore();
  }
}

function startCanvasAnim(bc, tc, gc, img) {
  // from MDN https://developer.mozilla.org/en/docs/Web/API/AnalyserNode#Examples
  var canvasCtx = canvas.getContext("2d");
  var num = [0, -300, -600];
  var wit_swart = false;
  var pt;
  var thePatterns = [];
  var pat_num = window.innerWidth >= 640 ? 110 : 70;
  var the_increment = window.innerWidth >= 640 ? 300 : 150;
  var the_increment_limit = window.innerWidth >= 640 ? 1200 : 600;
  analyser.getByteTimeDomainData(dataArray);

  canvas6time = setInterval(() => {
    canvasCtx.clearRect(0, 0, canvas.width, canvas.height);
    canvasCtx.fillStyle = soul.background_color[1];
    canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

    canvasCtx.beginPath();

    pt =
      wit_swart == true
        ? new myPattern(canvasCtx, amaSteps_wit, amaSteps2_wit)
        : new myPattern(canvasCtx, amaSteps, amaSteps2);
    thePatterns.push(pt);

    for (let i = thePatterns.length - 1; i >= 0; i--) {
      if (thePatterns[i].x_co > canvas.width) {
        thePatterns.splice(i, 1);
      } else {
        thePatterns[i].update(pat_num);
        thePatterns[i].show();
      }
    }

    canvasCtx.fillStyle = soul.graphic_color[1];
    canvasCtx.fillRect(
      canvas.width / 2 - canvas.height / 4,
      canvas.height / 4,
      canvas.height / 2,
      canvas.height / 2
    );
    if (b_i !== null) {
      canvasCtx.save();
      displayCdImg(canvasCtx, b_i, radius);
      canvasCtx.restore();
    }

    canvasCtx.fillStyle = soul.text_color[1];
    canvasCtx.font = canvas_textfontSize + "px SF-Pro-Display-Black";
    canvasCtx.textAlign = "center";
    canvasCtx.fillText(canvas_txt, canvas.width / 2, canvas.height / 2);
    waterMark(canvasCtx);

    num[0] += the_increment;

    if (num[0] > the_increment_limit) {
      num[0] = 0;
    }

    if (wit_swart) {
      wit_swart = false;
    } else {
      wit_swart = true;
    }
  }, 600);
}
