<!DOCTYPE html>
<html lang="en">
<head> <!-- Default things, leave as is. -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminus</title>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="swiper-bundle.min.css">
</head>
<body> <!-- Top Banner PLEASE BE CAUTIOUS WITH THIS AND THE CSS IF EDITING. -->
    <div class="terminusTopBanner">
        <div class="menuOption" onclick="openNav()">☰</div>
        <div class="bannerFormat">
            <div class="LBannerLinks">
                <a href="about.php">About</a>
                <a href="keyboards.php">Keyboards</a>
            </div>

            <a href="index.php">
                <img src="TerminusLogo.png" alt="Terminus Logo" class="logo">
            </a>

            <div class="RBannerLinks">
                <a href="misc.php">Misc.</a>
                <a href="contactus.php">Contact</a>
            </div>
        </div>
        <div class="right-logos">
            <div class="userIcon">
                <a href="login.php">
                    <img src="userIcon.png" alt="User Icon">
                </a>
            </div>
            <div class="userBasket">
                <a href="checkout.php">🛒</a>
            </div>
        </div>
    </div>
    <!-- Search Bar -->
    <section class="search-bar">
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search">
        </div>
    </section>
    
    <!-- Sidebar -->
    <div id="terminusSide" class="sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">×</a>
        <a href="about.php">About</a>
        <a href="keyboards.php">Keyboards</a>
        <a href="misc.php">Our Mission</a>
        <a href="contactus.php">Contact</a>
    </div>

    <!-- Homepage Banner Section -->
    <section class="home-banner" id="home">
        <div class="banner-box" style="background: url('homebanner.jpg') no-repeat; background-size: cover; background-position: center;">
            <div class="contents">
                <span>For Gamers & Enthusiasts</span>
                <h3>Find Your Perfect Click</h3>
                <p>Mechanical keyboards for precision, style, and unmatched performance.</p>
                <div class="button-group">
                    <a href="#" class="shop-btn">Shop Now</a>
                    <a href="#" class="l">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Categories Section -->
    <section class="categories">
        <div class="categories-container">
            <div class="categories-left">
                <h1>Featured Categories</h1>
                <p>At Terminus, we bring you not only an extensive range of keyboards 
                    for every purpose but also the tools and accessories to enhance your 
                    typing and gaming experience. <br /> From ergonomic designs to custom mods, 
                    our collection has something for everyone.
                </p>
                <a href="#" class="categories-btn">Go to Shop</a>
            </div>
            <br>
            <div class="categories-right">
                <div class="featured-category" style="background: url(featured1.jpg)">
                    <h5>Gaming Keyboards</h5>
                </div> 
                <div class="featured-category" style="background: url(featured2.jpg)">
                    <h5>Keyboard Accessories</h5>
                </div> 
                <div class="featured-category"style="background: url(featured3.jpg)">
                    <h5>Compact Keyboards</h5>
                </div> 
                <div class="featured-category" style="background: url(featured4.jpg)">
                    <h5>Custom Keyboard Kits</h5>
                </div> 
                <div class="featured-category" style="background: url(featured5.jpg)">
                    <h5>Wireless and Multi-Device Keyboards</h5>
                </div> 
                <div class="featured-category" style="background: url(featured6.jpg)">
                    <h5>Keyboard Switches & Mods</h5>
                </div> 
            </div>
        </div>
    </section>
    <br>
    <!-- Why Choose Us Section -->
    <section class="why-choose-us" id="why-choose-us">
        <div class="container">
            <h2 class="section-title">Why Choose Us?</h2>
            <div class="reasons">
                <div class="reason">
                    <i class="fas fa-check-circle"></i>
                    <h3>Unmatched Quality</h3>
                    <p>Crafted for durability and precision, our keyboards 
                        deliver unrivaled performance, trusted by gamers, coders, and creators 
                        alike.
                    </p>
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

    <!-- Footer -->
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
                    <p>Follow us on:</p>
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

    <script>
        function openNav() {
            document.getElementById("terminusSide").style.width = "20vh";
        }
        function closeNav() {
            document.getElementById("terminusSide").style.width = "0";
        }
    </script>
</body>
</html>
