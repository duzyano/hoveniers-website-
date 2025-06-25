<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="../assets/css/slideshow.css">
<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1;}
  if (x.length > 0) {
    x[slideIndex-1].style.display = "block";
  }
  setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>
<div class="slider">
<img class="mySlides" src="../assets/images/a8db60_9f168361c12f4ad5800e1acf22f49080_mv2 (1).jpeg">
<img class="mySlides" src="../assets/images/a8db60_379dcd1d20d04347b8fac28edbeb45c4_mv2.jpeg">
<img class="mySlides" src="../assets/images/a8db60_e7ba32f754a8415588e6327b5647b8d6_mv2.webp">
<h1>Welkom bij de website van Hendrik Hogendijk, hovenier in de regio Utrecht, Zeist en de Bilt.</h1>
</div>

