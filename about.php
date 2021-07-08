<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>About US</title>
    <style>
        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        /* Display the columns below each other instead of side by side on small screens */
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        /* Add some shadows to create a card effect */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

            transition: transform .2s;
            background-color: rgb(57, 206, 251);
            height: 500px;
            border-radius: 12px;
            padding-right: 5rem;
            padding-left: 5rem;
            padding-top: 1rem;
        }

        .card:hover {

            transform: scale(1.5);
        }

        /* Some left and right padding inside the container */
        .container {
            padding: 0 16px;
        }

        /* Clear floats */
        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            border-radius: 12px;

        }

        .button:hover {
            background-color: white;
            color: black;
        }
    </style>
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
                            <a href="index.php" class="nav-link scroll-link">Home</a>
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
        <img src="images/logo.png" alt="" class="hero-img" />

        <div class="hero-content">
            <h1>
                <span>About Us</span>
            </h1>

            <h2 style="font-size: 50px; color:white">Know more about us</h2>
        </div>
    </header>

    <body style="background-color: #1588F5 ;">
        <div class="title">
            <h1 style="font-size: 50px; color:white">Our Vision</h1>
        </div>
        <p style="color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 62px; font-weight: 800; line-height: 72px; margin: 0 0 24px; text-align: center; text-transform: uppercase;">We are determined to provide our services to every corner of this moving Globe.</p>
        <p style="color: #f8f8f8; font-family: 'Raleway',sans-serif; font-size: 18px; font-weight: 500; line-height: 32px; margin: 0 0 24px; text-align: center;">If we can satisfy our customers with so much love that their little hearts feel like bursting that will be our greatest achievement.</p>
        <p style="color: #f8f8f8; font-family: 'Raleway',sans-serif; font-size: 18px; font-weight: 500; line-height: 32px; margin: 0 0 24px; text-align: center;">We are providing our customers with awesome deals and prices just to fullfil their every wish. If they don't have a wish, then we will first give them a wish that is more like a dream and then fullful it.</p>
        <p style="color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 30px; font-weight: 800; line-height: 36px; margin: 0 0 24px; text-align: center;">Customer Is Our God and Our Site is Our Temple.</p>
        <div class="title">
            <h1 style="font-size: 50px; color:white">Our Team</h1>
        </div>
        <div style="margin-left: 500px;">
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="images/bhavya.jpg" alt="Jane" width="350px" height="350px">
                        <div class="container">
                            <h2> <b>Bhavya Sharma</b> </h2>
                            <p>bhavya@example.com</p>
                            <div class="col item social" style="text-indent: 3rem; font-size:30px;"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-snapchat"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="images/raagi.jpg" alt="Mike" width="350px" height="350px">
                        <div class="container">
                            <h2> <b>Ragini Pandey</b> </h2>
                            <p>ragini@example.com</p>
                            <div class="col item social" style="text-indent: 3rem; font-size:30px;"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-snapchat"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="images/nitu.jpg" alt="Jane" width="350px" height="350px">
                        <div class="container">
                            <h2> <b>Nitu</b> </h2>
                            <p>nitu@example.com</p>
                            <div class="col item social" style="text-indent: 3rem; font-size:30px;"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-snapchat"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="images/ashvi.jpg" alt="Mike" width="350px" height="350px">
                        <div class="container">
                            <h2> <b>Ashvi Bansal</b> </h2>
                            <p>ashvi@example.com</p>
                            <div class="col item social" style="text-indent: 3rem; font-size:30px;"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-snapchat"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </body>


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