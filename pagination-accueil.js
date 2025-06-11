document.addEventListener("DOMContentLoaded", () => {
  const recettesParPage = 3;
  const toutesLesRecettes = Array.from(document.querySelectorAll(".recettes-grid .recette-card"));
  const container = document.querySelector(".recettes-grid");
  const pagination = document.querySelector(".pagination");

  let pageActuelle = 1;
  const totalPages = Math.ceil(toutesLesRecettes.length / recettesParPage);

  function afficherPage(page) {
    container.innerHTML = "";
    const debut = (page - 1) * recettesParPage;
    const fin = debut + recettesParPage;
    toutesLesRecettes.slice(debut, fin).forEach(card => container.appendChild(card));
  }

  function mettreAJourPagination() {
    pagination.innerHTML = "";

    const prev = document.createElement("a");
    prev.href = "#";
    prev.textContent = "«";
    if (pageActuelle === 1) prev.classList.add("disabled");
    prev.addEventListener("click", (e) => {
      e.preventDefault();
      if (pageActuelle > 1) {
        pageActuelle--;
        afficherPage(pageActuelle);
        mettreAJourPagination();
      }
    });
    pagination.appendChild(prev);

    for (let i = 1; i <= totalPages; i++) {
      const lien = document.createElement("a");
      lien.href = "#";
      lien.textContent = i;
      if (i === pageActuelle) lien.classList.add("active");
      lien.addEventListener("click", (e) => {
        e.preventDefault();
        pageActuelle = i;
        afficherPage(pageActuelle);
        mettreAJourPagination();
      });
      pagination.appendChild(lien);
    }

    const next = document.createElement("a");
    next.href = "#";
    next.textContent = "»";
    if (pageActuelle === totalPages) next.classList.add("disabled");
    next.addEventListener("click", (e) => {
      e.preventDefault();
      if (pageActuelle < totalPages) {
        pageActuelle++;
        afficherPage(pageActuelle);
        mettreAJourPagination();
      }
    });
    pagination.appendChild(next);
  }


  afficherPage(pageActuelle);
  mettreAJourPagination();
});
