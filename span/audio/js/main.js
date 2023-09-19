const header = document.querySelector("header");
const sectionOne = document.querySelector(".section");

const sectionOneOptions = {
  rootMargin: "-200px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver(function(
  entries,
  sectionOneObserver
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      document.getElementById("header").style.backgroundImage = "linear-gradient(#3a4aff91, #3a4aff91, #3a4aff91, #3a4aff91, transparent";
    } else {
      document.getElementById("header").style.background = "transparent";
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);

//function for changing pages when clicked
const clippersLa = document.getElementById('lakers');
const homeTab = document.getElementById('home-tab');
const galleryTab = document.getElementById('gallery-tab');
const userTab = document.getElementById('user-tab');
const navItems = document.getElementById('navigation');
homeTab.style.backgroundColor = "#fff";


let xhr = new XMLHttpRequest();
xhr.open('GET', 'list.php', true);
const tabGallery = galleryTab.addEventListener("click", () => {
  galleryTab.style.backgroundColor = "#fff";
  userTab.style.backgroundColor = "transparent";
  homeTab.style.backgroundColor = "transparent";
  clippersLa.innerHTML = xhr.response;
})

xhr.send();

let xar = new XMLHttpRequest();
xar.open('GET', 'list.php', true);
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

function viewGallery() {
  galleryTab.click();
}

function deskhome() {
  homeTab.click();
}

function deskuser() {
  userTab.click();
}

function leavemsg() {
  userTab.click();
}










