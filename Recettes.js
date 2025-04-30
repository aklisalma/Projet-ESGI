// Exemple de données statiques (à remplacer plus tard par une base réelle)
const recettes = [
    { titre: "Tajine Marocain", lien: "recette.html" },
    { titre: "Spaghetti Carbonara", lien: "recette.html" },
    { titre: "Paëlla Espagnole", lien: "recette.html" },
    { titre: "Curry Indien", lien: "recette.html" },
    { titre: "Poulet Basquaise", lien: "recette.html" },
    { titre: "Sushi", lien: "recette.html" },
    { titre: "Salade César", lien: "recette.html" },
    { titre: "Soupe Miso", lien: "recette.html" },
    { titre: "Crêpes", lien: "recette.html" },
    { titre: "Ratatouille", lien: "recette.html" },
    { titre: "Lasagnes", lien: "recette.html" },
    { titre: "Couscous", lien: "recette.html" },
    { titre: "Tiramisu", lien: "recette.html" },
    { titre: "Bœuf Bourguignon", lien: "recette.html" }
  ];
  
  const recettesParPage = 9;
  let pageActuelle = 1;
  
  function afficherRecettes(page) {
    const start = (page - 1) * recettesParPage;
    const end = start + recettesParPage;
    const conteneur = document.querySelector(".recettes-grid");
    conteneur.innerHTML = "";
  
    recettes.slice(start, end).forEach(recette => {
      const div = document.createElement("div");
      div.classList.add("recette-card");
      div.innerHTML = `<a href="${recette.lien}">${recette.titre}</a>`;
      conteneur.appendChild(div);
    });
  
    afficherPagination();
  }
  
  function afficherPagination() {
    const nbPages = Math.ceil(recettes.length / recettesParPage);
    const pagination = document.querySelector(".pagination");
    pagination.innerHTML = "";
  
    if (pageActuelle > 1) {
      const prev = document.createElement("a");
      prev.href = "#";
      prev.textContent = "«";
      prev.addEventListener("click", e => {
        e.preventDefault();
        pageActuelle--;
        afficherRecettes(pageActuelle);
      });
      pagination.appendChild(prev);
    }
  
    for (let i = 1; i <= nbPages; i++) {
      const pageLink = document.createElement("a");
      pageLink.href = "#";
      pageLink.textContent = i;
      if (i === pageActuelle) pageLink.style.fontWeight = "bold";
      pageLink.addEventListener("click", e => {
        e.preventDefault();
        pageActuelle = i;
        afficherRecettes(pageActuelle);
      });
      pagination.appendChild(pageLink);
    }
  
    if (pageActuelle < nbPages) {
      const next = document.createElement("a");
      next.href = "#";
      next.textContent = "»";
      next.addEventListener("click", e => {
        e.preventDefault();
        pageActuelle++;
        afficherRecettes(pageActuelle);
      });
      pagination.appendChild(next);
    }
  }
  
  document.addEventListener("DOMContentLoaded", () => {
    afficherRecettes(pageActuelle);
  });
  