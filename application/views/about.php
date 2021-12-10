<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fresh Food | About</title>
    <link rel="stylesheet" href="http://localhost/freshfood/assets/styles/about.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body>
    <div class="header">
        <div class="menuBar">
            <div class="topBar">
                <div class="leftMenu">
                    <img src="http://localhost/freshfood/assets/images/Logo.png" alt="logo" class="logo">
                    <a href="<?= base_url() . 'home' ?>" class="selectedMenu">Menu</a>
                    <a href="<?= base_url() . 'about' ?>" class="menuList">About</a>
                    <a href="<?= base_url() . 'contact' ?>" class="menuList">Contact</a>
                </div>
                <div class="rightMenu">

                    <div class="cartContainer">
                        <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon" class="cartIcon">
                        <p>Your Cart (0)</p>
                    </div>
                    <div class="search-box">
                        <input class="search-txt" type="text" name="" placeholder="Type to search">
                        <img src="http://localhost/freshfood/assets/images/search.png" alt="icon" class="userIcon">
                    </div>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn"><img
                                src="http://localhost/freshfood/assets/images/user.png" alt="icon"
                                class="userIcon"></button>
                        <div id="myDropdown" class="dropdown-content">
                            <a class="dropdown-menu" href="<?= base_url() . 'profil' ?>">Profile</a>
                            <a class="dropdown-menu" href="<?= base_url() . 'logout' ?>">Log Out</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn"> <img
                                src="http://localhost/freshfood/assets/images/lonceng.png" alt="icon"
                                class="userIcon"></button>
                        <div id="myDropdown" class="dropdown-content">
                            <li><span class="dropdown-isi">Your Payment Has Been Successful</span></li>
                            <li><span class="dropdown-isi">Your order has been successfully ordered</span>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                    <p> Modi iste velit doloribus totam, saepe
                        voluptatem commodi ratione, ullam aliquam repellat quo. Quisquam cum veniam inventore
                        exercitationem non hic voluptatem odio.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit corporis est maiores ullam ipsum
                        architecto quod error quis hic pariatur, commodi vitae molestias quibusdam mollitia tempore
                        dolores ea. Laboriosam, perspiciatis.
                    </p>
                </div>
                <div class="button">
                    <a href="">Read More</a>
                </div>
                <div class="social">
                    <class= href=""><i class="fab fa-facebook-f"></i></a>
                        <class= href=""><i class="fab fa-twitter"></i></a>
                            <class= href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="http://localhost/freshfood/assets/images/logo.png">
            </div>
        </div>
    </div>
</body>

</html>