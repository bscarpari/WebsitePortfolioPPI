const menuOpen = document.querySelector(".menu");
const menuClose = document.querySelector(".close");
const overlay = document.querySelector(".overlay");

menuOpen.addEventListener("click", () => {
  return overlay.classList.add("overlay--active");
});

menuClose.addEventListener("click", () => {
  return overlay.classList.remove("overlay--active");
});
