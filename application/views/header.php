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

    function myFunction2() {
        document.getElementById("myDropdown2").classList.toggle("show2");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn2')) {
            var dropdowns2 = document.getElementsByClassName("dropdown-content2");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown2 = dropdowns2[i];
                if (openDropdown2.classList.contains('show2')) {
                    openDropdown2.classList.remove('show2');
                }
            }
        }
    }

    function myFunction3() {
        document.getElementById("myDropdown3").classList.toggle("show3");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.cartContainer')) {
            var dropdowns2 = document.getElementsByClassName("dropdown-content3");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown2 = dropdowns2[i];
                if (openDropdown2.classList.contains('show3')) {
                    openDropdown2.classList.remove('show3');
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
                    <div class="dropdown">
                        <button onclick="myFunction3()" class="cartContainer">
                            <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon" class="cartIcon">
                            <p class="cartText">Your Cart (0)</p>
                        </button>
                        <div id="myDropdown3" class="dropdown-content3">
                            <div class="cartHeader">
                                <h3 class="Heading">Shopping Cart</h3>
                                <h5 class="Action">Remove all</h5>
                            </div>
                            <?php
                            $total = 0;
                            $emptyCart = sizeof($cart) == 0;
                            if ($emptyCart) {
                                echo "<p>Data Kosong</p>";
                            } else {
                                foreach ($cart as $c) {
                                    $total += $c->price;
                            ?>
                            <div class="cartContainerList">
                                <img src="http://localhost/freshfood/assets/images/1.png" class="cartImage" />

                                <div class="about">
                                    <h1 class="title"><?= $c->title ?></h1>
                                </div>
                                <div class="counter">
                                    <div class="btn">+</div>
                                    <div class="count">2</div>
                                    <div class="btn">-</div>
                                </div>
                                <div class="prices">
                                    <div class="amount">$<?= $c->price ?></div>
                                    <div class="remove"><u>Remove</u></div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="total">
                                <div>
                                    <div class="Subtotal">Sub-Total</div>
                                    <div class="items"><?= sizeof($cart) ?> items</div>
                                </div>
                                <div class="total-amount">$<?= $total ?></div>
                            </div>
                            <button class="button">Checkout</button>
                            <?php } ?>
                        </div>
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
                        <button onclick="myFunction2()" class="dropbtn2"> <img
                                src="http://localhost/freshfood/assets/images/lonceng.png" alt="icon"
                                class="userIcon"></button>
                        <div id="myDropdown2" class="dropdown-content2">
                            <div class="listNotif">
                                <p class="notifTitle">Title</p>
                                <p class="notifSubtitle">Subtitle</p>
                            </div>
                            <div class="listNotif">
                                <p class="notifTitle">Title</p>
                                <p class="notifSubtitle">Subtitle</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topBar">
                <div class="bottomLeftMenu">
                    <a class="categoryButton" href="<?= base_url() . "home" ?>">
                        <p class="bottomSelectedMenu">All</p>
                    </a>
                    <?php
                    foreach ($categories as $c) { ?>
                    <a class=" categoryButton" href="<?= base_url() . "home?category=" . $c->id ?>">
                        <p class="bottomMenuList"><?= $c->name ?></p>
                    </a>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>