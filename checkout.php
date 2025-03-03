<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - KeyboardMaster</title>
    <link rel="stylesheet" href="checkout.css">
    <link rel="stylesheet" href="home.css">
    <link href="all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.png" type="image/png">
  </head>
  <body>
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
          <a href="Blog.html">Blog</a>
          <a href="contactus.php">Contact</a>
        </div>
      </div>
      <div class="right-logos">
        <div class="userIcon">
          <a href="login.html">
            <img src="userIcon.png" alt="User Icon">
          </a>
        </div>
        <div class="userBasket">
          <a href="checkout.php"> 🛒 </a>
        </div>
      </div>
    </div>
    <div id="terminusSide" class="sidebar">
          <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">×</a>
          <a href="about.html">About</a>
          <a href="keyboards.php">Keyboards</a>
          <a href="blog.html">Our Mission</a>
          <a href="contactus.php">Contact</a>
      </div>
    <main class="checkout-container">
      <div class="checkout-form">
        <section class="contact-section">
          <h2>Contact</h2>
          <div class="form-group">
            <input type="text" placeholder="Email or mobile phone number">
          </div>
          <div class="checkbox-group">
            <input type="checkbox" id="newsletter">
            <label for="newsletter">Email me with news and offers</label>
          </div>
        </section>
        <section class="delivery-section">
          <h2>Delivery</h2>
          <div class="form-group">
            <select>
              <option>United States</option>
              <option>Canada</option>
              <option>United Kingdom</option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group">
              <input type="text" placeholder="First name (optional)">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Last name">
            </div>
          </div>
          <div class="form-group">
            <input type="text" placeholder="Address">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Apartment, suite, etc. (optional)">
          </div>
          <div class="form-row">
            <div class="form-group">
              <input type="text" placeholder="City">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Postal code (optional)">
            </div>
          </div>
          <div class="checkbox-group">
            <input type="checkbox" id="save-info">
            <label for="save-info">Save this information for next time</label>
          </div>
        </section>
        <section class="shipping-section">
          <h2>Shipping method</h2>
          <div class="shipping-option">
            <div class="shipping-option-text">
              <span>Standard</span>
              <span class="free-text">FREE</span>
            </div>
          </div>
        </section>
        <section class="payment-section">
          <h2>Payment</h2>
          <p class="secure-text">All transactions are secure and encrypted.</p>

          <!-- Apple Pay -->
          <div class="payment-option">
            <label for="apple-pay-radio" class="payment-header">
              <input type="radio" id="apple-pay-radio" name="payment-method" class="payment-radio">
              <span>Apple Pay</span>
              <span class="card-icons"><img src="apple.svg" alt="Apple Pay"></span>
            </label>
            <div class="payment-form d-none" id="apple-pay-form">
              <div class="form-group">
                <input type="text" placeholder="Card number">
              </div>
              <div class="form-row">
                <div class="form-group">
                  <input type="text" placeholder="Expiration date (MM / YY)">
                </div>
                <div class="form-group">
                  <input type="text" placeholder="Security code">
                </div>
              </div>
              <div class="form-group">
                <input type="text" placeholder="Name on card">
              </div>
              <div class="checkbox-group">
                <input type="checkbox" id="billing-address-apple">
                <label for="billing-address-apple">Use shipping address as billing address</label>
              </div>
            </div>
          </div>

          <!-- Credit/Debit Card -->
          <div class="payment-option">
            <label for="credit-card-radio" class="payment-header">
              <input type="radio" id="credit-card-radio" name="payment-method" class="payment-radio">
              <span>Credit/Debit Card</span>
              <span class="card-icons"><img src="credit-card.svg" alt="Credit Card"></span>
            </label>
            <div class="payment-form d-none" id="credit-card-form">
              <div class="form-group">
                <input type="text" placeholder="Card number">
              </div>
              <div class="form-row">
                <div class="form-group">
                  <input type="text" placeholder="Expiration date (MM / YY)">
                </div>
                <div class="form-group">
                  <input type="text" placeholder="Security code">
                </div>
              </div>
              <div class="form-group">
                <input type="text" placeholder="Name on card">
              </div>
              <div class="checkbox-group">
                <input type="checkbox" id="billing-address-credit">
                <label for="billing-address-credit">Use shipping address as billing address</label>
              </div>
            </div>
          </div>

          <button class="pay-button">Pay now</button>
        </section>
      </div>
      <aside class="order-summary">
        <div class="product-list d-none">
          <div class="product-item">
            <div class="product-image">
              <img src="egPic.jpg">
              <span class="quantity">1</span>
            </div>
            <div class="product-info">
              <h3>Mechanical Gaming Keyboard</h3>
              <p>RGB / Cherry MX Blue</p>
            </div>
            <div class="product-price">£149.99</div>
          </div>
        </div>
       
        <div class="summary-details">
          <div class="summary-row">
            <span>Subtotal</span>
            <span id="checkout-subtotal">£0.00</span>
          </div>
          <div class="summary-row">
            <span>Shipping</span>
            <span class="free-text">FREE</span>
          </div>
          <div class="summary-row total">
            <span>Total</span>
            <div class="total-amount">
              <span class="currency">Pound</span>
              <span id="checkout-total" class="amount">£0.00</span>
            </div>
          </div>
        </div>
      </aside>
    </main>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
  
        const subtotalPrice = sessionStorage.getItem('subtotalPrice');
        const totalPrice = sessionStorage.getItem('totalPrice');
        
        if (subtotalPrice) {
          document.getElementById('checkout-subtotal').innerText = `£${subtotalPrice}`;
        }
        if (totalPrice) {
          document.getElementById('checkout-total').innerText = `£${totalPrice}`;
        }
      });
    </script>
    <footer class="top">
      <div class="links">
        <div class="first-row">
          <div class="links-column">
            <h2>Get Started</h2>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="login.html">Login</a>
          </div>
          <div class="links-column">
            <h2>News</h2>
            <a href="shop.php">Keyboards</a>
            <a href="#">Accessories</a>
            <a href="configurator">Configurator</a>
            <a href="contactus.php">FAQs</a>
          </div>
          <div class="links-column">
            <h2>Overview</h2>
            <a href="#">Terms Of Use</a>
            <a href="contactus.php">Contact</a>
            <a href="#">Privacy Policy</a>
            <a href="contactus.php">Support</a>
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
    <script src="darkmode.js"></script>
  </body>
</html>
