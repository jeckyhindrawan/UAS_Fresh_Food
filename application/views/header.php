<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url() . '/assets/styles/header.css' ?>">
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
                            <a class="dropdown-menu" href="<?= base_url() . 'profile' ?>">Profile</a>
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
                    foreach ($categories as $c) {
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
</body>

</html>