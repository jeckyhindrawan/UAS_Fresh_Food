<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fresh Food | Home</title>
    <link rel="stylesheet" href="http://localhost/freshfood/assets/styles/home.css">
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
                        <div class="dropdown">
                            <img src="http://localhost/freshfood/assets/images/user.png" alt="icon" class="userIcon">
                            <button class="dropdown-content">
                                <a class="dropdown-menu" href="">Profile</a>
                                <a class="dropdown-menu" href="">Log Out</a>
                            </button>
                        </div>
                        <div class="search-box">
                            <input class="search-txt" type="text" name="" placeholder="Type to search">
                            <img src="http://localhost/freshfood/assets/images/search.png" alt="icon" class="userIcon">
                        </div>
                        <!-- <div class="box"> -->
                        <div class="dropdown">
                            <span class="num">2</span>
                            <img src="http://localhost/freshfood/assets/images/lonceng.png" alt="icon" class="userIcon">
                            <button class="dropdown-contents">
                                <li><span class="dropdown-isi">Your Payment Has Been Successful</span></li>
                                <li><span class="dropdown-isi">Your order has been successfully ordered</span>
                                </li>
                            </button>
                        </div>
                        <!-- </div> -->
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
            <div class="ListMenuContainer">
                <?php
                foreach ($food_details as $fd) {
                ?>
                <a class="listMenu" href="<?php echo base_url() . 'home/food_details/' . $fd->id; ?>">
                    <img class=" listMenuImage" src="http://localhost/freshfood/assets/images/<?php echo $fd->id ?>.png"
                        alt="image">
                    <div class="listMenuContent">
                        <div class="bigMenu">
                            <?php
                                for ($i = 0; $i < $fd->rating; $i++) {
                                ?>
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <?php } ?>
                        </div>
                        <p class="listMenuTitle"><?php echo $fd->title ?></p>
                        <p class="listMenuDesc"><?php echo $fd->description ?></p>
                        <p class="listMenuPrice">$<?php echo $fd->price ?></p>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>