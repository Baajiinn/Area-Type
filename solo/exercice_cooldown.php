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
            <div class="time-b" id="time-b">
                <button id="timeFixed30">30</button>
                <button class=" push" id="timeFixed60" onclick="selectButton(this)">60</button>
                <button class="push" id="timeFixed120" onclick="selectButton(this)">120</button>
                <button class="push" id="timeFixed" onclick="selectButton(this)"></button>
            </div>

            <div id="info"></div>
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

    <script src="../assets/js/exerciceCooldown.js"></script>
</body>

</html>