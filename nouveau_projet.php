<?php
include 'asset/header.php'; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>nouveau projet</title>
</head>
<body>
    <div class="new-project-page Con-Top">
    <div class="new-project-header">
        <h1>Proposer un nouveau projet</h1>
        <p>Partagez votre idée avec les autres étudiants</p>
    </div>

    <div class="new-project-card card">
        <form class="new-project-form">
            <div class="form-group">
                <label for="titre">
                    <span class="form-icon">📍</span>
                    Titre du projet
                </label>
                <input type="text" id="titre" name="titre"
                       placeholder="Ex: Application de gestion de tâches">
            </div>
            <div class="form-group">
                <label for="nom">
                    <span class="form-icon">👤</span>
                    Votre nom
                </label>
                <input type="text" id="nom" name="nom"
                       placeholder="Ex: Jean Dupont">
            </div>

            <div class="form-group">
                <label for="desc-courte">
                    <span class="form-icon">☰</span>
                    Description courte
                </label>
                <textarea id="desc-courte" name="desc-courte"
                          rows="3"
                          placeholder="Résumé en une phrase (affiché sur les cartes)..."></textarea>
            </div>

            <div class="form-group">
                <label for="desc-detaillee">
                    <span class="form-icon">📄</span>
                    Description détaillée
                </label>
                <textarea id="desc-detaillee" name="desc-detaillee"
                          rows="4"
                          placeholder="Décrivez votre projet en détail..."></textarea>
            </div>

            <div class="form-actions">
                <button type="button" class="btn-retour">✕ Annuler</button>
                <button type="submit" class="btn-connect">
                    <span class="btn-icon">📤</span>
                    Soumettre le projet
                </button>
            </div>
        </form>
    </div>
</div>

</body>
<?php include 'asset/footer.php'; ?>
</html>