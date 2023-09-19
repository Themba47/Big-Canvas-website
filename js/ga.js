const gaWerk = document.querySelectorAll(".section");
var pge = document.getElementById("pge-load");
var listvid_desktop = document.querySelector("#background-vid-desktop");
var listvid_mobile = document.querySelector("#background-vid-mobile");

window.onload = () => {
   try {
    pge.classList.replace("page-loader", "loader-page");
  } catch (error) {}
  if (window.innerWidth >= 640) {
    listvid_mobile.style.display = "none";
  } else {
    listvid_desktop.style.display = "none";
  }
  for (var a = 0; a < gaWerk.length; a++) {
    gaWerk[a].style.animation = "gawerk linear 0.5s, patternmove 8s linear 12 alternate";
    gaWerk[a].style.transition = ".5s";
  }
};
