<?php
include 'asset/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <title>mes projet</title>
</head>
<body>
    <div class="projects-header Con-Mar Con-Top">
        <h1>Mes projets</h1>
        <button class="btn-primary btn-add-project">
            + Créer un nouveau projet
        </button>
    </div>

    <div class="projects-card card Con-Mar">
        <table class="projects-table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Votes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Application de gestion de notes</td>
                    <td>15 nov 2025</td>
                    <td>
                        <button class="vote-pill">
                            <span class="vote-icon">❤</span>
                            <span class="vote-count">28</span>
                        </button>
                    </td>
                    <td class="actions-cell">
                        <button class="btn-secondary btn-table">Voir</button>
                        <button class="btn-primary btn-table border-reset">Modifier</button>
                        <button class="btn-danger btn-table">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Planning de révisions</td>
                    <td>8 nov 2025</td>
                    <td>
                        <button class="vote-pill">
                            <span class="vote-icon">❤</span>
                            <span class="vote-count">19</span>
                        </button>
                    </td>
                    <td class="actions-cell">
                        <button class="btn-secondary btn-table">Voir</button>
                        <button class="btn-primary btn-table border-reset">Modifier</button>
                        <button class="btn-danger btn-table">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<?php include 'asset/footer.php'; ?>
</html>