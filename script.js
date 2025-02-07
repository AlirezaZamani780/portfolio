// Wait for the window to load completely before removing the preloader
window.addEventListener("load", function () {
    console.log("Page Loaded!");
    this.setTimeout(function(){
       document.getElementById("preloader").style.display = "none";  
    },1000)
   
});

document.addEventListener("DOMContentLoaded", function () {
  const menuIcon = document.createElement("div");
  menuIcon.classList.add("menu-icon");
  menuIcon.innerHTML = "&#9776;"; // Hamburger icon

  document
    .querySelector("header")
    .insertBefore(menuIcon, document.querySelector("nav"));

  menuIcon.addEventListener("click", () => {
    menuIcon.classList.toggle("active");
    document.querySelector("nav ul").classList.toggle("show");
  });
});
