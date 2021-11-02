var hamburger = document.getElementsByClassName("hamburger");
var overlay = document.getElementsByClassName("overlay");
var menu = document.getElementsByClassName("menu");

hamburger[0].addEventListener("click", () => {
  overlay[0].classList.toggle("active");
  menu[0].classList.toggle("active");
  hamburger[0].classList.toggle("active");
  menu[0].classList.toggle("container");
});

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  if (n > slides.length) {
      slideIndex = 1;
  }
  if (n < 1) {
      slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "grid";
}

window.addEventListener("scroll", () => {
  var nav = document.querySelector("nav");
  nav.classList.toggle("sticky", window.scrollY > 0);
});
