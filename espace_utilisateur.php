<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: connexion.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Espace Utilisateur</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <a href="index.php">
          <img src="assets/LOGO.png" alt="Logo du site">
        </a>        
      </div>
      <ul class="menu">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="Recettes.html">Recettes</a></li>
        <li><a href="articles.html">Articles</a></li>
        <li><a href="Accueil.html">Guide Nourriture</a></li>
      </ul>
      <div>
        <a href="#" class="btn-login">Ajouter une recette</a>
        <a href="index.html" class="btn-login" style="background-color:#ccc; margin-left: 10px;">Se déconnecter</a>
      </div>
    </nav>
  </header>

  <div class="main-content">
    <div class="main-content">
      <aside class="sidebar">
        <h3>Spécialité</h3>
        <label><input type="checkbox"> Marocaine</label>
        <label><input type="checkbox"> Italienne</label>
        <label><input type="checkbox"> Congolaise</label>
        <label><input type="checkbox"> Américaine</label>
        <label><input type="checkbox"> Japonaise</label>
        <label><input type="checkbox"> Libanaise</label>
        <label><input type="checkbox"> Espagnole</label>
        <label><input type="checkbox"> Française</label>
        <label><input type="checkbox"> Chinoise</label>
        <label><input type="checkbox"> Indienne </label>
        <label><input type="checkbox"> Turque</label>

        <h3>Spécification</h3>
        <label><input type="checkbox"> Sans gluten</label>
        <label><input type="checkbox"> Bio</label>
        <label><input type="checkbox"> Vegan</label>

        <h3>Thématique</h3>
        <label><input type="checkbox"> Petit Déjeuner</label>
        <label><input type="checkbox"> Déjeuner</label>
        <label><input type="checkbox"> Fêtes</label>
      </aside>
  <main>
    <section class="recettes-aleatoires">
      <h2>Nouveauté</h2>
      <div class="recettes-button">
        <button class= "recettes-but">
          Toutes
        </button>
        <button class="recettes-but">
          Populaires
        </button>
        <button class="recettes-but">
          Récentes
        </button>
      </div>
      <div class="recettes-grid">
        <div class="recette-card">
  <img src="assets/couscous-marocain.jpeg" alt="Recette 1">
  <a href="recette.php?id=1">Couscous Marocain</a>
  <p>Plat traditionnel nord-africain</p>
</div>
<div class="recette-card">
  <img src="assets/Poulet Moambe.png" alt="Recette 2">
  <a href="recette.php?id=2">Poulet Moambe</a>
  <p>Spécialité africaine à la sauce palmiste</p>
</div>
<div class="recette-card">
  <img src="assets/Bœuf Bourguignon.png" alt="Recette 3">
  <a href="recette.php?id=3">Bœuf Bourguignon</a>
  <p>Classique français mijoté au vin rouge</p>
</div>
<div class="recette-card">
  <img src="assets/Lasagne.png" alt="Recette 4">
  <a href="recette.php?id=4">Lasagne</a>
  <p>Pâtes italiennes feuilletées à la bolognaise</p>
</div>
<div class="recette-card">
  <img src="assets/Burger.png" alt="Recette 5">
  <a href="recette.php?id=5">Burger</a>
  <p>Sandwich américain revisité</p>
</div>
<div class="recette-card">
  <img src="assets/Sushi.png" alt="Recette 6">
  <a href="recette.php?id=6">Sushi</a>
  <p>Spécialité japonaise au poisson cru</p>
</div>
<div class="recette-card">
  <img src="assets/muzze.png" alt="Recette 7">
  <a href="recette.php?id=7">Mezzé</a>
  <p>Assortiment de mezze du Moyen-Orient</p>
</div>
<div class="recette-card">
  <img src="assets/Paella.png" alt="Recette 8">
  <a href="recette.php?id=8">Paella</a>
  <p>Riz espagnol aux fruits de mer</p>
</div>
<div class="recette-card">
  <img src="assets/canards-du-lac-brome-recette-canard-laque-orange-R-1024x732.jpg" alt="Recette 9">
  <a href="recette.php?id=9">Canard laqué</a>
  <p>Spécialité chinoise croustillante</p>
</div>

      </div>
      <div class="pagination">
        <a href="#">«</a>
        <a href="index.php">1</a>
        <a href="index.php">2</a>
        <a href="#">»</a>
      </div>
    </section>

    <section class="articles">
      <h2>Nos Articles & Conseils</h2>
    <div class="articles-grid">
      <article>
        <img src="assets/Cuisson.jpg" alt="Cuisson parfaite">
        <h3>Les secrets d'une cuisson parfaite</h3>
        <p>Découvrez nos astuces pour maîtriser les temps de cuisson et obtenir des résultats parfaits à chaque fois.</p>
      </article>
      <article>
        <img src="assets/Nettoyage.jpg" alt="Nettoyer les aliments">
        <h3>Comment bien nettoyer vos aliments</h3>
        <p>Apprenez les bonnes techniques pour nettoyer vos fruits, légumes et viandes avant de les cuisiner.</p>
      </article>
      <article>
        <img src="assets/fastfood.jpg" alt="Aliments à éviter">
        <h3>Les aliments à éviter dans votre alimentation</h3>
        <p>Notre nutritionniste vous révèle les pièges à éviter pour une alimentation saine et équilibrée.</p>
      </article>
    </div>
    <a href="articles.html" class="voir">Voir plus <i class="plus"></i> </a>
    </section>
  </main>
  </div>
</div>
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
