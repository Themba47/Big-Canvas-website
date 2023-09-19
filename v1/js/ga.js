const gaWerk = document.querySelectorAll(".section");
var pge = document.getElementById('pge-load');

window.onload = () => {
	pge.classList.replace("page-loader", "loader-page");
	galleryTab.setAttribute("src", "img/imageblu.svg");
	for (var a = 0; a < gaWerk.length; a++) {
		gaWerk[a].style.animation = "gawerk linear 0.5s";
		gaWerk[a].style.transition = ".5s";
	}
  
}