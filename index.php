<?php 
    include "db.php";
    if (isset($_POST['subscribe'])) {
        $email = $_POST['email'];
        $addd = mysqli_query($connect, "insert into mail ('email') values ('$email')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="wrapper">
        <div class="left">
            <div class="left__content">
                                <!-- Navbar goes here -->
                <nav class="nav">
                    <div class="logo">
                        <img src="./logo_pineapple.svg" alt="Logo" class="logo-text">
                        <img src="logo.jpg" alt="" class="just-logo">
                    </div>
                    <ul class="list">
                        <li class="list__item"><a href="#" class="list-item__link">About</a></li>
                        <li class="list__item"><a href="#" class="list-item__link">How it works</a></li>
                        <li class="list__item"><a href="#" class="list-item__link">Contact</a></li>
                    </ul>
                </nav>
                                <!-- Navbar ends here -->

                                <!-- Content goes here -->
                <div id="content">
                    <img src="ic_success.svg" alt="success logo"  id="success-logo">
                    <p id="heading" >Subscribe to newsletter</p>
                    <p id="subHeading">Subscribe to our newsletter and get 10% discount on pineapple glasses</p>
                </div>
                                <!-- Content goes here -->

                                <!-- form goes here -->

                <form action="index.php" name="form1" method="POST" id="form">
                    <input type="email"  id="email" name="email" class="input" placeholder="Type your email address here..." required onclick="ValidateEmail(document.form1.email)">
                    <button id="button" type="submit" name="subscribe" class="button"> <img class="btn-image" src="ic_arrow.svg"> </button>
                </form>
                <form action="" id="form2">
                    <input id="input" type="checkbox" class="checkbox" checked>
                    <span class="checkbox-text">I agree to </span><a href="" class="termsOfService">terms of service</a> 
                </form>
                                <!-- form ends here -->

                <div id="line"></div>  
                                <!-- Social icons goes here -->
                <div id="social-icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                </div>
                                <!-- Social icons goes here -->

            </div>
        </div>

                                <!-- Right content goes here -->
        <div class="right"></div>
                                <!-- Right ends goes here -->

    </div>
    <script src="index.js"></script>

</body>
</html>