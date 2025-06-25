document.addEventListener("DOMContentLoaded", function () {
  // Mobile Menu
  const mobileMenu = document.querySelector(".navbar__mobile-menu-items");
  const toggleButton = document.querySelector(".navbar__mobile-menu-toggle");

  toggleButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("active");
  });
});
