document.addEventListener("DOMContentLoaded", () => {
    let currentIndex = 0;
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");
    const carouselContainer = document.querySelector(".carousel-container");

    function updateCarousel() {
        carouselContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
        dots.forEach((dot, index) => {
            dot.classList.toggle("active", index === currentIndex);
        });
    }

    function moveSlide(direction) {
        currentIndex += direction;
        if (currentIndex < 0) currentIndex = slides.length - 1;
        if (currentIndex >= slides.length) currentIndex = 0;
        updateCarousel();
    }

    function setSlide(index) {
        currentIndex = index;
        updateCarousel();
    }

    // Défilement automatique
    let autoScroll = setInterval(() => {
        moveSlide(1);
    }, 5000);

    // Stop le défilement au survol
    document.querySelector(".carousel").addEventListener("mouseenter", () => {
        clearInterval(autoScroll);
    });

    document.querySelector(".carousel").addEventListener("mouseleave", () => {
        autoScroll = setInterval(() => {
            moveSlide(1);
        }, 5000);
    });

    // Ajout des événements pour les boutons et les points
    document.querySelector(".prev").addEventListener("click", () => moveSlide(-1));
    document.querySelector(".next").addEventListener("click", () => moveSlide(1));
    dots.forEach((dot, index) => dot.addEventListener("click", () => setSlide(index)));

    // Initialisation
    updateCarousel();
});
