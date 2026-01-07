<?php
include 'asset/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/normalize.css">
    <link rel="stylesheet" href="style.css">
    <title>Acceuil</title>
</head>
<body>
    <div class="Container Con-Top">
        <h1>Découvrez les projets étudiants</h1>  
    </div>
    <div class="Container">
        <p>Votez pour les meilleures idées !</p>    
    </div>
    <div class="Con-Mar">
        <h2 class="projects-header__title">Projets proposés</h2>

        <div class="projects-header__actions">
            <button class="btn-secondary">
            Plus récents
            </button>
            <button class="btn-secondary">
            Plus votés
            </button>
        </div>
    </div>


  <div class="grid Con-Mar">
    <div class="carte">
      <h3 class="carte-titre">Application de gestion de notes</h3>
      <p class="carte-info">Pierre Dupont • 15 nov 2025</p>
      <p class="carte-description">
        Une application web permettant aux étudiants de suivre leurs notes et moyennes par matière.
      </p>
      <div class="carte-footer">
        <button class="carte-votes">28 votes</button>
        <button class="carte-details"><a href="projet.php" class="link-reset white-link" >Voir détails</a></button>
      </div>
    </div>

    <div class="carte">
      <h3 class="carte-titre">Réseau social étudiant</h3>
      <p class="carte-info">Marie Martin • 12 nov 2025</p>
      <p class="carte-description">
        Plateforme d’échange entre étudiants pour partager des ressources et s’entraider.
      </p>
      <div class="carte-footer">
        <button class="carte-votes">45 votes</button>
        <button class="carte-details"><a href="projet.php" class="link-reset white-link" >Voir détails</a></button>
      </div>
    </div>

    <div class="carte">
      <h3 class="carte-titre">Réseau social étudiant</h3>
      <p class="carte-info">Marie Martin • 12 nov 2025</p>
      <p class="carte-description">
        Plateforme d’échange entre étudiants pour partager des ressources et s’entraider.
      </p>
      <div class="carte-footer">
        <button class="carte-votes">45 votes</button>
        <button class="carte-details"><a href="projet.php" class="link-reset white-link" >Voir détails</a></button>
      </div>
    </div>

  </div>
</section>

</body>
<?php include 'asset/footer.php'; ?>
</html>c

