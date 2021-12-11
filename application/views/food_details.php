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
        <?php
        $this->load->view('header');
        ?>
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
                                foreach ($food_categories as $c) {
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
                $temp = "#|" . $food_details['0']->id - 1 . "|";
                for ($x = 0; $x < 3; $x++) {
                    do {
                        $randomNumber = rand(0, count($all_food_details) - 1);
                    } while (strpos($temp, "|" . $randomNumber . "|") == true);
                    $temp = "$temp|$randomNumber|";
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