<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/css/exercice.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Type - Exercice</title>
</head>

<body>
    <?php include '../assets/php/nav2.php' ?>
    <section class="exercice">
        <div id="header">
            <div id="info">
                <div id="life_option">
                    <label id="life_option-items">
                        <img src="../assets/img/heart.png" class="heart" alt="">
                        <p>Chose the amount of life you want to get !</p>
                        <input type="number" id="lifeNumber" value="1" max="15">
                        <p id="life_0">Choose an amount of heart between 1-15</p>
                        <button id="game_starter" onclick="gameStarter()">Get lives</button>
                    </label>
                </div>

            </div>
        </div>
        <div class="life_counter">
            <p class="life_changer"></p>
            <img src="../assets/img/heart.png" alt="heart" style="width:50px" class="heart">
        </div>
        <div class="container" id="game" tabindex="0">

            <div id="words"></div>
            <div id="cursor" style="transition: 0.2s ease;"></div>
            <div id="focus-error">Click here to focus</div>
        </div>

        <div id="footer">
            <div id="buttons">
                <button id="refresh"><img src="../assets/svg/restart.png" alt=""></button>
            </div>
        </div>
    </section>

    <script src="../assets/js/exerciceLife.js"></script>
</body>
<script>
document.getElementById('lifeNumber').addEventListener('input', function(e) {
    if (this.value > 15) {
        this.value = 15;
    } else if (this.value <= 0) {
        this.value = null;
    }
});
</script>

</html>