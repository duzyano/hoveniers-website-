document.addEventListener("DOMContentLoaded", function () {
  // Mobile Menu
  const mobileMenu = document.querySelector(".navbar__mobile-menu-items");
  const toggleButton = document.querySelector(".navbar__mobile-menu-toggle");

  toggleButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("active");
  });
});

// Navigation background on scroll
window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  const navbarLink = document.querySelector(".navbar__menu-item");

  if (window.scrollY > 0) {
    navbar.classList.add("navbar--scroll");
  } else {
    navbar.classList.remove("navbar--scroll");
  }

  if (this.window.scrollY > 0) {
    navbarLink.style.color = "red";
    console.log(navbarLink);
  } else {
    navbarLink.style.color = "#fff";
  }
});
