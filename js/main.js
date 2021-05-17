const menuBtn = document.querySelector(".hamburgerBtn ");
const menuHolder = document.querySelector(".navHolder");
let menuOpen = false;
menuBtn.addEventListener("click", () => {
  if (!menuOpen) {
    menuBtn.classList.add("open");
    menuOpen = true;
    menuHolder.style.display = "block";
  } else {
    menuBtn.classList.remove("open");
    menuOpen = false;
  }
});
