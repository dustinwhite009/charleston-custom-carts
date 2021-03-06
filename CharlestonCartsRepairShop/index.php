<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>Charleston Carts Repair Shop</title>
  <link rel="stylesheet" type="text/css" href="Styles.css"/>
  </head>
  <body>

    <div class="sidenav">
        <?php echo '<a href="index.php">Home</a>';?>
        <?php echo '<a href="customers.php">Customers</a>';?>
        <a href="">Inventory</a>
        <a href="">Repairs</a>
      </ul>
    </div>

    <div class="content">
      <h1>Charleston Carts Repair Shop</h1>

      <div class="container">

        <div class="gallery fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/Charleston-Custom-Golf-Carts-01-scaled.jpg" alt="Blue Cart" style="width: 80%">
        </div>

        <div class="gallery fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/Charleston-Custom-Golf-Carts-13-scaled.jpg" alt="Blue Cart" style="width: 80%">
        </div>

        <div class="gallery fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/Charleston-Custom-Golf-Carts-20-scaled.jpg" alt="Blue Cart" style="width: 80%">
        </div>

        <div class="gallery fade">
          <div class="numbertext">4 / 3</div>
          <img src="images/Charleston-Custom-Golf-Carts-27-scaled.jpg" alt="Blue Cart" style="width: 80%">
        </div>

        <div class="gallery fade">
          <div class="numbertext">5 / 3</div>
          <img src="images/Charleston-Custom-Golf-Carts-37-scaled.jpg" alt="Blue Cart" style="width: 80%">
        </div>

        <div class="gallery fade">
          <div class="numbertext">6 / 3</div>
          <img src="images/Charleston-Custom-Golf-Carts-83-scaled.jpg" alt="Blue Cart" style="width: 80%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
    </div>

      </div>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("gallery");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
  </script>
  </body>
</html>
