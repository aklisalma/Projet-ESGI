<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
      <h2>Nos délicieuses recettes</h2>
      <div class="recettes-grid" id="recettesContainer"></div>
      <div class="pagination" id="paginationContainer"></div>
    </section>
  </main>

  <script>
    const recettes = [
      { img: 'assets/couscous-marocain.jpeg', nom: 'Couscous', alt: 'Couscous marocain' },
      { img: 'assets/Poulet Moambe.png', nom: 'Poulet Moambe', alt: 'Poulet Moambe' },
      { img: 'assets/Bœuf Bourguignon.png', nom: 'Bœuf Bourguignon', alt: 'Bœuf Bourguignon' },
      { img: 'assets/Lasagne.png', nom: 'Lasagne', alt: 'Lasagnes' },
      { img: 'assets/Burger.png', nom: 'Burger', alt: 'Burger' },
      { img: 'assets/Sushi.png', nom: 'Sushi', alt: 'Sushi' },
      { img: 'assets/muzze.png', nom: 'Mezzé', alt: 'Mezzé' },
      { img: 'assets/Paella.png', nom: 'Paella', alt: 'Paella' },
      { img: 'assets/canard.png', nom: 'Canard laqué', alt: 'Canard laqué' }
    ];

    const recettesParPage = 5;
    let page = 1;

    function afficherRecettes() {
      const debut = (page - 1) * recettesParPage;
      const fin = debut + recettesParPage;
      const recettesAffichees = recettes.slice(debut, fin);
      const container = document.getElementById("recettesContainer");
      container.innerHTML = "";

      recettesAffichees.forEach(recette => {
        const card = document.createElement("div");
        card.className = "recette-card";
        card.innerHTML = `
          <img src="${recette.img}" alt="${recette.alt}" />
          <a href="recette.php?nom=${encodeURIComponent(recette.nom)}">${recette.nom}</a>
        `;
        container.appendChild(card);
      });
    }

    function afficherPagination() {
      const totalPages = Math.ceil(recettes.length / recettesParPage);
      const pagination = document.getElementById("paginationContainer");
      pagination.innerHTML = "";

      if (page > 1) {
        const prev = document.createElement("a");
        prev.href = "#";
        prev.textContent = "« Précédent";
        prev.onclick = () => { page--; majAffichage(); return false; };
        pagination.appendChild(prev);
      }

      for (let i = 1; i <= totalPages; i++) {
        if (i === page) {
          const current = document.createElement("span");
          current.className = "current";
          current.textContent = i;
          pagination.appendChild(current);
        } else {
          const link = document.createElement("a");
          link.href = "#";
          link.textContent = i;
          link.onclick = () => { page = i; majAffichage(); return false; };
          pagination.appendChild(link);
        }
      }

      if (page < totalPages) {
        const next = document.createElement("a");
        next.href = "#";
        next.textContent = "Suivant »";
        next.onclick = () => { page++; majAffichage(); return false; };
        pagination.appendChild(next);
      }
    }

    function majAffichage() {
      afficherRecettes();
      afficherPagination();
    }

    // Initialisation
    majAffichage();
  </script>
</body>
</html>
