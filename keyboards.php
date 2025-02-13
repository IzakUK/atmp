<?php

$databases = include 'database.php';
$conn = $databases['conn'];

$sql = "SELECT id, name, description,  price, category, stock FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $products[] = $row;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terminus</title>
    <link rel="stylesheet" href="keyboards.css" />
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  </head>
  <body>
    <body> <!-- Top Banner PLEASE BE CAUTIOUS WITH THIS AND THE CSS IF EDITING. -->
      <div class="terminusTopBanner">
          <div class="right-logos">
              <div class="menuOption" onclick="openNav()">☰</div>
              <div id="search-icon" onclick="toggleSearch()">🔍</div>
          </div>
          <div class="bannerFormat">
              <div class="LBannerLinks">
                  <a href="about.html">About</a>
                  <a href="keyboards.html">Keyboards</a>
              </div>
  
              <a href="index.html">
                  <img src="TerminusLogo.png" alt="Terminus Logo" class="logo">
              </a>
  
              <div class="RBannerLinks">
                  <a href="blog.html">Blog</a>
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
                  <a href="cart.html">🛒</a>
              </div>
          </div>
      </div>
      <!-- Search Bar -->
      <section class="search-bar">
        <form action="search.php" method="GET">
          <div class="search-container">
          <input type="text" name="query"class="search-input" placeholder="Search" required>
          <button type="submit">search</button>
          </div>
      </section>
  
      <!-- Sidebar -->
      <div id="terminusSide" class="sidebar">
          <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">×</a>
          <a href="about.html">About</a>
          <a href="keyboards.html">Keyboards</a>
          <a href="misc.html">Our Mission</a>
          <a href="contactus.php">Contact</a>
      </div>

    <!-- Swiper -->
<div class="swiper-container">
  <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="homebanner.jpg" alt="Product 1"></div>
      <div class="swiper-slide"><img src="aboutus3.jpg" alt="Product 2"></div>
      <div class="swiper-slide"><img src="featured2.jpg" alt="Product 3"></div>
      <!-- we can More slides if needed -->
  </div>
  <!-- navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
 
</div>
<script>
  var mySwiper = new Swiper('.swiper-container', {
    
      direction: 'horizontal',
      loop: true,
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
      },

      // Navigation arrows
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },

    
  });
