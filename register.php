<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/register.css">
    <!-- Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <a class="big-title" href="index.php">Area Type</a>
        <form action="register.php" method="get">
            <div class="s">
                <h1>Inscription</h1>
            </div>

            <div class="title">
            </div>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nom d'utilisateur *</span>
                    <input type="text" required>
                </div>
                <div class="input-box">
                    <span class="details">Email *</span>
                    <input type="email" required>
                </div>
                <div class="title">
                </div>
                <div class="input-box">
                    <span class="details">Mot de passe *</span>
                    <input type="password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirmer mot de passe *</span>
                    <input type="password" required>
                </div>
                <input class="submit" type="submit" value="Créer compte">
            </div>

    </div>
    </form>
    </div>

</body>

</html>