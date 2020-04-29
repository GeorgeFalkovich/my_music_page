<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<!-- Navbar -->

<?php require_once ('navbar.php') ?>

<!-- End of navbar -->

<section id="contacts">

<div id="contacts-text">
    <form action="/send_mail.php" method="post">
        <label for="fname">Name:</label> <br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="contact">Email / Phone:</label><br>
        <input type="text" id="contact" name="lname"><br><br>
        <label for="msg">Your message:</label> <br>
       <textarea cols="30" rows="10"></textarea> <br><br>
        <button type="submit" value="Submit">Send</button>
    </form>
</div>

</section>
</body>

</html>