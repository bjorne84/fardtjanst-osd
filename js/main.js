const menuBtn = document.querySelector(".hamburgerBtn ");
const closeBtn = document.querySelector(".closeBtn ");
const menuHolder = document.querySelector(".navHolder");
const mainForms = document.querySelector(".mainForms");
mainForms;
let menuOpen = false;
menuBtn.addEventListener("click", () => {
  if (!menuOpen) {
    menuBtn.classList.add("open");
    menuOpen = true;
    menuHolder.style.display = "block";
    mainForms.style.display = "none";
  } else {
    menuBtn.classList.remove("open");
    menuOpen = false;
  }
});

function closeFunction() {
  menuBtn.classList.remove("open");
  menuOpen = false;
  menuHolder.style.display = "none";
  mainForms.style.display = "block";
  console.log("hej");
}

//Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
