<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>travel web</title>
  <!-- swiper css cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- font-awsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- css link -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <!-- header section start -->

  <section class="header">
    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </section>

  <!-- header section end -->

  <!-- home section start -->
  <section class="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg)no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel around the world</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>
        <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg)no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover the new places</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>
        <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg)no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your time worthwhile</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>
  <!-- home section end -->

  <!-- service section start -->
  <section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
      <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>adventure</h3>
      </div>
      <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>tour guide</h3>
      </div>
      <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>trekking</h3>
      </div>
      <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>camp fire</h3>
      </div>
      <div class="box">
        <img src="images/icon-5.png" alt="">
        <h3>off road</h3>
      </div>
      <div class="box">
        <img src="images/icon-6.png" alt="">
        <h3>camping</h3>
      </div>
    </div>
  </section>
  <!-- service section end -->

  <!-- about section start  -->
  <section class="home-about">
    <div class="image">
      <img src="images/about-img.jpg" alt="">
    </div>
  <div class="content">
    <h3>about us</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste ea sint illum aliquid fugit. Necessitatibus exercitationem impedit recusandae doloremque. Blanditiis et possimus necessitatibus veritatis officia quasi, consectetur natus non cupiditate?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, autem.</p>
    <a href="about.php" class="btn">read more</a>
  </div>
  </section>
  <!-- about section end -->

  <!-- home-package section start -->
  <section class="home-package">
    <h3 class="heading-title">our packages</h3>
    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/img-1.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, commodi.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/img-2.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, commodi.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/img-3.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, commodi.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
  </section>
  <!-- home-package section end -->

  <!-- offer section start -->
  <section class="offer">
    <h1>upto 50% off</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro dolorum explicabo id facilis voluptatem facere, aliquid suscipit cupiditate repudiandae, sint necessitatibus, fuga error vel earum corrupti laborum architecto culpa esse.</p>
    <a href="book.php" class="btn">book now</a>
  </section>
  <!-- offer section end -->

  <!-- footer section start -->

  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i> about us</a>
        <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i> term of use</a>
      </div>
      <div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
        <a href="#"><i class="fas fa-phone"></i> +999-888-7777</a>
        <a href="#"><i class="fas fa-envelope"></i> pyaesonepine@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i> yangon, myanmar - 179384</a>
      </div>
      <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
        <a href="#"><i class="fab fa-twitter"></i> twitter</a>
        <a href="#"><i class="fab fa-instagram"></i> instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
      </div>
    </div>
    <div class="credit">created by <span>KitDEV</span> | all rights reserved!</div>
  </section>

  <!-- footer section end -->
  <!-- swiper script link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <!-- custom script  -->
  <script src="js/script.js"></script>
</body>

</html>