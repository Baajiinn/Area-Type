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
    include 'assets/php/nav.php';
    ?>
    <div class="container">
        <form action="index.php" method="get">
            <h1>Login</h1>

            <div class="input-box">
                <input type="email" id="email" placeholder="Email" required>
            </div>

            <div class="input-box">
                <input type="password" name="" id="password" placeholder="Password" required>
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox" name="" id="" /> Remember me
                </label>
                <a class="lost" href="#">Forgot password ?</a>

            </div>

            <input class="submit" type="submit" value="Log in">

            <div class="register-link">
                <p>Don't have an account?</p><a href="register.php">Register Here !</a>
            </div>

        </form>
    </div>

</body>

</html>