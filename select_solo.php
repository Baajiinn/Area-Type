<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solo - Unrated Gamemods</title>
    <link rel="stylesheet" href="/assets/css/gamemods.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
</head>

<body class="solo-p">
    <?php include "assets/php/nav.php" ?>
    <section class="section-container">
        <div class="container">
            <div class="box-list solo">
                <a class="box" href="solo/exercice_life.php">
                    <div class="title-unrated">Vies</div>
                    <br>
                    <div class="description"><img src="assets/img/heart.png" alt=""></div>
                    <br>
                    <div class="descirption">Taper jusqu'à ne plus avoir de vies restantes</div>
                </a>
                <a class="box" href="solo/exercice_cooldown.php">
                    <div class="title-unrated">Temps</div>
                    <br>
                    <div class="description"><img src="assets/img/sand.png" alt=""></div>
                    <br>
                    <div class="descirption">Taper le plus de texte avant la fin du temps fixé</div>
                </a>
                <a class="box" href="solo/exercice_infinite.php">
                    <div class="title-unrated">Infinie</div>
                    <br>
                    <div class="description"><img src="assets/img/infinie.png" alt=""></div>
                    <br>
                    <div class="descirption">Jouer contre vous même à travers une course</div>
                </a>
            </div>
        </div>
    </section>
</body>

</html>