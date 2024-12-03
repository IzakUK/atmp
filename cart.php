<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="cart.css" />
    <link rel="icon" href="favicon.png" type="image/png" />
  </head>
  <body>
    <!-- Top Banner Section -->
    <div class="terminusTopBanner">
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
            <a href="blog.php">Blog</a>
            <a href="contactus.php">Contact</a>
        </div>
      </div>
      <div class="right-logos">
        <div class="userIcon">
          <a href="login.php">
            <img src="userIcon.png" alt="User Icon" />
          </a>
        </div>
        <div class="userBasket">
            <a href="cart.php">🛒</a>
        </div>
      </div>
    </div>

   
            <div class="shopping-cart">
                <div class="cart-container">
                    <h1>Shopping Cart</h1>
                    <div class="cart-header">
                        <div class="header-item">Product Name</div>
                        <div class="header-item">Product Image</div>
                        <div class="header-item">Price</div>
                        <div class="header-item">Quantity</div>
                        <div class="header-item">Total Price</div>
                        <div class="header-item">Delete</div>
                    </div>
                    <div class="cart-item">
                        <div class="item-name">Mechanical Keyboard</div>
                        <div class="item-image"><img src="featured2.jpg" alt="Product Image" class="product-img"></div>
                        <div class="item-price">£<span class="price-value">10.00</span></div>
                        <div class="item-quantity">
                            <button class="qty-btn" onclick="decreaseQty()">-</button>
                            <input type="number" value="1" class="quantity-input">
                            <button class="qty-btn" onclick="increaseQty()">+</button>
                        </div>
                        <div class="item-total-price">£<span class="total-price-value">10.00</span></div>
                        <button class="delete-btn">Delete</button>
                    </div>

                    <div class="cart-item">
                        <div class="item-name">Gaming Keyboard</div>
                        <div class="item-image"><img src="featured2.jpg" alt="Product Image" class="product-img"></div>
                        <div class="item-price">£<span class="price-value">10.00</span></div>
                        <div class="item-quantity">
                            <button class="qty-btn" onclick="decreaseQty()">-</button>
                            <input type="number" value="1" class="quantity-input">
                            <button class="qty-btn" onclick="increaseQty()">+</button>
                        </div>
                        <div class="item-total-price">£<span class="total-price-value">10.00</span></div>
                        <button class="delete-btn">Delete</button>
                    </div>

                    <div class="cart-item">
                        <div class="item-name">Compact Keyboard</div>
                        <div class="item-image"><img src="featured2.jpg" alt="Product Image" class="product-img"></div>
                        <div class="item-price">£<span class="price-value">10.00</span></div>
                        <div class="item-quantity">
                            <button class="qty-btn" onclick="decreaseQty()">-</button>
                            <input type="number" value="1" class="quantity-input">
                            <button class="qty-btn" onclick="increaseQty()">+</button>
                        </div>
                        <div class="item-total-price">£<span class="total-price-value">10.00</span></div>
                        <button class="delete-btn">Delete</button>
                    </div>
                    
                    <div class="order-summary">
                        <div class="summary-details">
                            <div class="summary-item">
                                <p>Total Items: <span id="total-items">1</span></p>
                            </div>
                            <div class="summary-item">
                                <p>Total Price: £<span id="total-price">10.00</span></p>
                            </div>
                        </div>
                        <div class="summary-checkout">
                            <button class="checkout-btn" onclick="location.href='checkout.php'">Proceed to Checkout</button>
                        </div>
                    </div>
            
                </div>
            </div>
            <script src="app.js"></script>
            
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
       
      
