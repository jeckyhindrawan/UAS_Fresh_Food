<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fresh Food | Home</title>
    <link rel="stylesheet" href="<?= base_url() . '/assets/styles/home.css' ?>">
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
                        <img src="http://localhost/freshfood/assets/images/Logo.png" alt="logo" class="logo">
                        <?php foreach ($HeaderMenu as $hm) { ?>
                        <p class=" <?= $hm->class ?>"><?= $hm->title ?></p>
                        <?php } ?>
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