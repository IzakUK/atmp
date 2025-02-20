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
    </section2>
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
          <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">×</a>
          <a href="about.html">About</a>
          <a href="keyboards.php">Keyboards</a>
          <a href="blog.html">Our Mission</a>
          <a href="contactus.php">Contact</a>
      </div>
      
    <!-- Swiper -->
     <!-- 
<div class="swiper-container">
  <div class="swiper-wrapper">
      <-- Slides -->
       <!--
      <div class="swiper-slide"><img src="homebanner.jpg" alt="Product 1"></div>
      <div class="swiper-slide"><img src="aboutus3.jpg" alt="Product 2"></div>
      <div class="swiper-slide"><img src="featured2.jpg" alt="Product 3"></div>
      <-- we can More slides if needed -->
       <!--
  </div>
  <-- navigation buttons -->
   <!--
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
 
</div>-->

<!--
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
-->
<!-- products filter-->
      <section class="product-list">
        <h1 class="product-list-title">Welcome to Terminus Mechanical Keyboards & Accessories</h1>
        
        <div class="filter-container">
            <label for="category-filter">Filter by Category:</label>
            <select id="category-filter">
                <option value="all">All</option>
                <option value="keyboards">Keyboards</option>
                <option value="switches">Switches</option>
                <option value="keycaps">Keycaps</option>
            </select>
            
            <label for="sort-filter">Sort by:</label>
            <select id="sort-filter">
                <option value="featured">Featured</option>
                <option value="best-selling">Best selling</option>
                <option value="az">Alphabetically, A-Z</option>
                <option value="za">Alphabetically, Z-A</option>
                <option value="price-low">Price, low to high</option>
                <option value="price-high">Price, high to low</option>
                <option value="date-old">Date, old to new</option>
                <option value="date-new">Date, new to old</option>
            </select>
        </div>
         <!-- product listing -->
        <div class="products-container">
            <!-- Keyboards -->
            <div class="product-card" 
     data-title="Ducky One 3 Mini" 
     data-price="119.90" 
     data-image="Images/duckyOne3Mini.jpg">

    <img src="Images/duckyOne3Mini.jpg" alt="Ducky One 3 Mini" class="product-image">
    <h2 class="product-name">Ducky One 3 Mini</h2>
    <p class="product-price">£119.90</p>
    <p class="product-description">
        Compact, high-performance 60% keyboard with hot-swappable switches, vibrant RGB lighting, and a solid build. 
        Perfect for gaming and productivity.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (4.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Keychron K6" 
     data-price="89.99" 
     data-image="Images/keychronK6.jpg">

    <img src="Images/keychronK6.jpg" alt="Keychron K6" class="product-image">
    <h2 class="product-name">Keychron K6</h2>
    <p class="product-price">£89.99</p>
    <p class="product-description">
        Compact 65% layout with Bluetooth & wired connectivity, hot-swappable switches, and RGB backlight. 
        Ideal for work and gaming.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (4.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Corsair K95 RGB Platinum" 
     data-price="199.99" 
     data-image="Images/corsairK95.jpg">

    <img src="Images/corsairK95.jpg" alt="Corsair K95 RGB Platinum" class="product-image">
    <h2 class="product-name">Corsair K95 RGB Platinum</h2>
    <p class="product-price">£199.99</p>
    <p class="product-description">
        Full-sized keyboard with dedicated macro keys, per-key RGB lighting, and Cherry MX switches. 
        Built for performance and durability.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (4.9)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Leopold FC660M" 
     data-price="139.99" 
     data-image="Images/leopoldFC660M.jpg">

    <img src="Images/leopoldFC660M.jpg" alt="Leopold FC660M" class="product-image">
    <h2 class="product-name">Leopold FC660M</h2>
    <p class="product-price">£139.99</p>
    <p class="product-description">
        Compact and minimalist with top-tier build quality, PBT keycaps, and reliable Cherry MX switches. 
        Perfect for enthusiasts and professionals.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.7)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Drop ALT V1" 
     data-price="179.99" 
     data-image="Images/DropALTV1.jpg">

    <img src="Images/DropALTV1.jpg" alt="Drop ALT V1" class="product-image">
    <h2 class="product-name">Drop ALT V1</h2>
    <p class="product-price">£179.99</p>
    <p class="product-description">
        Compact, hot-swappable keyboard with an aluminum frame, customizable RGB, and premium build quality. 
        Perfect for gaming and typing.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Varmilo Sakura R2 87" 
     data-price="159.99" 
     data-image="Images/VarmiloSakuraR287.jpg">

    <img src="Images/VarmiloSakura R2 87.jpg" alt="Varmilo Sakura R2 87" class="product-image">
    <h2 class="product-name">Varmilo Sakura R2 87</h2>
    <p class="product-price">£159.99</p>
    <p class="product-description">
        Elegant tenkeyless keyboard with Sakura-themed design, high-quality PBT keycaps, and smooth mechanical switches. 
        Perfect for aesthetics and performance.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

            
            <!-- Keycaps -->
            <div class="product-card" 
     data-title="Akko Macaw Keycap Set" 
     data-price="69.99" 
     data-image="Images/AkkoMacawKeycapSet.jpg">

    <img src="Images/AkkoMacawKeycapSet.jpg" alt="Akko Macaw Keycap Set" class="product-image">
    <h2 class="product-name">Akko Macaw Keycap Set</h2>
    <p class="product-price">£69.99</p>
    <p class="product-description">
        Vibrant Macaw-themed keycaps made from durable PBT with an ASA profile for a comfortable typing experience. 
        Compatible with most mechanical keyboards.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Drop + Matt3o MT3 Dev/TTY Keycap Set" 
     data-price="110.00" 
     data-image="Images/Drop+Matt3oMT3devttyKeycapSet.png">

    <img src="Images/Drop+Matt3oMT3devttyKeycapSet.png" alt="Drop + Matt3o MT3 Dev/TTY Keycap Set" class="product-image">
    <h2 class="product-name">Drop + Matt3o MT3 Dev/TTY Keycap Set</h2>
    <p class="product-price">£110.00</p>
    <p class="product-description">
        Retro-styled keycaps with a sculpted MT3 profile, high-quality PBT material, and dye-sublimated legends. 
        Designed for a comfortable, vintage typing feel.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.6)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Drop + RedSuns GMK Red Samurai Keycap Set" 
     data-price="149.99" 
     data-image="Images/Drop+RedSunsGMKRedSamuraiKeycapSet.jpg">

    <img src="Images/Drop+RedSunsGMKRedSamurai KeycapSet.jpg" alt="Drop + RedSuns GMK Red Samurai Keycap Set" class="product-image">
    <h2 class="product-name">Drop + RedSuns GMK Red Samurai Keycap Set</h2>
    <p class="product-price">£149.99</p>
    <p class="product-description">
        Bold and striking keycap set with a Red Samurai-inspired design, GMK’s premium ABS plastic, and Cherry profile 
        for a smooth, high-quality typing experience.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (4.8)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="PBTfans Neon Keycap Set" 
     data-price="89.99" 
     data-image="Images/PBTfansNeonKeycapSet.jpg">

    <img src="Images/PBTfansNeonKeycapSet.jpg" alt="PBTfans Neon Keycap Set" class="product-image">
    <h2 class="product-name">PBTfans Neon Keycap Set</h2>
    <p class="product-price">£89.99</p>
    <p class="product-description">
        High-quality PBT keycaps with a vibrant neon colorway, Cherry profile, and durable dye-sublimated legends. 
        Perfect for adding a bold touch to any keyboard.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.9)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>
