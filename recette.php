<?php
$recettes = [
  1 => [
    "titre" => "Couscous Marocain",
    "image" => "assets/couscous-marocain.jpeg",
    "description" => "Plat traditionnel nord-africain à base de semoule, légumes, pois chiches et viande.",
    "ingredients" => ["300g de semoule", "2 carottes", "1 courgette", "400g de viande", "Épices marocaines"],
    "etapes" => ["Éplucher les légumes", "Faire revenir la viande avec les épices", "Ajouter les légumes", "Cuire la semoule", "Servir chaud"]
  ],
  2 => [
    "titre" => "Poulet Moambe",
    "image" => "assets/Poulet Moambe.png",
    "description" => "Spécialité africaine à la sauce palmiste.",
    "ingredients" => ["1 poulet", "sauce moambe", "1 oignon", "huile de palme", "sel, poivre"],
    "etapes" => ["Découper le poulet", "Faire revenir avec l'oignon", "Ajouter la moambe", "Laisser mijoter", "Servir avec riz ou banane plantain"]
  ],
  3 => [
    "titre" => "Bœuf Bourguignon",
    "image" => "assets/Bœuf Bourguignon.png",
    "description" => "Classique français mijoté au vin rouge.",
    "ingredients" => ["600g de bœuf", "vin rouge", "carottes", "champignons", "oignons"],
    "etapes" => ["Faire revenir le bœuf", "Ajouter les légumes", "Verser le vin", "Laisser mijoter 2h"]
  ],
  4 => [
    "titre" => "Lasagne",
    "image" => "assets/Lasagne.png",
    "description" => "Pâtes italiennes feuilletées à la bolognaise.",
    "ingredients" => ["Feuilles de lasagne", "sauce bolognaise", "béchamel", "fromage râpé"],
    "etapes" => ["Monter les couches", "Mettre au four", "Gratiner"]
  ],
  5 => [
    "titre" => "Burger",
    "image" => "assets/Burger.png",
    "description" => "Sandwich américain revisité.",
    "ingredients" => ["2 pains burger", "2 steaks", "fromage", "salade", "sauce"],
    "etapes" => ["Cuire les steaks", "Monter les burgers", "Servir chaud"]
  ],
  6 => [
    "titre" => "Sushi",
    "image" => "assets/Sushi.png",
    "description" => "Spécialité japonaise au poisson cru.",
    "ingredients" => ["Riz à sushi", "poisson cru", "nori", "vinaigre de riz"],
    "etapes" => ["Cuire le riz", "Couper le poisson", "Assembler les sushis"]
  ],
  7 => [
    "titre" => "Mezzé",
    "image" => "assets/muzze.png",
    "description" => "Assortiment de mets froids du Moyen-Orient.",
    "ingredients" => ["Houmous", "taboulé", "falafels", "pain pita"],
    "etapes" => ["Préparer chaque élément", "Servir dans de petits bols"]
  ],
  8 => [
    "titre" => "Paella",
    "image" => "assets/Paella.png",
    "description" => "Riz espagnol aux fruits de mer.",
    "ingredients" => ["Riz", "crevettes", "moules", "poivrons", "safran"],
    "etapes" => ["Faire revenir les fruits de mer", "Ajouter les légumes", "Cuire le riz avec le bouillon"]
  ],
  9 => [
    "titre" => "Canard laqué",
    "image" => "assets/canards-du-lac-brome-recette-canard-laque-orange-R-1024x732.jpg",
    "description" => "Spécialité chinoise croustillante au canard.",
    "ingredients" => ["1 canard", "sauce soja", "miel", "gingembre", "vinaigre"],
    "etapes" => ["Préparer la marinade", "Badigeonner le canard", "Rôtir au four", "Servir avec crêpes"]
  ]
];

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if (!isset($recettes[$id])) {
  die("Recette introuvable !");
}

$recette = $recettes[$id];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($recette['titre']) ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="recette-page" style="max-width: 800px; margin: auto; padding: 2rem;">
    <h1><?= htmlspecialchars($recette['titre']) ?></h1>
    <img src="<?= htmlspecialchars($recette['image']) ?>" alt="<?= htmlspecialchars($recette['titre']) ?>" style="width:100%;max-height:400px;object-fit:cover;border-radius:8px;margin-bottom:1rem;">
    <p><strong>Description :</strong> <?= htmlspecialchars($recette['description']) ?></p>

    <h2>Ingrédients</h2>
    <ul>
      <?php foreach ($recette['ingredients'] as $ingredient): ?>
        <li><?= htmlspecialchars($ingredient) ?></li>
      <?php endforeach; ?>
    </ul>

    <h2>Étapes</h2>
    <ol>
      <?php foreach ($recette['etapes'] as $etape): ?>
        <li><?= htmlspecialchars($etape) ?></li>
      <?php endforeach; ?>
    </ol>
  </main>
</body>
</html>
