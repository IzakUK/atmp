<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminus</title>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="favicon.png" type="image/png">
</head>
<body>
    <div class="terminusTopBanner"> <!-- All the elements for the top banner of the page, it's set to sticky for now. Does need optimisation to ensure everything is centred-->
        <div class="menuOption">☰</div>
        <div class="bannerFormat">
            
            <div class="LBannerLinks">
                <a href="about.php">About</a>
                <a href="keyboards.php">Keyboards</a> <!-- We probably need a better name, I'm thinking Products, but I will keep it as this just for now.-->
            </div>

            <a href="index.php"> <!-- Link for the logo -->
                <img src="TerminusLogo.png" alt="Terminus Logo" class="logo">
            </a>

            <div class="RBannerLinks">
                <a href="blog.php">Blog</a>                <!-- placeholder-->
                <a href="contactus.php">Contact</a>
            </div>

        </div>
        <div class = "right-logos">
            <div class="userIcon">
                <a href="login.php">
                    <img src="userIcon.png" alt="User Icon">
                </a>
            </div>
            <div class="userBasket">
                <a href="cart.php">🛒</a>
            </div> <!-- This will be changed in future to have the green colour implemented-->
        </div>
    </div>
    
    <!-- Blog Page-->

    <!-- Blog page top Banner -->
    <div class="blog-page-banner">
      <div>
          <h1>Explore the World of Mechanical Keyboards</h1>
          <p>Unleash your creativity, performance, and style. Read more below.</p>
      </div>
  </div>

  <!-- Blog Section -->
  <div class="blog-section">

      <!-- Blog Post 1 -->
      <div class="blog-post">
          <img src="featured3.jpg"  class="blog-post-image">
          <div class="blog-post-text">
              <h3 class="blog-post-title">Mechanical Keyboards 101: A Beginner's Guide</h3>
              <p class="blog-post-description">Learn the basics, from switch types to why mechanical keyboards are superior for typing and gaming.</p>
              <button class="read-more-btn">Read More</button>
          </div>
      </div>
      <hr class="divider">

      <!-- Blog Post 2 -->
      <div class="blog-post">
          <img src="featured1.jpg" class="blog-post-image">
          <div class="blog-post-text">
              <h3 class="blog-post-title">How to Choose the Right Mechanical Keyboard for You</h3>
              <p class="blog-post-description">Find the perfect keyboard that matches your needs—whether you’re a gamer, programmer, or casual typist.</p>
              <button class="read-more-btn">Read More</button>
          </div>
      </div>
      <hr class="divider">

      <!-- Blog Post 3 -->
      <div class="blog-post">
          <img src="featured2.jpg" class="blog-post-image">
          <div class="blog-post-text">
              <h3 class="blog-post-title">The Key Switch Breakdown: Which Switch is Right for You?</h3>
              <p class="blog-post-description">Discover the differences between tactile, linear, and clicky switches and find your perfect match.</p>
              <button class="read-more-btn">Read More</button>
          </div>
      </div>
      <hr class="divider">

      <!-- Blog Post 4 -->
      <div class="blog-post">
          <img src="featured4.jpg" class="blog-post-image">
          <div class="blog-post-text">
              <h3 class="blog-post-title">DIY Mechanical Keyboards: A Beginner’s Build Guide</h3>
              <p class="blog-post-description">Interested in building your own mechanical keyboard? This step-by-step guide is for you.</p>
              <button class="read-more-btn">Read More</button>
          </div>
      </div>
      <hr class="divider">

  </div>

    

    <section2 style="padding-top: 0px;">
        <footer class="top">
          <div class="links">
            <div class="first-row">
              <div class="links-column">
                <h2>Get Started</h2>
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="login.php">Login</a>
                
              </div>
  
              <div class="links-column">
                <h2>News</h2>
                <a href="shop.php">Keyboards</a>
                <a href="#">Accessories</a>
                <a href="configurator">Configurator</a>
                <a href="faq.php">FAQs</a>
              </div>
              
              <div class="links-column">
                <h2>Overview</h2>
                <a href="#">Terms Of Use</a>
                <a href="#">Contact</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Support</a>
              </div>
            </div>
  
            <div class="second-row">
              <div class="links-column socials-column">
                <h2>Social Media</h2>
                <p>
                  Follow us on:
                </p>
                <div class="socials">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-instagram"></a>
                  <a href="#" class="fa fa-linkedin"></a>
                  <a href="#" class="fa fa-github"></a>
                </div>
              </div>
              <div class="store-logos">
                <img src="https://cdn.afterdawn.fi/v3/news/original/get-it-on-google-play.png" id="play-store">
                <img src="https://digitopoly.files.wordpress.com/2016/06/app-store-logo.png" id="apple-store">
              </div>
            </div>
  
          </div>
        </footer>
        <footer class="bottom">
          <p class="copyright">© 2024 All rights reserved</p>
          <div class="legal">
            <a> License </a>
            <a> Terms </a>
            <a> Privacy </a>
          </div>
        </footer>
      </section2></body></html>