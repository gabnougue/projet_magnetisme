if (document.querySelector("#contact-container")) {
    document.addEventListener("DOMContentLoaded", function () {
        const mainView = document.querySelector(".photo-container img");
        const slidesContainer = document.querySelector(".photo-previews-slider");
        const slides = Array.from(document.querySelectorAll(".photo-previews-slider img"));
        const prevArrow = document.querySelector(".fleche:has(.fleche-gauche)");
        const nextArrow = document.querySelector(".fleche:has(.fleche-droite)");
        let currentIndex = 0;

        // On ajoute un écouteur de clic sur chaque image
        slides.forEach((slide, index) => {
            slide.addEventListener("click", () => {
                if (mainView.src === slide.src) return;
                // Ajoutez la classe fade-out pour commencer la transition
                mainView.classList.add("fade-out");

                // Attendez la fin de la transition avant de changer le src
                mainView.addEventListener("transitionend", function onTransitionEnd() {
                    mainView.removeEventListener("transitionend", onTransitionEnd);

                    // Changez le src de l'image principale
                    mainView.src = slide.src;

                    // Attendez que la nouvelle image soit chargée
                    mainView.addEventListener("load", function onLoad() {
                        mainView.removeEventListener("load", onLoad);

                        // Retirez la classe fade-out pour montrer la nouvelle image
                        mainView.classList.remove("fade-out");
                    });
                }, {once: true});
            });
        });

        function goToSlide(index) {
            if (index >= slides.length - 2) index = 0;
            slidesContainer.style.transform = `translateX(-${index * 34}%)`;
            currentIndex = index;
        }

        function goToPrevSlide() {
            const newIndex = (currentIndex - 1 + slides.length) % slides.length;
            goToSlide(newIndex);
        }

        function goToNextSlide() {
            const newIndex = (currentIndex + 1) % slides.length;
            goToSlide(newIndex);
        }

        prevArrow.addEventListener("click", goToPrevSlide);
        nextArrow.addEventListener("click", goToNextSlide);
    });
}
