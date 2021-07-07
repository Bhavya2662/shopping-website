<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

?>
<?php

include('db.php');
$status = "";
if (isset($_POST['code']) && $_POST['code'] != "") {
  $code = $_POST['code'];
  $result = mysqli_query($con, "SELECT * FROM `products` WHERE `code`='$code'");
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
  $code = $row['code'];
  $price = $row['price'];
  $image = $row['image'];

  $cartArray = array(
    $code => array(
      'name' => $name,
      'code' => $code,
      'price' => $price,
      'quantity' => 1,
      'image' => $image
    )
  );

  if (empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
  } else {
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if (in_array($code, $array_keys)) {
      $status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";
    } else {
      $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"], $cartArray);
      $status = "<div class='box'>Product is added to your cart!</div>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <!-- Header -->
  <header id="home" class="header">
    <!-- Navigation -->
    <nav class="nav">
      <div class="navigation container">
        <div class="logo">
          <h1>Fashion Site</h1>
        </div>

        <div class="menu">
          <div class="top-nav">
            <div class="logo">
              <h1>Fashion Site</h1>
            </div>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
          </div>

          <ul class="nav-list">
            <li class="nav-item">
              <a href="#home" class="nav-link scroll-link">Home</a>
            </li>
            <li class="nav-item">

              <div class="dropdown">
                <a href="product.php" class="nav-link">Products</a>
                <div class="dropdown-content">
                  <a href="#">Men</a>
                  <a href="#">Women</a>
                  <a href="#">Kids</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link scroll-link">About</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link scroll-link">Logout</a>
            </li>
            <li class="nav-item">
              <a href="cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
            </li>
          </ul>
        </div>

        <a href="cart.html" class="cart-icon">
          <i class="bx bx-shopping-bag"></i>
        </a>

        <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <img src="images/logo2.png" alt="" class="hero-img" />

    <div class="hero-content">
      <h2><span class="discount">90% </span>OFF</h2>
      <h1>
        <span>Mega Diwali</span>
        <span>Offer</span>
      </h1>
      <a class="btn" href="products.php">shop now</a>
    </div>
  </header>

  <!-- Main -->
  <main>
    <section class="advert section">
      <div class="advert-center container">
        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                Girls <br />
                Clothing
              </h2>
              <h4>Worlds Best Brands</h4>
            </div>
          </div>
          <img src="images/logo1.png" alt="">
        </div>

        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                Kids <br />
                Clothing
              </h2>
              <h4>Worlds Best Brands</h4>
            </div>
          </div>
          <img src="images/b.png" alt="">
        </div>

        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                Boys <br />
                Clothing
              </h2>
              <h4>Worlds Best Brands</h4>
            </div>
          </div>
          <img src="images/a.png" alt="">
        </div>
      </div>
    </section>

    <!-- Featured -->
    <section class="section featured">
      <div class="title">
        <h1>Featured Products</h1>
      </div>

      <div class="product-center container">


        <?php


        $result = mysqli_query($con, "SELECT * FROM `products` where id<5");
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='product'>
          <form method='post' action=''>  <div class='product-header'>
          
          <img src='" . $row['image'] . "' >
            <ul class='icons'>
              <span><i class='bx bx-heart'></i></span>
              <span><i class='bx bx-shopping-bag'></i></span>
              <span><i class='bx bx-search'></i></span>
            </ul>
          </div>
          <div class='product-footer'>
            <a href='#'>
              <h3>" . $row['name'] . "</h3>
            </a>
            <div class='rating'>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bx-star'></i>
            </div>
            <h4 class='price'>Rs " . $row['price'] . "</h4>
            <input type='hidden' name='code' value=" . $row['code'] . " />
            <button type='submit' class='buy'>Add to Cart</button>
            </div> 
            </form>
          </div>";
        }
        ?>
        <?php


        $result = mysqli_query($con, "SELECT * FROM `products` where id>4 and id<9");
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='product'>
          <form method='post' action=''>  <div class='product-header'>
          
          <img src='" . $row['image'] . "' >
            <ul class='icons'>
              <span><i class='bx bx-heart'></i></span>
              <span><i class='bx bx-shopping-bag'></i></span>
              <span><i class='bx bx-search'></i></span>
            </ul>
          </div>
          <div class='product-footer'>
            <a href='#'>
              <h3>" . $row['name'] . "</h3>
            </a>
            <div class='rating'>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bx-star'></i>
            </div>
            <h4 class='price'> Rs " . $row['price'] . "</h4>
            <input type='hidden' name='code' value=" . $row['code'] . " />
            <button type='submit' class='buy'>Add to Cart</button>
            </div> 
            </form>
          </div>";
        }
        mysqli_close($con);
        ?>

    </section>


    <!-- Product Banner -->
    <section class="section">
      <div class="product-banner">
        <div class="left">
          <img src="images/women.jpg" height="700px" width="700px" alt="" />
        </div>
        <div class="right">
          <div class="content">
            <h2 style="font-size: 50px;"><span class="discount">70% </span> SALE OFF</h2>
            <h1>
              <span style="font-size: 100px;">Collect Your</span>
              <span style="font-size: 100px;">Kids Collection</span>
            </h1>
            <a class="btn" href="products.php">shop now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="section">
      <div class="title">
        <h1>Testimonials</h1>
      </div>
      <div class="testimonial-center container">

        <div class="testimonial" style="background-color: #1588F5 ; color:white;">
          <span>&ldquo;</span>
          <p>
            I find this site very comforting and easy to use. Their servies are out of this world. They even give us free LCD TV ono every purcahse.
          </p>
          <div class="rating" style="color:#ff7c9c">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="images/Ragini.jpg" alt="" />
          </div>
          <h4><b>Ragini Pandey</b></h4>
        </div>
        <div class="testimonial" style="background-color: #1588F5 ; color:white;">
          <span>&ldquo;</span>
          <p>
            I find this site very comforting and easy to use. Their servies are out of this world. They even give us free LCD TV ono every purcahse.
          </p>
          <div class="rating" style="color:#ff7c9c">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="img-cover">
            <img src="images/sudha.jpg" alt="" />
          </div>
          <h4><b>Sudha Upadhyay</b></h4>
        </div>
        <div class="testimonial" style="background-color: #1588F5 ; color:white;">
          <span>&ldquo;</span>
          <p>
            I find this site very comforting and easy to use. Their servies are out of this world. They even give us free LCD TV ono every purcahse.
          </p>
          <div class="rating" style="color:#ff7c9c">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="images/Ragini.jpg" alt="" />
          </div>
          <h4><b>Ragini Pandey</b></h4>
        </div>
        <div class="testimonial" style="background-color: #1588F5 ; color:white;">
          <span>&ldquo;</span>
          <p>
            I find this site very comforting and easy to use. Their servies are out of this world. They even give us free LCD TV ono every purcahse.
          </p>
          <div class="rating" style="color:#ff7c9c">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="images/Ragini.jpg" alt="" />
          </div>
          <h4><b>Ragini Pandey</b></h4>
        </div>
      </div>
    </section>

    <!-- Brands -->
    <section class="section">
      <div class="brands-center container">
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            42 Dream House, Dreammy street, 7131 Dreamville, USA
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            company@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            456-456-4512
          </div>
          <div>
            <span>
              <i class="far fa-paper-plane"></i>
            </span>
            Dream City, USA
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
</body>

</html>