</script>




    <!-- Product Grid Section -->
    <div class="product-grid">
      <!-- Product Card 1 -->
      <div
        class="product-card"
        data-title="Keyboard 1"
        data-description="Add product information/description"
        data-price="£99.99"    
        data-image="featured5.jpg"
      >
        <div class="product-image">
          <img src="featured5.jpg" alt="Mechanical Keyboard 1" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 1</h3>
          <p class="product-description">Add product information/description</p>
          <div class="product-price">£99.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>

      <!-- Product Card 2 -->
      <div
        class="product-card"
        data-title="Keyboard 2"
        data-description="Add product information/description"
        data-price="£29.99"
        data-image="featured4.jpg"
      >
        <div class="product-image">
          <img src="featured4.jpg" alt="Mechanical Keyboard 2" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 2</h3>
          <p class="product-description">Add product information/description</p>
          <div class="product-price">£29.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>
      <!-- Product Card 3 -->
      <div
        class="product-card"
        data-title="Keyboard 3"
        data-description="Add product information/description."
        data-price="£9.99"
        data-image="featured1.jpg"
      >
        <div class="product-image">
          <img src="featured1.jpg" alt="Mechanical Keyboard 3" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 3</h3>
          <p class="product-description">Add product information/description</p>
          <div class="product-price">£9.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>
      <!-- Product Card 4 -->
      <div
        class="product-card"
        data-title="Keyboard 4"
        data-description="Add product information/description"
        data-price="£85.99"
        data-image="favicon.png"
      >
        <div class="product-image">
          <img src="favicon.png" alt="Mechanical Keyboard 4" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 4</h3>
          <p class="product-description">
            Add Product Information/ description
          </p>
          <div class="product-price">£85.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>
      <!-- Product Card 5 -->
      <div
        class="product-card"
        data-title="Keyboard 5"
        data-description="Add product information/description."
        data-price="£69.99"
        data-image="favicon.png"
      >
        <div class="product-image">
          <img src="favicon.png" alt="Mechanical Keyboard 1" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 5</h3>
          <p class="product-description">
            RGB backlighting, tactile switches, customizable keycaps.
          </p>
          <div class="product-price">£99.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>
      <!-- Product Card 6 -->
      <div
        class="product-card"
        data-title="Keyboard 6"
        data-description="RGB backlighting, tactile switches, customizable keycaps."
        data-price="£99.99"
        data-image="favicon.png"
      >
        <div class="product-image">
          <img src="favicon.png" alt="Mechanical Keyboard 1" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 6</h3>
          <p class="product-description">
            RGB backlighting, tactile switches, customizable keycaps.
          </p>
          <div class="product-price">£99.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>
      <!-- Product Card 7 -->
      <div
        class="product-card"
        data-title="Keyboard 7"
        data-description="RGB backlighting, tactile switches, customizable keycaps."
        data-price="£99.99"
        data-image="favicon.png"
      >
        <div class="product-image">
          <img src="favicon.png" alt="Mechanical Keyboard 1" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 7</h3>
          <p class="product-description">
            RGB backlighting, tactile switches, customizable keycaps.
          </p>
          <div class="product-price">£99.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>
      <!-- Product Card 8 -->
      <div
        class="product-card"
        data-title="Keyboard 8"
        data-description="RGB backlighting, tactile switches, customizable keycaps."
        data-price="£99.99"
        data-image="favicon.png"
      >
        <div class="product-image">
          <img src="favicon.png" alt="Mechanical Keyboard 1" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 8</h3>
          <p class="product-description">
            RGB backlighting, tactile switches, customizable keycaps.
          </p>
          <div class="product-price">£99.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>
      <!-- Product Card 9 -->
      <div
        class="product-card"
        data-title="Keyboard 9"
        data-description="RGB backlighting, tactile switches, customizable keycaps."
        data-price="£99.99"
        data-image="favicon.png"
      >
        <div class="product-image">
          <img src="favicon.png" alt="Mechanical Keyboard 1" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 9</h3>
          <p class="product-description">
            RGB backlighting, tactile switches, customizable keycaps.
          </p>
          <div class="product-price">£99.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>
      <!-- Product Card 10 -->
      <div
        class="product-card"
        data-title="Keyboard 10"
        data-description="RGB backlighting, tactile switches, customizable keycaps."
        data-price="£99.99"
        data-image="favicon.png"
      >
        <div class="product-image">
          <img src="favicon.png" alt="Mechanical Keyboard 1" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 10</h3>
          <p class="product-description">
            RGB backlighting, tactile switches, customizable keycaps.
          </p>
          <div class="product-price">£99.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>
      <!-- Product Card 11 -->
      <div
        class="product-card"
        data-title="Keyboard 11"
        data-description="RGB backlighting, tactile switches, customizable keycaps."
        data-price="£99.99"
        data-image="favicon.png"
      >
        <div class="product-image">
          <img src="favicon.png" alt="Mechanical Keyboard 1" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 11</h3>
          <p class="product-description">
            RGB backlighting, tactile switches, customizable keycaps.
          </p>
          <div class="product-price">£99.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>
      <!-- Product Card 12 -->
  
      <div
        class="product-card"
        data-title="Keyboard 12"
        data-description="RGB backlighting, tactile switches, customizable keycaps."
        data-price="£99.99"
        data-image="favicon.png"
      >
        <div class="product-image">
          <img src="favicon.png" alt="Mechanical Keyboard 1" />
        </div>
        <div class="product-info">
          <h3 class="product-title">Keyboard 12</h3>
          <p class="product-description">
            RGB backlighting, tactile switches, customizable keycaps.
          </p>
          <div class="product-price">£99.99</div>
          <button class="buy-button">Buy Now</button>
        </div>
      </div>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">&#8679;</a>
    <!--pop up display-->
    <div id="productModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-body">
          <div class="modal-image">
            <img src="" alt="Product Image" id="modalImage">
          </div>
          <div class="modal-details">
            <h2 id="modalTitle"></h2>
            <p id="modalDescription"></p>
            <div class="modal-rating">
              ★★★★☆ (4.5 / 5) <!-- rating -->
            </div>
            <p class="modal-price" id="modalPrice"></p>
            <button class="modal-button add-to-cart" id="addToCartButton">Add to Cart</button>
            <button class="modal-button save-later">Save for Later</button>
          </div>
        </div>
      </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        
        const addToCartButton = document.getElementById('addToCartButton');

        
        addToCartButton.addEventListener('click', function() {
            
            const productTitle = document.getElementById('modalTitle').innerText;
            const productPrice = document.getElementById('modalPrice').innerText;
            const productImage = document.getElementById('modalImage').src;

            
            const product = {
                title: productTitle,
                price: productPrice,
                image: productImage,
                quantity: 1
            };

            
            addToCart(product);
        });

        
        function addToCart(product) {
           
            let cart = JSON.parse(sessionStorage.getItem('cart')) || [];

            
            let existingProductIndex = cart.findIndex(item => item.title === product.title);

            if (existingProductIndex !== -1) {
                
                cart[existingProductIndex].quantity += 1;
            } else {
                
                cart.push(product);
            }

           
            sessionStorage.setItem('cart', JSON.stringify(cart));

            
            alert('The keyboard has been successfully added to the cart');
        }
    });
</script>
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
   document.querySelectorAll('.product-card').forEach(card => {
  card.addEventListener('click', function() {
    // Update modal content
    document.getElementById('modalTitle').textContent = this.getAttribute('data-title');
    document.getElementById('modalDescription').textContent = this.getAttribute('data-description');
    document.getElementById('modalPrice').textContent = this.getAttribute('data-price');
    document.getElementById('modalImage').src = this.getAttribute('data-image');
    document.getElementById('modalImage').alt = this.getAttribute('data-title');

    // Display the modal
    document.querySelector('.modal').style.display = 'block';
  });
});

// Close modal functionality
document.querySelector('.close').addEventListener('click', function() {
  document.querySelector('.modal').style.display = 'none';
});

// Click outside to close
window.onclick = function(event) {
  if (event.target == document.querySelector('.modal')) {
    document.querySelector('.modal').style.display = 'none';
  }
};

    </script>
    <script src="darkmode.js"></script>
  </body>
</html>
