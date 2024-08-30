if (document.querySelector("#contact-container")) {
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('contact-form').addEventListener('submit', function (event) {
            event.preventDefault(); // Empêcher le rechargement de la page

            var formData = new FormData(this);

            fetch('php/mail.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    var formContainer = document.querySelector('.form-container')
                    if (data.trim() === 'success') {
                        formContainer.innerHTML = '<div style="color: green;">Message envoyé avec succès</div>';
                    } else {
                        formContainer.innerHTML = '<div style="color: red;">Erreur lors de l\'envoi du message</div>';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
}