<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url() . '/assets/styles/header.css' ?>">
</head>

<body>
    <script type="text/javascript">
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
            for (i = 0; i < dropdowns2.length; i++) {
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
                            <p class="cartText">Your Cart (<?= array_sum(array_column($cart, 'qty')) ?>)</p>
                        </button>
                        <div id="myDropdown3" class="dropdown-content3">
                            <div class="cartHeader">
                                <h3 class="Heading">Shopping Cart</h3>
                                <a class="Action" href="<?= base_url() . "home/removeCart" ?>">Remove all</a>
                            </div>
                            <?php
                            $moreThen3Style = (sizeof($cart) > 3) ? "overflow-y: scroll; height:300px;" : "overflow:hidden;";
                            ?>
                            <div style="<?= $moreThen3Style ?>">
                                <?php
                                $total = 0;
                                $emptyCart = sizeof($cart) == 0;
                                if ($emptyCart) {
                                    echo "<p>Data Kosong</p>";
                                }
                                foreach ($cart as $c) {
                                    $total += $c->price * $c->qty;
                                ?>
                                <div class="cartContainerList">
                                    <img src="http://localhost/freshfood/assets/images/<?= $c->id ?>.png"
                                        class="cartImage" />

                                    <div class="about">
                                        <h1 class="title"><?= $c->title ?></h1>
                                    </div>
                                    <div class="button-container">
                                        <button class="cart-qty-plus" type="button" value="+">+</button>
                                        <input type="text" name="qty" min="0" class="qty form-control" value="0" />
                                        <button class="cart-qty-minus" type="button" value="-">-</button>
                                    </div>
                                    <div class="prices">
                                        <div class="amount">$<?= $c->price * $c->qty ?></div>
                                        <a class="remove"
                                            href="<?= base_url() . "home/removeCart/$c->cartID" ?>"><u>Remove</u></a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <form action="<?php echo base_url() . 'home/checkout/'; ?>">
                                <div class="total">
                                    <div>
                                        <div class="Subtotal">Sub-Total</div>
                                        <div class="items"><?= array_sum(array_column($cart, 'qty')) ?> items</div>
                                    </div>
                                    <div class="total-amount">$<?= $total ?></div>
                                </div>
                                <button type="submit" <?php if ($emptyCart) {
                                                            echo "disabled";
                                                        } ?> class="button">Checkout</button>
                            </form>
                            <?php ?>
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
                        <?php $moreThen5Style = (sizeof($history) > 5) ? "overflow-y: scroll; height:500px;" : "overflow:hidden;"; ?>
                        <div id="myDropdown2" class="dropdown-content2" style="<?= $moreThen5Style ?>">
                            <?php foreach (array_reverse($history) as $h) { ?>
                            <div class="listNotif">
                                <p class="notifTitle">Purchase Successful</p>
                                <p class="notifSubtitle">
                                    <?= "$h->item_count Item" . $retVal = ($h->item_count > 1) ? 's' : ''; ?></p>
                            </div>
                            <?php } ?>
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