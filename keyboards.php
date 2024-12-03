<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terminus</title>
    <link rel="stylesheet" href="keyboards.css" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <link href="all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  </head>
  <body>
    <div class="terminusTopBanner">
      <!-- All the elements for the top banner of the page, it's set to sticky for now. Does need optimisation to ensure everything is centred-->
      <div class="menuOption">☰</div>
      <div class="bannerFormat">
        <div class="LBannerLinks">
          <a href="about.php">About</a>
          <a href="keyboards.php">Keyboards</a>
          <!-- We probably need a better name, I'm thinking Products, but I will keep it as this just for now.-->
        </div>

        <a href="index.php">
          <!-- Link for the logo -->
          <img src="TerminusLogo.png" alt="Terminus Logo" class="logo" />
        </a>

        <div class="RBannerLinks">
          <a href="blog.php">Blog</a>
          <!-- placeholder-->
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
          <!-- This will be changed in future to have the green colour implemented-->
          <a href="cart.php">🛒</a>
        </div>
      </div>
    </div>
 <!--  Search Bar Draft -->
    <section class="search-bar">
      <div class="search-container">
        <input type="text" class="search-input" placeholder="Search">
      </div>
    </section>

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
            <button class="modal-button add-to-cart">Add to Cart</button>
            <button class="modal-button save-later">Save for Later</button>
          </div>
        </div>
      </div>
    </div>
    

    <script>
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
  </body>
</html>