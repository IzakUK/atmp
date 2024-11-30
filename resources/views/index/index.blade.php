<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminus</title>

    <link rel="stylesheet" href="{{asset('')}}/static/home.css">
    <link rel="icon" href="{{asset('')}}/static/favicon.png" type="image/png">
    <link href="{{asset('')}}/static/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('')}}/static/swiper-bundle.min.css">

</head>
<body>
    <div class="terminusTopBanner"> <!-- All the elements for the top banner of the page, it's set to sticky for now. Does need optimisation to ensure everything is centred-->
        <div class="menuOption">☰</div>
        <div class="bannerFormat">
            
            <div class="LBannerLinks">
                <a href="about.html">About</a>
                <a href="keyboards.html">Keyboards</a> <!-- We probably need a better name, I'm thinking Products, but I will keep it as this just for now.-->
            </div>

            <a href="index.html"> <!-- Link for the logo -->
                <img src="{{asset('')}}/static/TerminusLogo.png" alt="Terminus Logo" class="logo">
            </a>

            <div class="RBannerLinks">
                <a href="misc.html">Misc.</a> <!-- placeholder-->
                <a href="contact.html">Contact</a>
            </div>

        </div>
        <div class="right-logos">
            <div class="userIcon">
                <a href="{{url('userlogin')}}">
                <a href="{{url('userreg')}}">
                    <img src="{{asset('')}}/static/userIcon.png" alt="User Icon">
                </a>
            </div>
            <div class="userBasket">🛒</div> <!-- This will be changed in future to have the green colour implemented-->
        </div>
    </div>
    
    <!--images slider section-->

    <section class="home" id="home">
        <div class="swiper image-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background: url(static/image_slider1.jpg) no-repeat;">
                        <div class="contents">
                            <span>For Gamers</span>
                            <h3>Power Up Your Gaming Setup</h3>
                            <p>Experience the speed and precision of top-tier mechanical keyboards</p>
                            <a href="#" class="btn">Buy Now</a>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="box second" style="background: url(static/image_slider2.jpg) no-repeat;">
                        <div class="contents">
                            <span>Looking for something more compact?</span>
                            <h3>Compact Designs, Maximum Impact</h3>
                            <p> Perfect for students and professionals—small, stylish, and powerful. </p>
                            <a href="#" class="btn">Buy Now</a>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="box" style="background: url(static/image_slider3.jpg) no-repeat;">
                        <div class="contents">
                            <span>Something Customisable?</span>
                            <h3>Your Keyboard, Your Way</h3>
                            <p>Explore hot-swappable keyboards and build your dream setup.</p>
                            <a href="#" class="btn">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>        
        </div>

    </section>


    <section class="why-choose-us" id="why-choose-us">
        <div class="container">
          <h2 class="section-title">Why Choose Us?</h2>
          <div class="reasons">
            <div class="reason">
                <i class="fas fa-check-circle"></i>
                <h3>Unmatched Quality</h3>
                <p>Crafted for durability and precision, our keyboards 
deliver unrivaled performance, trusted by gamers, coders, and creators 
alike.</p>
            </div>

            <div class="reason">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Lightning-Fast Shipping</h3>
                <p>Your perfect keyboard, delivered to your doorstep in record time with our trusted and efficient delivery network.</p>
            </div>

            <div class="reason">
                <i class="fa-solid fa-keyboard"></i>
                <h3>Tailored to You</h3>
                <p>Build a keyboard that's as unique as you are, with endless customization options for style, function, and comfort.</p>
            </div>

          </div>
        </div>
      </section>

      


      

    <!-- link for js swiper class-->
    <script src="{{asset('')}}/static/swiper-bundle.min.js"></script> 
    <script src="{{asset('')}}/static/app.js"></script>


<section2 style="padding-top: 0px;">
        <footer class="top">
          <div class="links">
            <div class="first-row">
              <div class="links-column">
                <h2>Get Started</h2>
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="login.html">Login</a>
                
              </div>
    
              <div class="links-column">
                <h2>News</h2>
                <a href="shop.html">Keyboards</a>
                <a href="#">Accessories</a>
                <a href="configurator">Configurator</a>
                <a href="faq.html">FAQs</a>
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