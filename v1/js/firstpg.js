// Cloning technique
var pttern = document.getElementById("pattern1");
var clone = pttern.cloneNode(true);
clone.id = "pattern2";
pttern.after(clone);

var ptternblu = document.getElementById("pattern");
var clown = ptternblu.cloneNode(true);
clown.id = "pattern4";
ptternblu.after(clown);

var pge = document.getElementById('pge-load');

window.onload = () => {
  pge.classList.replace("page-loader", "loader-page");
  document.querySelector(".loader").style.animation = "laoder ease 1.5s infinite";
  pttern.style.animation = "nyakaz linear 12s infinite 1s";
  clone.style.animation = "nyakaz linear 12s infinite 7s";
  ptternblu.style.animation = "nya linear 12s infinite 1s";
  clown.style.animation = "nya linear 12s infinite 7s";
  homeTab.setAttribute("src", "img/homeblu.svg");
}



