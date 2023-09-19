const mBtn = document.querySelector("#open-svg");
const theNav = document.querySelector("#nav");
const theUpload = document.querySelector("#user-on-head");
const sideMenu = document.querySelector('#side-menu');
const sideX = document.querySelectorAll(".sdeNav");
let menuOpen = false;

mBtn.addEventListener('click', () => {
  if (!menuOpen) {
    mBtn.classList.add('vula');
    menuOpen = true;
    sideMenu.style.width = '80vw';
    for (var yum = 0; yum < sideX.length; yum++) {
      sideX[yum].style.animation = "slidein ease-out .5s 1 forwards 0.5s";
    }
  } else {
    mBtn.classList.remove('vula');
    menuOpen = false;
    sideMenu.style.width = '0';
    for (var yuk = 0; yuk < sideX.length; yuk++) {
      sideX[yuk].style.animation = "slideout ease-out .5s 1 forwards 0.5s";
    }
  }
})

dieInput = document.getElementById('myInput');
vulaSe = document.getElementById('vulasearch');
kop = document.getElementById('header');


vulaSe.addEventListener('click', focusFunction, true);
dieInput.addEventListener('blur', outfocusFunction, true);

function focusFunction() {
  dieInput.focus();
  vulaSe.style.opacity = '0';
  theNav.style.display = 'none';
  theUpload.style.display = 'none';
  kop.style.gridTemplateColumns = '35% 65%';
}

function outfocusFunction() {
  vulaSe.style.opacity = '1';
  theNav.style.display = 'block';
  theUpload.style.display = 'block';
  kop.style.gridTemplateColumns = '35% 40% 15% 10%';
}
