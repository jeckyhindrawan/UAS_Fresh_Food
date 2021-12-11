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
    <div class="container">
        <?php
        $this->load->view('header');
        ?>
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