<?php
// Tableau des recettes avec images et descriptions
$recettes = [
    ['id' => 1, 'nom' => 'Couscous Marocain', 'image' => 'assets/couscous-marocain.jpeg', 'desc' => 'Plat traditionnel nord-africain'],
    ['id' => 2, 'nom' => 'Poulet Moambe', 'image' => 'assets/Poulet Moambe.png', 'desc' => 'Spécialité africaine à la sauce palmiste'],
    ['id' => 3, 'nom' => 'Bœuf Bourguignon', 'image' => 'assets/Bœuf Bourguignon.png', 'desc' => 'Classique français mijoté au vin rouge'],
    ['id' => 4, 'nom' => 'Lasagnes', 'image' => 'assets/Lasagne.png', 'desc' => 'Pâtes italiennes feuilletées à la bolognaise'],
    ['id' => 5, 'nom' => 'Burger ', 'image' => 'assets/Burger.png', 'desc' => 'Sandwich américain revisité'],
    ['id' => 6, 'nom' => 'Sushi ', 'image' => 'assets/Sushi.png', 'desc' => 'Spécialité japonaise au poisson cru'],
    ['id' => 7, 'nom' => 'Mezzé Libanais', 'image' => 'assets/muzze.png', 'desc' => 'Assortiment de mezze du Moyen-Orient'],
    ['id' => 8, 'nom' => 'Paella Valenciana', 'image' => 'assets/Paella.png', 'desc' => 'Riz espagnol aux fruits de mer'],
    ['id' => 9, 'nom' => 'Canard laqué', 'image' => 'assets/canards-du-lac-brome-recette-canard-laque-orange-R-1024x732.jpg', 'desc' => 'Spécialité chinoise croustillante'],
    ['id' => 10, 'nom' => 'Ratatouille', 'image' => 'assets/healthy-vegetarian-lunch-stewed-garden-vegetables-vegetable-ratatouille.jpg', 'desc' => 'Légumes provençaux mijotés'],
    ['id' => 11, 'nom' => 'Tajine d\'agneau', 'image' => 'assets/tajine-agneau-rapide.jpg', 'desc' => 'Plat marocain aux pruneaux'],
    ['id' => 12, 'nom' => 'Pad Thaï', 'image' => 'assets/padthai2-min.webp', 'desc' => 'Nouilles sautées thaïlandaises']
];

// Configuration de la pagination
$recettesParPage = 6;
$pageCourante = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$totalRecettes = count($recettes);
$totalPages = ceil($totalRecettes / $recettesParPage);

// Validation de la page
if($pageCourante > $totalPages) $pageCourante = $totalPages;

// Récupération des recettes pour la page courante
$debut = ($pageCourante - 1) * $recettesParPage;
$recettesPage = array_slice($recettes, $debut, $recettesParPage);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toutes les Recettes</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <img src="assets/LOGO.png" alt="Logo du site">
      </div>
      <ul class="menu">
        <li><a href="index.html">Accueil</a></li>
        <li><a href="recettes.php">Recettes</a></li>
        <li><a href="articles.html">Articles</a></li>
        <li><a href="Accueil.html">Guide Nourriture</a></li>
      </ul>
      <a href="connexion.html" class="btn-login">Connexion / Inscription</a>
    </nav>
  </header>

  <main>
    <section class="recettes-list">
      <h2>Toutes les Recettes</h2>
      <div class="recettes-grid">
        <?php foreach ($recettesPage as $recette): ?>
          <div class="recette-card">
            <img src="<?= htmlspecialchars($recette['image']) ?>" alt="<?= htmlspecialchars($recette['nom']) ?>">
            <a href="recette.php?id=<?= $recette['id'] ?>"><?= htmlspecialchars($recette['nom']) ?></a>
            <p><?= htmlspecialchars($recette['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      
      <div class="pagination">
        <?php if ($pageCourante > 1): ?>
          <a href="?page=<?= $pageCourante - 1 ?>">«</a>
        <?php endif; ?>
        
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
          <?php if ($i == $pageCourante): ?>
            <span class="current"><?= $i ?></span>
          <?php else: ?>
            <a href="?page=<?= $i ?>"><?= $i ?></a>
          <?php endif; ?>
        <?php endfor; ?>
        
        <?php if ($pageCourante < $totalPages): ?>
          <a href="?page=<?= $pageCourante + 1 ?>">»</a>
        <?php endif; ?>
      </div>
    </section>
  </main>

  <footer>
    <div class="newsletter-footer">
      <h3>Inscrivez-vous à notre newsletter</h3>
      <p>Recevez chaque semaine de nouvelles recettes et conseils nutrition !</p>
      <form action="#" method="post">
        <input type="email" name="email" placeholder="Votre adresse e-mail" required>
        <button type="submit">S'inscrire</button>
      </form>
    </div>
    <p>&copy; 2025 Forum de Recettes - Tous droits réservés</p>
  </footer>
</body>
</html>