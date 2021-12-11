<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fresh Food | Contact</title>
    <link rel="stylesheet" href="http://localhost/freshfood/assets/styles/contact.css">

</head>

<body>
    <a class="backContainer" href="<?= base_url() . 'home' ?>">
        <p>Back to home</p>
    </a>
    <div class="container">
        <h1>Connect With Us</h1>
        <p>We would love to respond to your queries and help you succeed.<br> Feel free to get in touch with us</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Sent your request</h3>
                <form action="<?= base_url() . "contact/sendAction" ?>" method="post">
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" placeholder="Enter your name" name="name" required>
                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="text" placeholder="Enter your phone" name="phone" required>
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your mail" name="email" required>
                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" placeholder="Enter your Note" name="subject" required>
                        </div>
                    </div>

                    <label>Message</label>
                    <textarea rows="5" placeholder="Your Message" name="message" required></textarea>

                    <button type="submit">SEND</button>
                </form>
            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>freshfood@example.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>082269873830</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>#77, Batam Center, Sei Panas <br>
                            Perumahan Kintamani Blok D1 </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>