document.addEventListener('DOMContentLoaded', function() {
    // Récupère l'URL de la page actuelle
    var currentUrl = window.location.href;

    // Sélectionne tous les liens de navigation
    var navLinks = document.querySelectorAll('.nav-links a');

    // Variable pour vérifier si un lien correspond à l'URL actuelle
    var isMatchFound = false;

    // Boucle à travers chaque lien pour vérifier l'URL
    navLinks.forEach(function(link) {
        // Vérifie si l'URL du lien fait partie de l'URL actuelle
        if (currentUrl.includes(link.getAttribute('id'))) {
            // Ajoute la classe "current" à l'élément parent <li>
            link.classList.add('current');
            isMatchFound = true; // Indique qu'un lien correspond à l'URL actuelle
        }
    });

    // Si aucun lien ne correspond, applique la classe "current" à l'onglet "Accueil"
    if (!isMatchFound) {
        console.log('No match found');
        document.querySelector('#accueil').classList.add('current');
    }
});