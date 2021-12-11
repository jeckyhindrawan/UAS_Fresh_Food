<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <title>Login Page</title>
    <link rel="stylesheet" href="http://localhost/freshfood/assets/styles/login.css">
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signup-signup">
                <form action="<?= base_url() . 'signup/actionSignup' ?>" class="sign-up-form" method="post">
                    <h2 class="title">Sign Up</h2>
                    <h2>
                        <?= $this->session->flashdata('message'); ?>
                    </h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirmation Password" name="password2" required />
                    </div>
                    <div>

                    </div>
                    <input type="submit" class="btn solid" value="register" />
                </form>
                <div class="signUpContainer">
                    <a class="btnSignup" href="<?= base_url() . 'login'; ?>">Have Account ? Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>