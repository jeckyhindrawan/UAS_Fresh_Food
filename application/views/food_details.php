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
    <div class="container">
        <div class="header">
            <div class="menuBar">
                <div class="topBar">
                    <div class="leftMenu">
                        <a href="<?= base_url() . 'home' ?>">
                            <img src="http://localhost/freshfood/assets/images/Logo.png" alt="logo" class="logo">
                        </a>
                        <p class="selectedMenu">Menu</p>
                        <p class="menuList">About</p>
                        <p class="menuList">Contact</p>
                    </div>
                    <div class="rightMenu">
                        <div class="cartContainer">
                            <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon" class="cartIcon">
                            <p>Your Cart (0)</p>
                        </div>
                        <div class="userIconContainer">
                            <img src="http://localhost/freshfood/assets/images/user.png" alt="icon" class="userIcon">
                        </div>

                        <div class="search-box">
                            <input class="search-txt" type="text" name="" placeholder="Type to search">
                            <img src="http://localhost/freshfood/assets/images/search.png" alt="icon" class="userIcon">
                        </div>
                        <div class="box">
                            <img src="http://localhost/freshfood/assets/images/lonceng.png" alt="icon" class="userIcon">
                        </div>
                    </div>
                </div>
                <div class="topBar">
                    <div class="bottomLeftMenu">
                        <p class="bottomSelectedMenu">All</p>
                        <p class="bottomMenuList">Weight Loss</p>
                        <p class="bottomMenuList">Weight Gain</p>
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
            <?php
            $count = 0;
            $temp = "";
            for ($x = 0; $x < 3; $x++) {
                do {
                    $randomNumber = rand(0, count($All_food_details) - 1);
                } while (strpos($temp, $randomNumber) == true || $randomNumber == $food_details['0']->id);
                $temp = "$temp|$randomNumber";
            ?>
            <div class="sidebarContainer">
                <a class="sideBarMenuContainer"
                    href="<?= base_url() . 'home/food_details/' . $All_food_details[$randomNumber]->id; ?>">
                    <div class="sideBarMenu">
                        <img src="http://localhost/freshfood/assets/images/<?= $All_food_details[$randomNumber]->id ?>.png"
                            alt="imageMenu" class="pastaImage">
                        <div className="subMenuDescContainer">
                            <p class="judulMakananSideBar">
                                <strong><?= $All_food_details[$randomNumber]->title ?></strong>
                            </p>
                            <?php
                                for ($i = 0; $i < $fd->rating; $i++) {
                                ?>
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <?php } ?>
                            <div class="bigMenu">
                                <div class="containerIconClock">
                                    <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                        class="iconLoncengKecil">
                                    <p class="sideBarSmallText"><?= $All_food_details[$randomNumber]->meals ?> Meals</p>
                                </div>
                                <div class="containerIconClock">
                                    <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                        class="clockIcon">
                                    <p class="sideBarSmallText"><?= $All_food_details[$randomNumber]->days ?> Days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
</body>

</html>