<div class="product-card" 
     data-title="Akko Black & Pink Keycap Set" 
     data-price="59.99" 
     data-image="Images/AkkoBlack&PinkKeycapSet.jpg">

    <img src="Images/AkkoBlack&PinkKeycapSet.jpg" alt="Akko Black & Pink Keycap Set" class="product-image">
    <h2 class="product-name">Akko Black & Pink Keycap Set</h2>
    <p class="product-price">£59.99</p>
    <p class="product-description">
        Stylish black and pink keycap set made from durable PBT with an ergonomic ASA profile. 
        Ideal for a sleek, modern look and comfortable typing.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (5.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Tiger Sketch Keycap Set" 
     data-price="74.99" 
     data-image="Images/TigerSketchKeycapSet.jpg">

    <img src="Images/TigerSketchKeycapSet.jpg" alt="Tiger Sketch Keycap Set" class="product-image">
    <h2 class="product-name">Tiger Sketch Keycap Set</h2>
    <p class="product-price">£74.99</p>
    <p class="product-description">
        Unique artistic keycaps featuring hand-drawn tiger designs, durable PBT material, and Cherry profile 
        for a smooth typing experience. Perfect for a bold setup.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (5.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>
            
            
            
            <!-- Switches -->
<div class="product-card" 
     data-title="Cherry MX Switch Set" 
     data-price="39.99" 
     data-image="Images/CherryMXSwitchSet.jpg">

    <img src="Images/CherryMXSwitchSet.jpg" alt="Cherry MX Switch Set" class="product-image">
    <h2 class="product-name">Cherry MX Switch Set (Set of 35)</h2>
    <p class="product-price">£39.99</p>
    <p class="product-description">
        Authentic Cherry MX switches available in various types (Red, Blue, Brown, etc.) for a customizable typing and gaming experience. 
        Durable and reliable.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.2)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Kailh Box Switch Set" 
     data-price="29.99" 
     data-image="Images/KailhBoxSwitchSet.jpg">

    <img src="Images/KailhBoxSwitchSet.jpg" alt="Kailh Box Switch Set" class="product-image">
    <h2 class="product-name">Kailh Box Switch Set (Set of 35)</h2>
    <p class="product-price">£29.99</p>
    <p class="product-description">
        Smooth and durable switches with a unique boxed design for dust and water resistance. 
        Available in multiple variants for different typing preferences.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Durock T1 Tactile 67g Teal Switch Set" 
     data-price="45.99" 
     data-image="Images/DurockT1Tactile67gTeal.jpg">

    <img src="Images/DurockT1Tactile67gTeal.jpg" alt="Durock T1 Tactile 67g Teal Switch Set" class="product-image">
    <h2 class="product-name">Durock T1 Tactile 67g Teal Switch Set</h2>
    <p class="product-price">£45.99</p>
    <p class="product-description">
        Smooth tactile switches with a 67g actuation force, featuring a deep, thocky sound and minimal wobble. 
        Ideal for a premium typing experience.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (5.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Panda MX Unlubed Switch Set" 
     data-price="49.99" 
     data-image="Images/PandaMXUnlubedSwitches.jpg">

    <img src="Images/PandaMXUnlubedSwitches.jpg" alt="Panda MX Unlubed Switch Set" class="product-image">
    <h2 class="product-name">Panda MX Unlubed Switch Set</h2>
    <p class="product-price">£49.99</p>
    <p class="product-description">
        Crisp and snappy tactile switches with a strong bump, perfect for a responsive typing experience. 
        Unlubed for full customization.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.1)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Drop + Invyr Holy Panda Mechanical Switch Set" 
     data-price="69.99" 
     data-image="Images/Drop+InvyrHolyPandaMechanicalSwitches.jpg">

    <img src="Images/Drop+InvyrHolyPandaMechanicalSwitches.jpg" alt="Drop + Invyr Holy Panda Mechanical Switch Set" class="product-image">
    <h2 class="product-name">Drop + Invyr Holy Panda Mechanical Switch Set</h2>
    <p class="product-price">£69.99</p>
    <p class="product-description">
        Legendary tactile switches with a strong, snappy bump and a smooth feel. 
        Perfect for enthusiasts seeking a premium typing experience.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (5.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Gateron Yellow G Pro 3.0 Switch Set" 
     data-price="27.99" 
     data-image="Images/GateronYellowGPro3.0.jpg">

    <img src="Images/GateronYellowGPro3.0.jpg" alt="Gateron Yellow G Pro 3.0 Switch Set" class="product-image">
    <h2 class="product-name">Gateron Yellow G Pro 3.0 Switch Set</h2>
    <p class="product-price">£27.99</p>
    <p class="product-description">
        Smooth and lightweight linear switches with factory pre-lubing for a buttery typing feel. 
        Ideal for gaming and everyday use.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (5.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

            
            
            <!-- Accessories -->
<div class="product-card" 
     data-title="ATTACK SHARK KS01 Keycap & Switch Puller" 
     data-price="9.99" 
     data-image="Images/ATTACKSHARKKS01KEYCAP&SWITCHPULLER.jpg">

    <img src="Images/ATTACKSHARKKS01KEYCAP&SWITCHPULLER.jpg" alt="ATTACK SHARK KS01 Keycap & Switch Puller" class="product-image">
    <h2 class="product-name">ATTACK SHARK KS01 Keycap & Switch Puller</h2>
    <p class="product-price">£9.99</p>
    <p class="product-description">
        Dual-purpose tool for easy keycap and switch removal. Ergonomic design with a sturdy build, perfect for keyboard maintenance and customization.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Switch Puller" 
     data-price="6.99" 
     data-image="Images/SwitchPuller.jpg">

    <img src="Images/SwitchPuller.jpg" alt="Switch Puller" class="product-image">
    <h2 class="product-name">Switch Puller</h2>
    <p class="product-price">£6.99</p>
    <p class="product-description">
        Compact and durable tool designed for easy removal of mechanical switches. 
        Essential for hot-swappable keyboards and switch customization.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.6)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Keychron Keyboard Wooden Palm Rest" 
     data-price="25.99" 
     data-image="Images/KeychronKeyboardWoodenPalmRest.jpg">

    <img src="Images/KeychronKeyboardWoodenPalmRest.jpg" alt="Keychron Keyboard Wooden Palm Rest" class="product-image">
    <h2 class="product-name">Keychron Keyboard Wooden Palm Rest</h2>
    <p class="product-price">£25.99</p>
    <p class="product-description">
        Ergonomic and stylish wooden palm rest designed for Keychron keyboards. 
        Provides comfort and wrist support for long typing sessions.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.8)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Keycap Storage Display Box" 
     data-price="19.99" 
     data-image="Images/KeycapStoragedisplayBox.jpg">

    <img src="Images/KeycapStoragedisplayBox.jpg" alt="Keycap Storage Display Box" class="product-image">
    <h2 class="product-name">Keycap Storage Display Box</h2>
    <p class="product-price">£19.99</p>
    <p class="product-description">
        Sleek, durable display box for organizing and showcasing your keycap sets. 
        Perfect for enthusiasts looking to keep their keycaps safe and accessible.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.9)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Switch Lubricant" 
     data-price="8.99" 
     data-image="Images/SwitchLubricant.jpg">

    <img src="Images/SwitchLubricant.jpg" alt="Switch Lubricant" class="product-image">
    <h2 class="product-name">Switch Lubricant</h2>
    <p class="product-price">£8.99</p>
    <p class="product-description">
        High-quality lubricant designed to reduce friction and enhance the smoothness of mechanical switches. 
        Perfect for customizing and improving your keyboard's performance.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (5.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="HyperX USB-C Coiled Cable" 
     data-price="19.99" 
     data-image="Images/HyperXUSB-CCoiledCable.jpg">

    <img src="Images/HyperXUSB-CCoiledCable.jpg" alt="HyperX USB-C Coiled Cable" class="product-image">
    <h2 class="product-name">HyperX USB-C Coiled Cable</h2>
    <p class="product-price">£19.99</p>
    <p class="product-description">
        Premium coiled USB-C cable for mechanical keyboards. Durable and flexible design with a tangle-free experience, offering fast and reliable connectivity.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (5.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

            

            <!-- Keyboard DIY Kits -->
          
<div class="product-card" 
     data-title="Corgi Fairlady Alice Keycap Set" 
     data-price="99.99" 
     data-image="Images/CorgiFairladyAlice.jpg">

    <img src="Images/CorgiFairladyAlice.jpg" alt="Corgi Fairlady Alice Keycap Set" class="product-image">
    <h2 class="product-name">Corgi Fairlady Alice Keycap Set</h2>
    <p class="product-price">£99.99</p>
    <p class="product-description">
        Playful, high-quality keycap set inspired by the Fairlady Alice design, made from durable PBT material with vibrant colors 
        and smooth Cherry profile for an enjoyable typing experience.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="KBD.fans Gaming Keyboard Kit" 
     data-price="129.99" 
     data-image="Images/KBDfGamingKeyboardKit.jpg">

    <img src="Images/KBDfGamingKeyboardKit.jpg" alt="KBD.fans Gaming Keyboard Kit" class="product-image">
    <h2 class="product-name">KBD.fans Gaming Keyboard Kit</h2>
    <p class="product-price">£129.99</p>
    <p class="product-description">
        Customizable gaming keyboard kit with premium components, including a sturdy PCB and high-quality case. 
        Perfect for enthusiasts who want to build a personalized mechanical keyboard.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.6)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="ACGAM Alice VIA Wireless DIY Kit" 
     data-price="159.99" 
     data-image="Images/ACGAMAliceVIAWirelessDIYKit.jpg">

    <img src="Images/ACGAMAliceVIA Wireless DIY Kit.jpg" alt="ACGAM Alice VIA Wireless DIY Kit" class="product-image">
    <h2 class="product-name">ACGAM Alice VIA Wireless DIY Kit</h2>
    <p class="product-price">£159.99</p>
    <p class="product-description">
        Customizable Alice layout wireless keyboard kit with VIA compatibility for easy key remapping. 
        Perfect for enthusiasts seeking a unique, high-performance setup.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.8)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Corne Cherry V3 Split Ergo DIY Kit" 
     data-price="57.99" 
     data-image="Images/CorneCherryV3SplitErgoDIYKIT.jpg">

    <img src="Images/CorneCherryV3 SplitErgoDIYKIT.jpg" alt="Corne Cherry V3 Split Ergo DIY Kit" class="product-image">
    <h2 class="product-name">Corne Cherry V3 Split Ergo DIY Kit</h2>
    <p class="product-price">£57.99</p>
    <p class="product-description">
        Split ergonomic keyboard kit featuring a customizable layout and Cherry MX switch compatibility. 
        Perfect for those looking for a personalized, comfortable typing experience.
    </p>
    <p class="product-rating">⭐⭐⭐⭐ (4.9)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="Monsgeek DIY Keyboard Kit" 
     data-price="99.99" 
     data-image="Images/MonsgeekDIYKit.png">

    <img src="Images/MonsgeekDIYKit.png" alt="Monsgeek DIY Keyboard Kit" class="product-image">
    <h2 class="product-name">Monsgeek DIY Keyboard Kit</h2>
    <p class="product-price">£99.99</p>
    <p class="product-description">
        Customizable DIY mechanical keyboard kit with a flexible layout, high-quality PCB, and sturdy build. 
        Ideal for enthusiasts looking to create a personalized typing experience.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (5.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<div class="product-card" 
     data-title="TIDBIT Customizable 19-Key Numpad Kit" 
     data-price="49.99" 
     data-image="Images/TIDBITCustomizable19KeyNumpadKit.jpg">

    <img src="Images/TIDBITCustomizable19KeyNumpadKit.jpg" alt="TIDBIT Customizable 19-Key Numpad Kit" class="product-image">
    <h2 class="product-name">TIDBIT Customizable 19-Key Numpad Kit</h2>
    <p class="product-price">£49.99</p>
    <p class="product-description">
        A versatile 19-key numpad kit with fully customizable keymapping. 
        Ideal for productivity, gaming, or macros, offering a sleek and functional setup.
    </p>
    <p class="product-rating">⭐⭐⭐⭐⭐ (5.0)</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

            
    </section>



    <script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function(event) {
            event.stopPropagation(); // 防止事件冒泡

            const productCard = this.closest('.product-card');
            const product = {
                title: productCard.getAttribute('data-title'),
                price: productCard.getAttribute('data-price'),
                image: productCard.getAttribute('data-image'),
                quantity: 1
            };

            addToCart(product);
        });
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
        alert(`${product.title} has been added to the cart!`);
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
    <!--Product ranking function-->
      <script>

      document.getElementById("sort-filter").addEventListener("change", function() {
        let sortValue = this.value;
        let productsContainer = document.querySelector(".products-container");
        let products = Array.from(document.querySelectorAll(".product-card"));

         if (sortValue === "az") {
            
            products.sort((a, b) => a.dataset.name.localeCompare(b.dataset.name));
        } else if (sortValue === "za") {
            products.sort((a, b) => b.dataset.name.localeCompare(a.dataset.name));
        } else if (sortValue === "price-low") {
            products.sort((a, b) => parseFloat(a.dataset.price) - parseFloat(b.dataset.price));
        } else if (sortValue === "price-high") {
            products.sort((a, b) => parseFloat(b.dataset.price) - parseFloat(a.dataset.price));
        }
    
    productsContainer.innerHTML = "";
    products.forEach(product => productsContainer.appendChild(product));
});
document.getElementById("category-filter").addEventListener("change", function() {
    const selectedCategory = this.value;
    document.querySelectorAll(".product-card").forEach(card => {
        if (selectedCategory === "all" || card.dataset.category === selectedCategory) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});
</script>
   
  </body>
</html>
