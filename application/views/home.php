<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fresh Food</title>

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
                    <div class="rightMenu">
                        <div class="leafIconContainer">
                            <img src="http://localhost/freshfood/assets/images/leaf.png" alt="icon" class="leafIcon">
                            <p>Dietary</p>
                        </div>
                        <div class="bookIconContainer">
                            <img src="http://localhost/freshfood/assets/images/book.png" alt="icon" class="leafIcon">
                            <p>Calories</p>
                        </div>
                        <div class="sortContainer">
                            <p>Sort by: <strong>Recommended</strong>
                            </p>
                            <img src="http://localhost/freshfood/assets/images/chevron-down.png" alt="icon"
                                class="downIcon">
                        </div>
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
                    <img src="http://localhost/freshfood/assets/images/chickenStick.png" alt="image"
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
                            <div class="containerIconLonceng">
                                <img src="http://localhost/freshfood/assets/images/text.png" alt="icon"
                                    class="textIcon">
                                <p class="smallText">Clean Eating Plan</p>
                            </div>
                        </div>
                        <div class="bigMenu">
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <p class="ratingText"><?php echo $fd->rating ?></p>
                        </div>
                        <p class="menuDesc"><?php echo $fd->description ?></p>
                        <div class="bigMenu">
                            <div class="categoryContainer">
                                <p class="categoryText">Vegetarian</p>
                            </div>
                            <div class="categoryContainer">
                                <p class="categoryText">Low-calorie</p>
                            </div>
                            <div class="categoryContainer">
                                <p class="categoryText">7 days plan</p>
                            </div>
                            <div class="categoryContainer">
                                <p class="categoryText">Detoxing</p>
                            </div>
                        </div>
                        <div class="bigMenu">
                            <div class="secondCategoryContainer">
                                <p class="secondCategoryText">Lunch + Dinner</p>
                            </div>
                            <div class="selectedSecondCategoryContainer">
                                <p class="selectedSecondCategoryText">All Meals</p>
                            </div>
                            <div class="secondCategoryContainer">
                                <p class="secondCategoryText">Lunch + Snacks</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- bottom menu -->
                <p class="day">Day 1</p>
                <div class="underlineBox"></div>
                <div class="bigMenu">
                    <div class="bottomFoodContainer">
                        <p class="day"><strong>Breakfast</strong></p>
                        <img src="http://localhost/freshfood/assets/images/friedPasta.png" alt="menu"
                            class="bottomMenu1">
                        <p class="bottomFoodTitle">Blueberry Yoghurt with
                            Protein Granola</p>
                    </div>
                    <div class="bottomFoodContainer">
                        <p class="day"><strong>Lunch</strong></p>
                        <img src="http://localhost/freshfood/assets/images/tomatoPasta.png" alt="menu"
                            class="bottomMenu1">
                        <p class="bottomFoodTitle">Loaded chicken and
                            pumpkin salad</p>
                    </div>
                    <div class="bottomFoodContainer">
                        <p class="day"><strong>Evening meal</strong></p>
                        <img src="http://localhost/freshfood/assets/images/friedrice.png" alt="menu"
                            class="bottomMenu1">
                        <p class="bottomFoodTitle">Satay chicken with
                            radicchio sauce</p>
                    </div>
                    <div class="bottomFoodContainer">
                        <p class="day"><strong>Snack 1</strong></p>
                        <div class="snackContainer">
                            <div class="bigPlusContainer">
                                <p class="bigPlus">+</p>
                            </div>
                        </div>
                        <p class="bottomFoodTitle">Choose Yourself a
                            snack</p>
                    </div>
                    <div class="bottomFoodContainer">
                        <p class="day"><strong>Dinner</strong></p>
                        <img src="http://localhost/freshfood/assets/images/mincedPork.png" alt="menu"
                            class="bottomMenu1">
                        <p class="bottomFoodTitle">Nonnas spaghettie
                            bolognaise</p>
                    </div>
                </div>
                <div class="priceContainer">
                    <p class="priceText"><strong>$295.58</strong></p>

                    <div class="addCartContainer">
                        <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon" class="priceCartIcon">
                        <p class="addCartText">Add Cart</p>
                    </div>
                </div>
            </div>
            <!-- sidebar -->
            <div>
                <div class="sidebarContainer">
                    <img src="http://localhost/freshfood/assets/images/delicios.png" alt="imageMenu" class="pastaImage">
                    <div>
                        <p class="judulMakananSideBar"><strong>Rasberry & Protein
                                Blondie</strong></p>
                        <div class="bigMenu">
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="sideBarSmallText">28 Meals</p>
                            </div>
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="sideBarSmallText">7 Days</p>
                            </div>
                        </div>
                        <div class="sideBarAddCartContainer">
                            <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon"
                                class="sideBarPriceCartIcon">
                            <p class="sideBarAddCartText">Add Cart</p>
                        </div>
                    </div>
                </div>

                <div class="sidebarContainer2">
                    <img src="http://localhost/freshfood/assets/images/brownis.png" alt="imageMenu" class="pastaImage">
                    <div>
                        <p class="judulMakananSideBar"><strong>Chco Protien<br>
                                Brownie
                            </strong></p>
                        <div class="bigMenu">
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="sideBarSmallText">28 Meals</p>
                            </div>
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="sideBarSmallText">Eat Earth</p>
                            </div>
                        </div>
                        <div class="sideBarCountingBox">
                            <div>
                                <p>-</p>
                            </div>
                            <div class="numberCountingTextContainer">
                                <p class="numberCountingText"><strong>2</strong></p>
                            </div>
                            <div>
                                <p>+</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebarContainer3">
                    <img src="http://localhost/freshfood/assets/images/justwing.png" alt="imageMenu" class="pastaImage">
                    <div>
                        <p class="judulMakananSideBar"><strong>Just Wing it Brekky Ball</strong></p>
                        <div class="bigMenu">
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="sideBarSmallText">28 Meals</p>
                            </div>
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="sideBarSmallText">7 Days</p>
                            </div>
                        </div>
                        <div class="sideBarAddCartContainer">
                            <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon"
                                class="sideBarPriceCartIcon">
                            <p class="sideBarAddCartText">Add Cart</p>
                        </div>
                    </div>
                </div>
                <div class="sidebarContainer3">
                    <img src="http://localhost/freshfood/assets/images/Youtella.png" alt="imageMenu" class="pastaImage">
                    <div>
                        <p class="judulMakananSideBar"><strong>Youtella Protein Cookies</strong></p>
                        <div class="bigMenu">
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="sideBarSmallText">28 Meals</p>
                            </div>
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="sideBarSmallText">7 Days</p>
                            </div>
                        </div>
                        <div class="sideBarAddCartContainer">
                            <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon"
                                class="sideBarPriceCartIcon">
                            <p class="sideBarAddCartText">Add Cart</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>