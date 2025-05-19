<?php
//on se connecte à la base de donnée
require_once('connect.php');
$sql = 'SELECT * FROM`articles` ORDER BY `created_at`DESC;';

// On prépare la requête 
$query = $db-> prepare($sql);

//On exécute la requête
$query->execute();

//On récupère les valeurs dans un tableau associatif
$articles = $query->fectchAll(PDO::FETCH_ASSOC);

require_once('close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forum de Recettes</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <a href="https://tonlien.com">
          <img src="assets/logo.jpg" alt="Logo du site">
        </a>        
      </div>
      <ul class="menu">
        <li><a href="#">Accueil</a></li>
        <li><a href="Recettes.html">Recettes</a></li>
        <li><a href="articles.html">Articles</a></li>
      </ul>
      <a href="connexion.html" class="btn-login">Connexion / Inscription</a>
    </nav>
  </header>

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
        <iframe src="slide.html"></iframe>
        <h2>Nouveauté</h2>
        <div class="recettes-grid">
          <div class="recette-card">
            <img src="assets/couscous-marocain.jpeg" alt="Recette 1">
            <a href="recette.html">Courscous</a>
          </div>
          <div class="recette-card">
            <img src="assets/Poulet Moambe.png" alt="Recette 2">
            <a href="recette.html">Poulet Moambe</a>
          </div>
          <div class="recette-card">
            <img src="assets/Bœuf Bourguignon.png" alt="Recette 3">
            <a href="recette.html">Bœuf Bourguignon</a>
          </div>
          <div class="recette-card">
            <img src="assets/Lasagne.png" alt="Recette 4">
            <a href="recette.html">Lasagne</a>
          </div>
          <div class="recette-card">
            <img src="assets/Burger.png" alt="Recette 5">
            <a href="recette.html">Burger</a>
          </div>
          <div class="recette-card">
            <img src="assets/Sushi.png" alt="Recette 6">
            <a href="recette.html">Sushi</a>
          </div>
          <div class="recette-card">
            <img src="assets/muzze.png" alt="Recette 7">
            <a href="recette.html">Mezzé</a>
          </div>
          <div class="recette-card">
            <img src="assets/Paella.png" alt="Recette 8">
            <a href="recette.html">Paella</a>
          </div>
          <div class="recette-card">
            <img src="assets/canard.png" alt="Recette 9">
            <a href="recette.html">Canard laqué</a>
          </div>
        </div>
        <div class="pagination">
          <a href="#">«</a>
          <a href="#">1</a>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">»</a>
        </div>
      </section>

      <section class="articles">
        <h2>Articles & Conseils</h2>
        <div class="articles-grid">
          <article>
            <img src="assets/Cuisson.jpg" alt="Cuisson parfaite">
            <h3>Cuisson parfaite</h3>
            <p>Conseils pour une cuisson optimale.</p>
          </article>
          <article>
            <img src="assets/Nettoyage.jpg" alt="Nettoyer les aliments">
            <h3>Nettoyer les aliments</h3>
            <p>Bien préparer ses ingrédients.</p>
          </article>
          <article>
            <img src="assets/fastfood.jpg" alt="Aliments à éviter">
            <h3>Aliments à éviter</h3>
            <p>Les pièges à éviter dans votre alimentation.</p>
          </article>
          <h4><a href="articles.html">voir plus</a></h4>
        </div>
      </section>
    </main>
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
