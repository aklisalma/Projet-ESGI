// 1. Ajouter un effet au survol des recettes
document.querySelectorAll('.recette-card').forEach(card => {
  card.addEventListener('mouseover', () => {
    card.style.transform = 'scale(1.05)';
    card.style.transition = 'transform 0.3s ease';
  });
  card.addEventListener('mouseout', () => {
    card.style.transform = 'scale(1)';
  });
});

// 2. Message lors de l'inscription à la newsletter
const newsletterForm = document.querySelector('.newsletter-footer form');
if (newsletterForm) {
  newsletterForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.email.value.trim();
    if (email) {
      alert("Merci pour votre inscription !");
      this.reset(); // Réinitialise le champ
    } else {
      alert("Veuillez entrer une adresse e-mail valide.");
    }
  });
}

// 3. Filtrage visuel des recettes (option de base pour t’aider à développer)
const checkboxes = document.querySelectorAll('.sidebar input[type="checkbox"]');
checkboxes.forEach(checkbox => {
  checkbox.addEventListener('change', () => {
    alert("Le filtrage sera bientôt disponible !");
    // Ici, tu pourrais filtrer les .recette-card selon les catégories
  });
});