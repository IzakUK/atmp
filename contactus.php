<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="icon" href="favicon.png" type="image/png" />
  </head>
  <body>
    <div class="terminusTopBanner">
      <!-- All the elements for the top banner of the page, it's set to sticky for now. -->
      <div class="menuOption">☰</div>
      <div class="bannerFormat">
        <div class="LBannerLinks">
          <a href="about.php">About</a>
          <a href="keyboards.php">Keyboards</a>
        </div>

        <a href="index.php">
          <!-- Link for the logo -->
          <img src="TerminusLogo.png" alt="Terminus Logo" class="logo" />
        </a>

        <div class="RBannerLinks">
          <a href="misc.php">Misc.</a>
          <a href="contactus.php">Contact</a>
        </div>
      </div>
      <div class="right-logos">
        <div class="userIcon">
          <a href="login.php">
            <img src="userIcon.png" alt="User Icon" />
          </a>
        </div>
        <div class="userBasket">🛒</div>
      </div>
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
            <form class="contact-form">
                <div class="form-name">
                    <input type="text" name="First Name" placeholder="First Name" required>
                    <input type="text" name="Last Name" placeholder="Last Name" required>
                </div>
                <input type="email" name="Email Address" placeholder="Email Address" required>
                <textarea name="Message" rows="7" placeholder="Message" required></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>
    
 
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
 
