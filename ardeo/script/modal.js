var modal = document.getElementById("modalWin");
var btn = document.getElementById("modalBtn");
var span = document.getElementsByClassName("close")[0];
var navbar = document.getElementById("navbar");

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
  navbar.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  navbar.style.display = "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
  modal.style.display = "none";
  }
} 