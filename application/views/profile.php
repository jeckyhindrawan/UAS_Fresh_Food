<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fresh Food | Profile</title>
    <link rel="stylesheet" href="<?= base_url() . '/assets/styles/profile.css' ?>">
</head>

<body>
    <?php foreach ($user as $u) : ?>
    <div class="container">
        <div class="upper-container">
            <div class="img-container">
                <img src="http://localhost/freshfood/assets/images/profile.jpeg" />
            </div>
        </div>
        <div class="lower-container">
            <div>
                <h3><?= $u->username ?></h3>
                <h4><?= $u->email ?></h4>
            </div>
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Necessitatibus cum quaerat vero amet deserunt ut perspiciatis animi
                    consectetur o
                </p>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</body>

</html>