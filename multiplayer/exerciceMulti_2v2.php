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
            <div id="info">30</div>
        </div>

        <div class="container" id="game" tabindex="0">
            <div id="words"></div>
            <div id="cursor" style="transition: 0.2s ease;"></div>
            <div id="focus-error">Click here to focus</div>
        </div>

        <div id="footer">
            <div id="buttons">
                <button><img src="../assets/svg/restart.png" alt=""></button>
                <button><img src="../assets/svg/next.png" alt=""></button>
            </div>
        </div>
    </section>

    <script src="../assets/js/exercice2v2.js"></script>
</body>

</html>