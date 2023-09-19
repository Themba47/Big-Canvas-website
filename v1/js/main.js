const header = document.querySelector("header");
const sectionOne = document.querySelector(".section");
const pics = document.querySelectorAll("[data-src]");

const sectionOneOptions = {
  rootMargin: "-200px 0px 0px 0px",
};

const imgOptions = {
  threshold: 0,
  rootMargin: "0px 0px -200px 0px",
};

const sectionOneObserver = new IntersectionObserver(function (
  entries,
  sectionOneObserver
) {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      document.getElementById("header").style.backgroundColor = "#fff";
    } else {
      document.getElementById("header").style.background = "transparent";
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);

function preloadImage(img) {
  const src = img.getAttribute("data-src");
  if (!src) {
    return;
  }
  img.src = src;
}

const imgObserver = new IntersectionObserver((entries, imgObserver) => {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      return;
    } else {
      preloadImage(entry.target);
      imgObserver.unobserve(entry.target);
      var xz = document.querySelectorAll("#yepe");
      for (var k = 0; k < xz.length; k++) {
        xz[k].style.opacity = "1";
        xz[k].style.transform = "translateX(0px)";
      }
    }
  });
}, imgOptions);

pics.forEach((image) => {
  imgObserver.observe(image);
});

//function for changing pages when clicked
const clippersLa = document.getElementById("lakers");
const homeTab = document.getElementById("home-tab");
const galleryTab = document.getElementById("gallery-tab");
const userTab = document.getElementById("user-tab");
const navItems = document.getElementById("navigation");
const theMsglink = document.getElementById("msgleave");
const tickBox = document.getElementById("tickbox");
const sideMenu = document.getElementById("side-menu");
let add_more = document.getElementById("addmore");
let num = 4;
let question_num = 0;

window.addEventListener("load", () => {
  for (var i = 0; i < numOfquestions; i++, question_num++) {
    document.querySelector(
      ".myform"
    ).innerHTML += `<input type="text" class="thequestion" name="question[]">${
      question_num + 1
    }<br>
            <label>Add Image</label><br>
            <input type="file" name="file[]"><br>
            <label>Option A</label><br>
            <input type="text" name="choiceA[]"><br>
            <input type="text" name="choiceB[]"><br>
            <input type="text" name="choiceC[]"><br>
            <input type="text" name="choiceD[]"><br>
            <input type="text" name="correct[]"><br><br>`;
  }
});

// Adds more text fields and input field
add_more.addEventListener("click", () => {
  if (num < 10) {
    document.querySelector(
      ".myform"
    ).innerHTML += `<input type="text" class="thequestion" name="question[]">${
      question_num + 1
    }<br>
            <label>Add Image</label><br>
            <input type="file" name="file[]"><br>
            <label>Option A</label><br>
            <input type="text" name="choiceA[]"><br>
            <input type="text" name="choiceB[]"><br>
            <input type="text" name="choiceC[]"><br>
            <input type="text" name="choiceD[]"><br>
            <input type="text" name="correct[]"><br><br>`;
    console.log("Field Added");
    num++;
    question_num++;
  }
});

function tickThebox() {
  if (tickbox.checked == true) {
    document.getElementById("txtmsg").innerHTML = "Hi , I need a website.";
  } else {
    document.getElementById("txtmsg").innerHTML = " ";
  }
}

const mBtn = document.querySelector("#open-svg");
const sideX = document.querySelectorAll(".sdeNav");
let menuOpen = false;

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

/*
let xhr = new XMLHttpRequest();
xhr.open('GET', 'gallery.php', true);
const tabGallery = galleryTab.addEventListener("click", () => {
  galleryTab.style.backgroundColor = "#fff";
  userTab.style.backgroundColor = "transparent";
  homeTab.style.backgroundColor = "transparent";
  clippersLa.innerHTML = xhr.response;
})

xhr.send();

let xar = new XMLHttpRequest();
xar.open('GET', 'user.php', true);
const tabUser = userTab.addEventListener("click", () => {
  userTab.style.backgroundColor = "#fff";
  galleryTab.style.backgroundColor = "transparent";
  homeTab.style.backgroundColor = "transparent";
  clippersLa.innerHTML = xar.response;
})

xar.send();

*/

function leavemsg() {
  theMsglink.click();
}
