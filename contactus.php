<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
  </head>
  <body> <!-- Top Banner PLEASE BE CAUTIOUS WITH THIS AND THE CSS IF EDITING. -->
    <div class="terminusTopBanner">
        <div class="bannerOptions">
            <div class="menuOption" onclick="toggleNav()">☰</div>
            <div id="search-icon" onclick="toggleSearch()">🔍</div>
        </div>
        <div class="bannerFormat">
            <div class="LBannerLinks">
                <a href="about.html">About</a>
                <a href="keyboards.php">Keyboards</a>
            </div>
            <a href="index.html">
                <img src="TerminusLogo.png" alt="Terminus Logo" class="logo">
            </a>

            <div class="RBannerLinks">
                <a href="blog.html">Blog</a>
                <a href="contactus.html">Contact</a>
            </div>
        </div>
        <div class="bannerOptions">
            <div class="userIcon">
                <a href="login.html">
                    <img src="userIcon.png" alt="User Icon">
                </a>
            </div>
            <div class="userBasket">
                <a href="cart.html">🛒</a>
            </div>
        </div>
    </div>
    <!-- Search Bar -->
    <section id="search-bar" class="search-bar" style="display: none;">
        <div class="search-container">
        <input type="text" name="query"class="search-input" placeholder="Search" required>
        <button type="submit">search</button>
        </div>
        <div class="theme-toggle">
            <button id="themeToggle" class="theme-toggle-button" onclick="toggleTheme()">🌙</button>
        </div>
    </section>

    <!-- Sidebar -->
    <div id="terminusSide" class="sidebar">
        <a href="about.html">About</a>
        <a href="keyboards.php">Keyboards</a>
        <a href="misc.html">Our Mission</a>
        <a href="contactus.html">Contact</a>
    </div>

     
    <!-- Contact Us Page-->
  
    <section class="contact">
        <div class="container contact-container">
            <!-- Left Section -->
            <div class="contact-left">
                <div class="contact-left-image">
                    <img src="favicon.png" alt="Contact Us">
                </div>
                <h2>Contact Us!</h2>
                <p>
                    We would love to hear from you! Whether you have a question about our products or need help with your order, our team is here to assist you.
                </p>
                <ul class="contact-details">
                    <li><strong>Address:</strong> Aston, Birmingham</li>
                    <li><strong>Phone Number:</strong> +1 234 567 890</li>
                    <li><strong>Email:</strong> support@terminus.com</li>
                    <li><strong>Opening Hours:</strong> Monday - Friday, 9:00 AM - 6:00 PM</li>
                </ul>
            </div>
    
            <!-- Right Section (Form) -->
            <?php
            $Message = "";
            if(isset($_GET['error']))
            {
            $Message = " Please Fill in the Blanks ";
            echo '<div class="alert alert-danger">'.$Message.'</div>';
            }
            ?>
            <form class="contact-form" action="process-contactform.php" method="post">
                <div class="form-name">
                    <input type="text" name="FirstName" placeholder="FirstName" required>
                    <input type="text" name="LastName" placeholder="LastName" required>
                </div>
                <input type="email" name="EmailAddress" placeholder="EmailAddress" required>
                <textarea name="Message" rows="7" placeholder="Message" required></textarea>
                <button type="submit" name = "submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>
    
 
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
      <script>
        function toggleNav() {
            const sidebar = document.getElementById("terminusSide");
            if (sidebar.style.width === "20vh") {
                sidebar.style.width = "0"; // Close the menu
            } else {
                sidebar.style.width = "20vh"; // Open the menu
            }
        }
        function toggleSearch() {
            const searchBar = document.getElementById('search-bar');
            if (searchBar.style.display === 'none') {
                searchBar.style.display = 'flex';
            } else {
                searchBar.style.display = 'none';
            }
        }
    </script>
    <script src="darkmode.js"></script>
    </section2></body></html>
 
