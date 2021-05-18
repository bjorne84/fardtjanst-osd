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
