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
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Products</title>
</head>

<body>
    <!-- Navigation -->
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
                            <a href="index.php" class="nav-link ">Home</a>
                        </li>
                        <li class="nav-item">

                            <div class="dropdown">
                                <a href="product.php" class="nav-link">Products</a>
                                <div class="dropdown-content">
                                    <a href="#men">Men</a>
                                    <a href="#women">Women</a>
                                    <a href="#kids">Kids</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link ">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link ">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a href="cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
                        </li>
                    </ul>
                </div>

                <a href="cart.php" class="cart-icon">
                    <i class="bx bx-shopping-bag"></i>
                </a>

                <div class="hamburger">
                    <i class="bx bx-menu"></i>
                </div>
            </div>
        </nav>

        <!-- Hero -->
        <img src="images/prod.png" alt="" class="hero-img" />

        <div class="hero-content">
            <h1>
                <span>Products</span>
            </h1>

            <h2 style="font-size: 50px; color:white">All of our produts at your service</h2>
        </div>
    </header>

    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">
            <h1>All Products</h1>
            <form>
                <select>
                    <option value="1">Defualt Sorting</option>
                    <option value="2">Sort By Price</option>
                    <option value="3">Sort By Popularity</option>
                    <option value="4">Sort By Sale</option>
                    <option value="5">Sort By Rating</option>
                </select>
                <span><i class='bx bx-chevron-down'></i></span>
            </form>
        </div>

        <div class="title">
            <h1 id="men">Men</h1>
        </div>

        <div class="product-center container">


            <?php


            $result = mysqli_query($con, "SELECT * FROM `products` where id>8 and id<13");
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
        </div>
        <div class="title">
            <h1 id="women">Women</h1>
        </div>
        <div class="product-center container">

            <?php


            $result = mysqli_query($con, "SELECT * FROM `products` where id>12 and id<17");
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
            ?>
        </div>
        <div class="title">
            <h1 id="kids">Kids</h1>
        </div>
        <div class="product-center container">

            <?php


            $result = mysqli_query($con, "SELECT * FROM `products` where id>16 and id<21");
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
        </div>
    </section>

    <section class="pagination">
        <div class=" container">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span><i class='bx bx-right-arrow-alt'></i></span>
        </div>
    </section>



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