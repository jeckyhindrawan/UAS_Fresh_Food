<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fresh Food | Food Details</title>
    <link rel="stylesheet" href="<?= base_url() . '/assets/styles/food_details.css' ?>">
</head>

<body>
    <script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    </script>


    <div class="container">
        <div class="header">
            <div class="menuBar">
                <div class="topBar">
                    <div class="leftMenu">
                        <a href="<?= base_url() . 'home' ?>">
                            <img src="http://localhost/freshfood/assets/images/Logo.png" alt="logo" class="logo">
                        </a>
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
                <div class="topBar">
                    <div class="bottomLeftMenu">
                        <p class="bottomSelectedMenu">All</p>
                        <?php
                        $count = 0;
                        foreach ($all_categories as $c) {
                            $count++; ?>

                        <p class="bottomMenuList"><?= $c->name ?></p>
                        <?php
                            if ($count == 2) {
                                break;
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainContainer">
            <div class="foodContainer">
                <?php
                foreach ($food_details as $fd) {
                ?>
                <div class="bigMenu">
                    <img src="http://localhost/freshfood/assets/images/<?= $fd->id ?>.png" alt="image"
                        class="chickenImage">
                    <div>
                        <p class="menuTitle"><strong><?= $fd->title ?></strong></p>
                        <p class="caloriesDaysText"><?= $fd->subtitle ?></p>
                        <div class="bigMenu">
                            <div class="containerIconLonceng">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="smallText"><?= $fd->meals ?> Meals</p>
                            </div>
                            <div class="containerIconLonceng">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="smallText"><?= $fd->days ?> Days</p>
                            </div>
                        </div>
                        <div class="bigMenu">
                            <?php
                                for ($i = 0; $i < $fd->rating; $i++) {
                                ?>
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <?php } ?>
                        </div>
                        <p class="menuDesc"><?= $fd->description ?></p>
                        <div class="bigMenu">
                            <?php
                                foreach ($categories as $c) {
                                ?>
                            <div class="categoryContainer">
                                <p class="categoryText"><?= $c->name ?></p>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="priceContainer">
                    <p class="priceText"><strong>$<?= $fd->price ?></strong></p>
                    <div class="addCartContainer">
                        <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon" class="priceCartIcon">
                        <p class="addCartText">Add Cart</p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- sidebar -->
            <div class="sidebarContainer">
                <?php
                if (count($food_details) == 0) {
                    redirect(base_url() . 'home');
                }
                $count = 0;
                $temp = "";
                for ($x = 0; $x < 3; $x++) {
                    do {
                        $randomNumber = rand(0, count($all_food_details) - 1);
                    } while (strpos($temp, $randomNumber) == true || $randomNumber == $food_details['0']->id);
                    $temp = "$temp|$randomNumber";
                ?>
                <div>
                    <a class="sideBarMenuContainer"
                        href="<?= base_url() . 'home/food_details/' . $all_food_details[$randomNumber]->id; ?>">
                        <div class="sideBarMenu">
                            <img src="http://localhost/freshfood/assets/images/<?= $all_food_details[$randomNumber]->id ?>.png"
                                alt="imageMenu" class="pastaImage">
                            <div className="subMenuDescContainer">
                                <p class="judulMakananSideBar">
                                    <strong><?= $all_food_details[$randomNumber]->title ?></strong>
                                </p>
                                <?php
                                    for ($i = 0; $i < $fd->rating; $i++) {
                                    ?>
                                <img src="http://localhost/freshfood/assets/images/star.png" alt="icon"
                                    class="starIcon">
                                <?php } ?>
                                <div class="bigMenu">
                                    <div class="containerIconClock">
                                        <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                            class="iconLoncengKecil">
                                        <p class="sideBarSmallText"><?= $all_food_details[$randomNumber]->meals ?> Meals
                                        </p>
                                    </div>
                                    <div class="containerIconClock">
                                        <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                            class="clockIcon">
                                        <p class="sideBarSmallText"><?= $all_food_details[$randomNumber]->days ?> Days
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
</body>

</html>