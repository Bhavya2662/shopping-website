<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email or Password is Wrong.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="loginstyle.css">

    <title>Login Form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="loginemail">
            <p class="login-text" style="font-size: 2rem; font-weight: 800; text-align: center; ">Login</p>
            <div class="inputgrp">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="inputgrp">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="inputgrp">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="register-text">Don't have an account? <a style="color: turquoise;
    text-decoration: none;" href="register.php">Register Here</a>.</p>
        </form>
    </div>
</body>

</html>