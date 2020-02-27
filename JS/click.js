let overlay = document.getElementById("overlay");
let inabout = document.getElementById("inabout");
let about = document.getElementById("about");
let close = document.getElementById("close");
let close2 = document.getElementById("close2");
let close3 = document.getElementById("close3");
let blur = document.getElementById("blur");
let gallary = document.getElementById("gallary");
// let contact = document.getElementById("contact");
// let form = document.getElementById("form");

about.addEventListener("click", onAboutClick, false);
gallary.addEventListener("click", onGallaryClick, false);
// contact.addEventListener("click", onContactClick, false);
close.addEventListener("click", onCloseClick, false);
close2.addEventListener("click", onCloseClick2, false);
// close3.addEventListener("click", onCloseClick3, false);
overlay.addEventListener("click", onOverClick, false);

function onAboutClick(event) {
  inabout.className = "active";
  overlay.className = "active";
  close.className = "active";
  blur.className = "active";
}

function onGallaryClick(event) {
  ingallary.className = "active";
  overlay.className = "active";
  close2.className = "active";
  blur.className = "active";
}

// function onContactClick(event) {
//   form.className = "active";
//   overlay.className = "active";
//   close3.className = "active";
//   blur.className = "active";
// }

function onCloseClick(event) {
  inabout.className = " ";
  overlay.className = " ";
  close.className = " ";
  blur.className = " ";
}

function onCloseClick2(event) {
  ingallary.className = " ";
  overlay.className = " ";
  close2.className = " ";
  blur.className = " ";
}

// function onCloseClick3(event) {
//   form.className = " ";
//   overlay.className = " ";
//   close3.className = " ";
//   blur.className = " ";
// }

function onOverClick(event) {
  inabout.className = " ";
  ingallary.className = " ";
  // form.className = " ";
  overlay.className = " ";
  close.className = " ";
  blur.className = " ";
}
