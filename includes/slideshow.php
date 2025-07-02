<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="./assets/css/style.css">
<script>
  var slideIndex = 0;
  carousel();

  function carousel() {
    var x = document.getElementsByClassName("mySlides");

    slideIndex++;
    if (slideIndex >= x.length) {
      slideIndex = 0;
    }

    if (x.length > 0) {
      const currentActive = document.querySelector(".mySlides.active");
      currentActive.setAttribute("z-index", "1");


      x[slideIndex].setAttribute("z-index", "2");
      x[slideIndex].classList.add("active");

      setTimeout(() => {
        currentActive.classList.remove("active");
      }, 1000);
    }

    setTimeout(carousel, 5000);
  }
</script>
<div class="slider">
  <img class="mySlides active" src="./assets/images/a8db60_9f168361c12f4ad5800e1acf22f49080_mv2 (1).jpeg">
  <img class="mySlides" src="./assets/images/a8db60_379dcd1d20d04347b8fac28edbeb45c4_mv2.jpeg">
  <img class="mySlides" src="./assets/images/a8db60_e7ba32f754a8415588e6327b5647b8d6_mv2.webp">
  <h1 class="slider__title">Welkom bij de website van Hendrik Hogendijk, hovenier in de regio Utrecht, Zeist en de Bilt.</h1>
</div>