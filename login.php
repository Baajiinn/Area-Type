<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <?php
    include './assets/php/nav.php';
    ?>
    <form action="index.php" method="get">
        <h1>Login</h1>
        <br>
        <input type="email" id="email" placeholder="Email">
        <br>
        <br>
        <input type="password" name="" id="password" placeholder="Password">
        <a class="lost" href="#">Password lost</a>
        <br>
        <br>
        <input class="submit" type="submit" value="Connect">
    </form>
</body>

</html>