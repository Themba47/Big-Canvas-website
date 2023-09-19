var open_text_box = false,
  menuOpen = false;
var t_c = "#3a4aff",
  b_c = "#ffffff",
  g_c = "#000000",
  b_i = null,
  canvas_type = 0;
canvas_txt = "Edit your canvas and add your track";
(uploaded_img = document.getElementById("pallette_background_img")),
  (txt_box = document.getElementById("pallette_text_box"));

var watermark = new Image();
// ************************* LOve
watermark.src = "../img/bcwater.png";

// canvas.width = 1920;
// canvas.height = 1080;
var radius = 200;
var canvas_textfontSize = 80;
var canvas_lineWidth = 4;

setCanvasSize();

const mBtn = document.querySelector("#open-svg"),
  sideX = document.querySelectorAll(".sdeNav"),
  sideMenu = document.getElementById("side-menu");

var isiStombe = new Image();

var soul = {
  text_color: ["#text_color", t_c],
  background_color: ["#background_color_btn", b_c],
  graphic_color: ["#pallette_graphic_color", g_c],
};

// ********* Open Nav bar **************************

mBtn.addEventListener("click", () => {
  if (!menuOpen) {
    mBtn.classList.add("vula");
    menuOpen = true;
    sideMenu.style.width = "80vw";
    for (var yum = 0; yum < sideX.length; yum++) {
      sideX[yum].style.animation = "slidein ease-out .5s 1 forwards 0.5s";
    }
  } else {
    mBtn.classList.remove("vula");
    menuOpen = false;
    sideMenu.style.width = "0";
    for (var yuk = 0; yuk < sideX.length; yuk++) {
      sideX[yuk].style.animation = "slideout ease-out .5s 1 forwards 0.5s";
    }
  }
});

callCanvasOnce(canvas_txt, b_c, t_c, g_c, b_i);

function displayBackgroundImg(ctx, stombe) {
  if (stombe != null) {
    ctx.beginPath();
    if (stombe.height > stombe.width) {
      ctx.drawImage(
        stombe,
        canvas.width / 2 - (canvas.height * (stombe.width / stombe.height)) / 2,
        0,
        canvas.height * (stombe.width / stombe.height),
        canvas.height
      );
    } else {
      ctx.drawImage(
        stombe,
        0,
        canvas.height / 2 - (canvas.width * (stombe.height / stombe.width)) / 2,
        canvas.width,
        canvas.width * (stombe.height / stombe.width)
      );
    }
  }
}

// Function to open the file input *******************
function uploadSong() {
  document.getElementById("trackupload").click();
}

// Function to open background image ********************
function uploadBackImg() {
  uploaded_img.click();
}

// upload image function **************************
uploaded_img.addEventListener("change", addToCanvas, true);
function addToCanvas() {
  var file = uploaded_img.files[0];
  var reader = new FileReader();
  reader.onloadend = function () {
    isiStombe.src = reader.result;
    b_i = isiStombe;

    setTimeout(() => {
      callCanvasOnce(
        canvas_txt,
        soul.background_color[1],
        soul.text_color[1],
        soul.graphic_color[1],
        b_i
      );
    }, 10);
  };
  if (file) {
    reader.readAsDataURL(file);
  } else {
  }
}

function openTextBox() {
  document.getElementById("pallette_text").classList.toggle("active");
}

// funtion to close text box if click occurs outside....
document.addEventListener("click", (ev) => {
  if (
    ev.target.id !== "pallette_text" &&
    ev.target.id !== "pallette_text_box" &&
    ev.target.id !== "pallette_text_btn" &&
    ev.target !== document.getElementById("pallette_text_btn").children[0]
  ) {
    document.getElementById("pallette_text").classList.remove("active");
  }
});

// Event Listener for when click event happens in txt_box

txt_box.addEventListener("keyup", () => {
  canvas_txt = txt_box.value;

  callCanvasOnce(
    canvas_txt,
    soul.background_color[1],
    soul.text_color[1],
    soul.graphic_color[1],
    b_i
  );
});

function openColorPicker(ez) {
  document.querySelector(soul[ez][0]).click();

  const pickr = Pickr.create({
    el: soul[ez][0],
    theme: "classic", // or 'monolith', or 'nano'
    lockOpacity: false,
    container: "#visual_edit",
    default: soul[ez][1],

    swatches: [
      "#f5336d",
      "#ff6f61",
      "#ffb284",
      "#f067f5",
      "#6164ff",
      "#5a369c",
      "#111F57",
      "#61ffff",
      "rgba(0, 150, 136, 1)",
      "#61ff66",
      "#ffff61",
      "rgba(255, 193, 7, 1)",
    ],

    components: {
      // Main components
      preview: true,
      opacity: true,
      hue: true,

      // Input / output Options
      interaction: {
        hex: true,
        rgba: false,
        hsla: false,
        hsva: false,
        cmyk: false,
        input: true,
        clear: true,
        save: false,
      },
    },
  });

  pickr.show();

  pickr
    .on("change", (...args) => {
      let color = args[0].toHEXA().toString();

      soul[ez][1] = color;

      callCanvasOnce(
        canvas_txt,
        soul.background_color[1],
        soul.text_color[1],
        soul.graphic_color[1],
        b_i
      );
    })
    .on("save", (color, instance) => {})
    .on("hide", (instance) => {
      document
        .querySelector(".pickr")
        .setAttribute("id", soul[ez][0].substring(1));
      document.querySelector(soul[ez][0]).className = "color-picker";
    });
}

function theText(ctx, canvas_txt) {
  let linebreaker = canvas_txt.split("\n");
    let lineheight = canvas.height/10;
    let llh = linebreaker.length > 1 ? (linebreaker.length - 2) * lineheight: (linebreaker.length - 1) * lineheight;

    for (let i = 0; i<linebreaker.length; i++) {
       linebreaker.length * 
    ctx.fillText(linebreaker[i], canvas.width / 2, (canvas.height / 2 - llh) + i * lineheight);
  }
}

function waterMark(ctx) {
  var scale = window.innerWidth >= 640 ? 2 : 3;
  ctx.drawImage(
    watermark,
    (canvas.width * 18) / 20,
    (canvas.height * 17) / 20,
    watermark.width / scale,
    watermark.height / scale
  );
}

// var canvasCtx = canvas.getContext("2d");

// canvasCtx.fillStyle = "#fff";
// canvasCtx.font = "10pt Calibri";
// canvasCtx.fillText('Themba"s Canvas', canvas.width / 2, canvas.height / 2);
// console.log(canvasCtx.font);
