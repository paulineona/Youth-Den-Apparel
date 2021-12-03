const showNavbar = (toggleId, navId, bodyId, headerId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId);

  if (toggle && nav && bodypd && headerpd) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("show");
      toggle.classList.toggle("bx-x");
      bodypd.classList.toggle("body-pd");
      headerpd.classList.toggle("body-pd");
    });
  }
};

showNavbar("header-toggle", "nav-bar", "body-pd", "header");

const linkColor = document.querySelectorAll(".nav__link");

function colorLink() {
  if (linkColor) {
    linkColor.forEach((l) => l.classList.remove("active"));
    this.classList.add("active");
  }
}
linkColor.forEach((l) => l.addEventListener("click", colorLink));


// MODAL
const modal = document.getElementsByClassName("modal")[0];
const closeModal = document.getElementsByClassName("modal-close")[0];
const addProduct = document.getElementsByClassName("btn-addProduct")[0];

addProduct.addEventListener("click", (event) => {
  event.preventDefault();
  modal.classList.add("active");
});

closeModal.addEventListener("click", () => {
  modal.classList.remove("active");
});

// IMAGE UPLOAD 
const imgInput = document.getElementsByClassName("img-input")[0];
const inputFile = document.getElementById("insertFile");

imgInput.addEventListener("click", click_the_button);

function click_the_button(event, btn) {
  inputFile.click();
  event.preventDefault();
};