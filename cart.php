<?php
session_start();
$status = "";
if (isset($_POST['action']) && $_POST['action'] == "remove") {
  if (!empty($_SESSION["shopping_cart"])) {
    foreach ($_SESSION["shopping_cart"] as $key => $value) {
      if ($_POST["code"] == $key) {
        unset($_SESSION["shopping_cart"][$key]);
        $status = "<div class='box' style='color:red; text-align:center; font-size:30px;'>
		Product is removed from your cart!</div>";
      }
      if (empty($_SESSION["shopping_cart"]))
        unset($_SESSION["shopping_cart"]);
    }
  }
}

if (isset($_POST['action']) && $_POST['action'] == "change") {
  foreach ($_SESSION["shopping_cart"] as &$value) {
    if ($value['code'] === $_POST["code"]) {
      $value['quantity'] = $_POST["quantity"];
      break;
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
  <title>Your Cart</title>
</head>

<body>
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
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="product.php" class="nav-link">Products</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">Logout</a>
          </li>
          <li class="nav-item">
            <a href="cart.html" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
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

  <!-- Cart Items -->

  <div style=" margin:50 auto;margin-right:20rem;margin-left:20rem;">

    <h2 style="text-align: center; font-weight:bolder; font-family: Comic Sans MS, Comic Sans, cursive; font-size:40px;">Shopping Cart</h2>



    <div class="cart">
      <?php
      if (isset($_SESSION["shopping_cart"])) {
        $total_price = 0;
      ?>
        <table class="table">
          <tbody>
            <tr>
              <td></td>
              <td>ITEM NAME</td>
              <td>QUANTITY</td>
              <td>UNIT PRICE</td>
              <td>ITEMS TOTAL</td>
            </tr>
            <?php
            foreach ($_SESSION["shopping_cart"] as $product) {
            ?>
              <tr>
                <td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
                <td><?php echo $product["name"]; ?><br />
                  <form method='post' action=''>
                    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                    <input type='hidden' name='action' value="remove" />
                    <button type='submit' class='remove' style="border-radius: 8px; background-color:#ff7c9c; border:none; height:3rem; width:10rem; cursor:pointer;">Remove Item</button>
                  </form>
                </td>
                <td>
                  <form method='post' action=''>
                    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                    <input type='hidden' name='action' value="change" />
                    <select name='quantity' class='quantity' onchange="this.form.submit()">
                      <option <?php if ($product["quantity"] == 1) echo "selected"; ?> value="1">1</option>
                      <option <?php if ($product["quantity"] == 2) echo "selected"; ?> value="2">2</option>
                      <option <?php if ($product["quantity"] == 3) echo "selected"; ?> value="3">3</option>
                      <option <?php if ($product["quantity"] == 4) echo "selected"; ?> value="4">4</option>
                      <option <?php if ($product["quantity"] == 5) echo "selected"; ?> value="5">5</option>
                    </select>
                  </form>
                </td>
                <td><?php echo "Rs" . $product["price"]; ?></td>
                <td><?php echo "Rs" . $product["price"] * $product["quantity"]; ?></td>
              </tr>
            <?php
              $total_price += ($product["price"] * $product["quantity"]);
            }
            ?>
            <tr>
              <td colspan="5" align="right">
                <strong>TOTAL: <?php echo "Rs" . $total_price; ?></strong>
              </td>
            </tr>
          </tbody>
        </table>
      <?php
      } else {
        echo "<h3 style='margin-top:5rem; text-align:center;'>Your cart is empty!</h3>";
      }
      ?>
    </div>

    <div style="clear:both;"></div>

    <div class="message_box" style="margin:10px 0px;">
      <?php echo $status; ?>
    </div>


  </div>



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