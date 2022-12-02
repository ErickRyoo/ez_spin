<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ez Spin Laundry Shop</title>
    <link rel="stylesheet" href="css/userpage.css">
</head>
<body>
    <div class="hero">
        <nav>
            <img src="images/logo.svg" class="logo">
            <ul>
                <li><a href="book.php">Book Now</a></li>
                <li><a href="order.php">Order Status</a></li>
            </ul>
            <img src="images/profilepic.png" class="user-pic" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="images/profilepic.png" alt="">
                        <h3><?php echo $_SESSION['user_name'] ?></h3>
                    </div>
                    <hr>

                    <a href="#" class="sub-menu-link">
                        <img src="images/profile.png">
                        <p>Edit Profile</p>
                        <span></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="images/settings.png">
                        <p>Settings</p>
                        <span></span>
                    </a>
                    <a href="logout.php" class="sub-menu-link">
                        <img src="images/logout.png">
                        <p>Logout</p>
                        <span></span>
                    </a>
                    
                </div> 
            </div>
        </nav>

        <div class="content">
            <h1>EFFORTLESS SCHEDULING SAVE TIME & MONEY</h1> 
            <p> We offers great services, so you can get your laundry done in no time.</p>
            <div>
                <a href="book.php">
                <button type="button"><span class="button"></span>BOOK NOW</button>
                </a>
                <a href="order.php"">
                <button type="button"><span class="button"></span> ORDER STATUS</button></a>
               
            </div>
        </div>
    </div>
    <div class="background-image"></div>
<script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>
</body>
</html>