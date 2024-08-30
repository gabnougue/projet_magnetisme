if (document.querySelector("#contact-container")) {
    document.addEventListener("DOMContentLoaded", function () {
        const textarea = document.getElementById("message");

        // Fonction pour ajuster la hauteur du textarea
        function adjustTextareaHeight(el) {
            el.style.height = "auto"; // Réinitialise la hauteur
            el.style.height = (el.scrollHeight) + "px"; // Définit la hauteur à celle du contenu
        }

        // Ajuste la hauteur du textarea lors de la saisie
        textarea.addEventListener("input", function () {
            adjustTextareaHeight(this);
        });

        // Facultatif: Ajuste la hauteur lors du chargement initial si le textarea contient du texte
        adjustTextareaHeight(textarea);
    });
}
