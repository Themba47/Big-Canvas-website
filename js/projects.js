const gaWerk = document.querySelectorAll(".section");
var pge = document.getElementById("pge-load");
var listvid_desktop = document.querySelector("#background-vid-desktop");
var listvid_mobile = document.querySelector("#background-vid-mobile");
var gw = document.getElementById("gallery-work");
var theVid = document.querySelector("source");
var myDiv = "";

window.onload = () => {
  pge.classList.replace("page-loader", "loader-page");
  if (window.innerWidth <= 640) {
    listvid_desktop.src = "img/bc_vid.mp4";
  } else {
    //document.getElementById("views-span").style.display = "none";
    listvid_desktop.src = "img/pexels-kindel-media-7578547.mp4";
  }
  for (var a = 0; a < gaWerk.length; a++) {
    gaWerk[a].style.animation = "gawerk linear 0.5s";
    gaWerk[a].style.transition = ".5s";
  }
};

var mylist = [
  {
    name: "Marketonweb Ecommerce",
    link: "https://www.marketonweb.co.za",
    image: "clothes.jpg",
    paid: false,
    price: 0,
  },
  {
    name: "Big Canvas Quiz Game",
    link: "quiz/quiz.php",
    image: "howwell.png",
    paid: false,
    price: 0,
  },
  {
    name: "Audio Books",
    link: "span/audio/list.php",
    image: "audioboekie.jpg",
    paid: false,
    price: 0,
  },
  {
    name: "Big Canvas Visualizer Game",
    link: "/gallery",
    image: "gallery_list.png",
    paid: false,
    price: 0,
  },
  {
    name: "Soundclound Clone",
    link: "span/matrix/index.php",
    image: "headset.jpg",
    paid: false,
    price: 0,
  },
  {
    name: "Create email newsletter",
    link: "matrix/invoice1",
    image: "bcnewsletter.jpg",
    paid: false,
    price: 0,
  },
];

for (let i = 0; i < mylist.length; i++) {
  var paidOrFree = mylist[i].paid ? `R${mylist[i].price}` : "Free";
  myDiv += `<section class="section" id="info" data-aos="fade-right">
            <a href="${mylist[i].link}">
                <div class="love">
                    <div class="diespan mereko" style="background-image: url(img/${mylist[i].image});">
                        <h1>${mylist[i].name}</h1><br>
                    </div>
                </div><br>
            </a>
        </section>`;
}

gw.innerHTML = myDiv;
