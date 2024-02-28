<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/select_gamemod.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multijoueur - Mode de jeu</title>
    <!-- Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include 'assets/php/nav.php' ?>
    <section class="flex-container">
        <div>
            <a class="container" href="/multiplayer/ur_multiplayer.php">
                <div class="title-unrated">Unrated</div>
                <br>
                <div class="descirption">
                    <p>Jouer avec vos amis ou contre d'autres personnes dans des parties non classées</p>
                </div>
            </a>

        </div>
        <div>
            <a class="container" href="/multiplayer/rk_multiplayer.php">
                <div class="title-ranked">Ranked</div>
                <br>
                <div class="descirption">Jouer avec vos amis ou contre d'autres personnes dans des parties classées
                </div>
                <div class="rank">Votr rang : <img src="assets/img/rank_8.webp" alt=""></div>
            </a>


        </div>
    </section>

</body>

</html>