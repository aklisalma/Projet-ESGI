document.addEventListener("DOMContentLoaded", () => {
  const recettesParPage = 3;
  const recettes = Array.from(document.querySelectorAll(".recette-card"));
  const container = document.querySelector(".recettes-grid");
  const pagination = document.querySelector(".pagination");

  let pageActuelle = 1;
  const totalPages = Math.ceil(recettes.length / recettesParPage);

  function afficherPage(page) {
    container.innerHTML = "";
    const debut = (page - 1) * recettesParPage;
    const fin = debut + recettesParPage;
    recettes.slice(debut, fin).forEach(r => container.appendChild(r));
  }

  function creerPagination() {
    pagination.innerHTML = "";

    const boutonPrec = document.createElement("a");
    boutonPrec.href = "#";
    boutonPrec.textContent = "«";
    boutonPrec.classList.add("prev");
    boutonPrec.addEventListener("click", (e) => {
      e.preventDefault();
      if (pageActuelle > 1) {
        pageActuelle--;
        afficherPage(pageActuelle);
        creerPagination();
      }
    });
    pagination.appendChild(boutonPrec);

    for (let i = 1; i <= totalPages; i++) {
      const bouton = document.createElement("a");
      bouton.href = "#";
      bouton.textContent = i;
      if (i === pageActuelle) bouton.classList.add("active");
      bouton.addEventListener("click", (e) => {
        e.preventDefault();
        pageActuelle = i;
        afficherPage(pageActuelle);
        creerPagination();
      });
      pagination.appendChild(bouton);
    }

    const boutonSuiv = document.createElement("a");
    boutonSuiv.href = "#";
    boutonSuiv.textContent = "»";
    boutonSuiv.classList.add("next");
    boutonSuiv.addEventListener("click", (e) => {
      e.preventDefault();
      if (pageActuelle < totalPages) {
        pageActuelle++;
        afficherPage(pageActuelle);
        creerPagination();
      }
    });
    pagination.appendChild(boutonSuiv);
  }

  afficherPage(pageActuelle);
  creerPagination();
});
