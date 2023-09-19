//function for changing pages when clicked
const clippersLa = document.getElementById('lakers');
const homeTab = document.getElementById('home-tab');
const galleryTab = document.getElementById('gallery-tab');
const userTab = document.getElementById('user-tab');
const navItems = document.getElementById('navigation');
//homeTab.style.backgroundColor = "#fff";


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

let xer = new XMLHttpRequest();
xer.open('GET', 'home.php', true);
const tabHome = homeTab.addEventListener("click", () => {
  homeTab.style.backgroundColor = "#fff";
  galleryTab.style.backgroundColor = "transparent";
  userTab.style.backgroundColor = "transparent";
  clippersLa.innerHTML = xer.response;
})

xer.send();

function deskgallery() {
  galleryTab.click();
}

function deskhome() {
  homeTab.click();
}

function deskuser() {
  userTab.click();
}








