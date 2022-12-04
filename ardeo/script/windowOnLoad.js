/* Get Cancel Button */
const menu = document.querySelector(".menu-list");
/* Get Fas-fa Bars Button */
const menuBtn = document.querySelector(".menu-btn");
/* Get Cancel Button */
const cancelBtn = document.querySelector(".cancel-btn");

/* Responsive navbar opening */
menuBtn.onclick = () => {
  menu.classList.add("active");
}

/* Responsive navbar closing */
cancelBtn.onclick = () => {
  menu.classList.remove("active");
}