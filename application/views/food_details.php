<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fresh Food | Food Details</title>

    <link rel="stylesheet" href="http://localhost/freshfood/assets/styles/food_details.css">

</head>

<body>
    <div class="container">
        <div class="header">
            <div class="menuBar">
                <div class="topBar">
                    <div class="leftMenu">
                        <img src="http://localhost/freshfood/assets/images/Logo.png" alt="logo" class="logo">
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
                        <p class="menuTitle"><strong><?php echo $fd->title ?></strong></p>
                        <p class="caloriesDaysText"><?php echo $fd->subtitle ?></p>
                        <div class="bigMenu">
                            <div class="containerIconLonceng">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="smallText"><?php echo $fd->meals ?> Meals</p>
                            </div>
                            <div class="containerIconLonceng">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="smallText"><?php echo $fd->days ?> Days</p>
                            </div>
                        </div>
                        <div class="bigMenu">
                            <?php
                                for ($i = 0; $i < $fd->rating; $i++) {
                                ?>
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <?php } ?>
                        </div>
                        <p class="menuDesc"><?php echo $fd->description ?></p>
                        <div class="bigMenu">
                            <?php
                                foreach ($categories as $c) {
                                ?>
                            <div class="categoryContainer">
                                <p class="categoryText"><?php echo $c->name ?></p>
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
                $count = 0;
                foreach ($All_food_details as $afd) {
                    if ($afd->id != $food_details[0]->id) {
                        $count++;
                ?>
                <div class="sideBarMenu">
                    <img src="http://localhost/freshfood/assets/images/<?= $afd->id ?>.png" alt="imageMenu"
                        class="pastaImage">
                    <div>
                        <p class="judulMakananSideBar"><strong><?= $afd->title ?></strong></p>
                        <div class="bigMenu">
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="sideBarSmallText"><?= $afd->meals ?> Meals</p>
                            </div>
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="sideBarSmallText"><?= $afd->days ?> Days</p>
                            </div>
                        </div>
                        <div class="sideBarAddCartContainer">
                            <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon"
                                class="sideBarPriceCartIcon">
                            <p class="sideBarAddCartText">Add Cart</p>
                            </button>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    if ($count == 3) {
                        break;
                    }
                }
                ?>
            </div>
        </div>

</body>

</html>