<?php
include 'asset/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/normalize.css">
    <link rel="stylesheet" href="style.css">
    <title>connexion</title>
</head>
<body class="Con-Body">
    <div class="container Con-Top">
        <h1>Connexion</h1>
    </div>
    <div class="container">
        
        <p>Accedez a votre espace personnel</p>
    </div>
    <div class="container">
        <form action="#" class="Con-form">
            <div><label for="identifiant"><img src="asset/profile.png" height="17vh" width="17vw">identifiant</label></div>
            <div><input type="text" id="identifiant" placeholder="Votre identifiant"></div>
            <div><label for="MDP"><img src="asset/padlock.png" height="17vh" width="17vw">Mot de passe</label></div>
            <div><input type="text" id="MDP" placeholder="Votre mot de passe"></div>
            <div class="form-actions">
                <button type="button" class="btn-retour">
                ← Retour
            </button>

            <button type="submit" class="btn-connect">
            <span class="btn-icon">🔒</span>
            <span>Se connecter</span>
            </button>
            </div>
        </form>
    </div>
    <?php include 'asset/footer.php'; ?>
</body>
</html>