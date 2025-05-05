document.addEventListener("DOMContentLoaded", () => {
    const recettes = document.querySelectorAll(".recette-card");
    recettes.forEach((r, i) => {
      r.style.opacity = "0";
      r.style.transform = "translateY(20px)";
      setTimeout(() => {
        r.style.transition = "all 0.5s";
        r.style.opacity = "1";
        r.style.transform = "translateY(0)";
      }, i * 100);
    });
  });