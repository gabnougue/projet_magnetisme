document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".slider");
    const slidesContainer = document.querySelector(".avis-container");
    const slides = Array.from(document.querySelectorAll(".avis"));
    const nbSlide = document.querySelector('.cercle-plein');
    const slide1 = document.querySelector('.cercle-vide1');
    const slide2 = document.querySelector('.cercle-vide2');
    const slide3 = document.querySelector('.cercle-vide3');
    const prevArrow = document.querySelector(".fleche:first-child");
    const nextArrow = document.querySelector(".fleche:last-child");
    let currentIndex = 0;
    let startX, currentX;

    function goToSlide(index) {
        slidesContainer.style.transform = `translateX(-${index * 120}%)`;
        nbSlide.style.transform = `translateX(${index * 24}px)`;
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

    // Gestion des événements tactiles
    slider.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });

    slider.addEventListener('touchmove', (e) => {
        if (!startX) return;
        currentX = e.touches[0].clientX;
        const diffX = startX - currentX;
        // Ajustez la valeur 20 selon vos besoins pour contrôler la sensibilité du glissement
        if (Math.abs(diffX) > 20) {
            if (diffX > 0) {
                // Glissement vers la gauche, afficher la diapositive suivante
                goToNextSlide();
            } else {
                // Glissement vers la droite, afficher la diapositive précédente
                goToPrevSlide();
            }
            startX = currentX = null;
        }
    });

    slider.addEventListener('touchend', () => {
        startX = currentX = null;
    });

    slide1.addEventListener("click", function() {
        goToSlide(0);
    });

    slide2.addEventListener("click", function() {
        goToSlide(1);
    });

    slide3.addEventListener("click", function() {
        goToSlide(2);
    });

    updateVariables();

    window.addEventListener('resize', () => {
        updateVariables();
    });

    function getAvisHeight() {
        return document.querySelector('.avis').offsetHeight;
    }

    function updateVariables() {
        document.documentElement.style.setProperty('--avis-height', `${getAvisHeight()}px`);
    }

});