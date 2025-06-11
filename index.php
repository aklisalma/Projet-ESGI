<?php
$recettes = [
    ['img' => 'assets/couscous-marocain.jpeg', 'nom' => 'Couscous', 'alt' => 'Couscous marocain'],
    ['img' => 'assets/Poulet Moambe.png', 'nom' => 'Poulet Moambe', 'alt' => 'Poulet Moambe'],
    ['img' => 'assets/Bœuf Bourguignon.png', 'nom' => 'Bœuf Bourguignon', 'alt' => 'Bœuf Bourguignon'],
    ['img' => 'assets/Lasagne.png', 'nom' => 'Lasagne', 'alt' => 'Lasagnes'],
    ['img' => 'assets/Burger.png', 'nom' => 'Burger', 'alt' => 'Burger'],
    ['img' => 'assets/Sushi.png', 'nom' => 'Sushi', 'alt' => 'Sushi'],
    ['img' => 'assets/muzze.png', 'nom' => 'Mezzé', 'alt' => 'Mezzé'],
    ['img' => 'assets/Paella.png', 'nom' => 'Paella', 'alt' => 'Paella'],
    ['img' => 'assets/canard.png', 'nom' => 'Canard laqué', 'alt' => 'Canard laqué']
];

$recettes_par_page = 5;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$total_recettes = count($recettes);
$total_pages = ceil($total_recettes / $recettes_par_page);

$debut = ($page - 1) * $recettes_par_page;
$recettes_a_afficher = array_slice($recettes, $debut, $recettes_par_page);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes de cuisine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <nav>
      <div class="logo">
        <a href="https://tonlien.com">
          <img src="assets/LOGO.png" alt="Logo du site">
        </a>        
      </div>
      <ul class="menu">
        <li><a href="index.html">Accueil</a></li>
        <li><a href="Recettes.html">Recettes</a></li>
        <li><a href="articles.html">Articles</a></li>
        <li><a href="Accueil.html">Guide Nourriture</a></li>
      </ul>
      <a href="connexion.html" class="btn-login">Connexion / Inscription</a>
    </nav>
  </header>
    <main>
        <section class="recettes-aleatoires">
            <h2>Nos délicieuses recettes </h2>
            <div class="recettes-grid">
                <?php foreach ($recettes_a_afficher as $recette): ?>
                    <div class="recette-card">
                        <img src="<?= htmlspecialchars($recette['img']) ?>" alt="<?= htmlspecialchars($recette['alt']) ?>">
                        <a href="recette.php?nom=<?= urlencode($recette['nom']) ?>">
                            <?= htmlspecialchars($recette['nom']) ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?page=<?= $page - 1 ?>">« Précédent</a>
                <?php endif; ?>
                
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <?php if ($i == $page): ?>
                        <span class="current"><?= $i ?></span>
                    <?php else: ?>
                        <a href="?page=<?= $i ?>"><?= $i ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
                
                <?php if ($page < $total_pages): ?>
                    <a href="?page=<?= $page + 1 ?>">Suivant »</a>
                <?php endif; ?>
            </div>
        </section>
    </main>
</body>
</html>