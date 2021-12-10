<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fresh Food | Contact</title>
    <link rel="stylesheet" href="http://localhost/freshfood/assets/styles/contact.css">

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
    <div class="container">
        <h1>Connect With Us</h1>
        <p>We would love to respond to your queries and help you succeed.<br> Feel free to get in touch with us</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Sent your request</h3>
                <form>

                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" placeholder="Enter your name">
                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="text" placeholder="Enter your phone">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your mail">
                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" placeholder="Enter your Note">
                        </div>
                    </div>

                    <label>Message</label>
                    <textarea rows="5" placeholder="Your Message"></textarea>

                    <button type="submit">SEND</button>
                </form>
            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>

                <table>
                    <tr>
                        <td>Email</td>
                        <td>freshfood@examle.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>082269873830</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>#77, Batam Center, Sei Panas <br>
                            Perumahan Kintamani Blok D1 </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>