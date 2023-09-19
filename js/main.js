const header = document.querySelector("header"),
  sectionOne = document.querySelector(".section"),
  pics = document.querySelectorAll("[data-src]"),
  sectionOneOptions = { rootMargin: "-200px 0px 0px 0px" },
  imgOptions = { threshold: 0, rootMargin: "0px 0px -200px 0px" },
  sectionOneObserver = new IntersectionObserver(function (e, t) {
    e.forEach((e) => {
      e.isIntersecting
        ? ((document.getElementById("header").style.background = "transparent"),
          (document.getElementById("header").style.filter = "invert(0)"))
        : ((document.getElementById("header").style.backgroundColor = "#fff"),
          (document.getElementById("header").style.filter = "invert(100%)"));
    });
  }, sectionOneOptions);
sectionOneObserver.observe(sectionOne);
const clippersLa = document.getElementById("lakers"),
  homeTab = document.getElementById("home-tab"),
  galleryTab = document.getElementById("gallery-tab"),
  blogTab = document.getElementById("blog-tab"),
  userTab = document.getElementById("user-tab"),
  navItems = document.getElementById("navigation"),
  theMsglink = document.getElementById("msgleave"),
  tickBox = document.getElementById("tickbox"),
  sideMenu = document.getElementById("side-menu");
  document.querySelector("#copyRightyear").innerHTML = new Date().getFullYear();
function tickThebox() {
  1 == tickbox.checked
    ? (document.getElementById("txtmsg").innerHTML = "Hi , I need a website.")
    : (document.getElementById("txtmsg").innerHTML = " ");
}
const mBtn = document.querySelector("#open-svg"),
  sideX = document.querySelectorAll(".sdeNav");
let menuOpen = !1;
mBtn.addEventListener("click", () => {
  if (menuOpen) {
    mBtn.classList.remove("vula"),
      (menuOpen = !1),
      (sideMenu.style.width = "0");
    for (var e = 0; e < sideX.length; e++)
      sideX[e].style.animation = "slideout ease-out .5s 1 forwards 0.5s";
  } else {
    mBtn.classList.add("vula"),
      (menuOpen = !0),
      (sideMenu.style.width = "80vw");
    for (var t = 0; t < sideX.length; t++)
      sideX[t].style.animation = "slidein ease-out .5s 1 forwards 0.5s";
  }
});
var open_yoco = false,
  survey_package = [1, 9900];

function vulaYoco(ev) {
  window.scrollTo(0, 1000);
  switch (ev) {
    case 1:
      survey_package = [20, 9900];
      break;
    case 2:
      survey_package = [40, 11900];
      break;
    case 3:
      survey_package = [60, 13900];
      break;
    default:
      survey_package = [20, 9900];
      break;
  }

  sdk = new window.YocoSDK({
    publicKey: "pk_live_c040c326z4kndq530794",
  });

  // Create a new dropin form instance
  inline = sdk.inline({
    layout: "basic",
    amountInCents: survey_package[1],
    currency: "ZAR",
  });
  // this ID matches the id of the element we created earlier.
  inline.mount("#card-frame");

  if (!open_yoco) {
    open_yoco = true;
    document.querySelector(".wrapper").style.display = "block";
    document.querySelector("#pay-button").innerHTML = "PAY";
    document.querySelector(".yoco-inputs").style.height = "100%";
  }
}
