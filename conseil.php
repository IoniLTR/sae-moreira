
<?php
/*
Template Name: Conseil
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/conseil.css">
    <script src="js/conseil.js"></script>
    <title>Document</title>
</head>
<body class="conseil-page">
    <?php require 'header-white.php'; ?>

    <div class="carousel">
        <div class="carousel-container">
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/airplane-2588202_1280.jpg" alt="Voyage 1">
                <div class="overlay">
                    <h2>Comment trouver les meilleurs billets d’avion sur Air-France ?</h2>
                    <button>En savoir plus</button>
                </div>
            </div>
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/airport-2373727_1280.jpg" alt="Voyage 2">
                <div class="overlay">
                    <h2>Où  partir en décembre au soleil : guide des meilleures destination</h2>
                    <button>En savoir plus</button>
                </div>
            </div>
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/merry-christmas-5219496_1280.jpg" alt="Voyage 3">
                <div class="overlay">
                    <h2>Comment trouver les meilleurs billets d’avion sur Ryan-Air?</h2>
                    <button>En savoir plus</button>
                </div>
            </div>
        </div>
        
        <!-- Boutons de navigation -->
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>

        <!-- Indicateurs -->
        <div class="dots">
            <span class="dot" onclick="setSlide(0)"></span>
            <span class="dot" onclick="setSlide(1)"></span>
            <span class="dot" onclick="setSlide(2)"></span>
        </div>
    </div>
 <!---main-->
    <main>

        <section class="section">
            <h2>Idées de voyage</h2>
            <p>Vous cherchez l’inspiration pour votre prochain voyage ? Voici des articles pour vous aider.</p>
            <div class="content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/plane-513641_1280.jpg" alt="Plage et mer">
                <ul>
                    <li>
                        <h3>Prendre l’avion avec un bébé : le guide</h3>
                        <p>Tout ce que vous devez savoir avant de voyager avec un enfant.</p>
                    </li>
                    <li>
                        <h3>Les destinations de plage accessibles en famille</h3>
                        <p>Les meilleures plages pour des vacances sans stress.</p>
                    </li>
                    <li>
                        <h3>10 hôtels all-inclusive accessibles aux PMR</h3>
                        <p>Hôtels avec accessibilité garantie pour tous.</p>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn">Voir plus</a>
        </section>
    
        <section class="section dark">
            <div class="content">
                <div class="text">
                    <h2>Prendre l’avion</h2>
                    <p>Préparez votre vol avec des conseils pour rendre votre voyage plus agréable.</p>
                    <a href="#" class="btn">Voir plus</a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/map-2530069_1280.jpg" alt="Avion en vol">
            </div>
        </section>
    
        <section class="section">
            <h2>Hôtels + hébergements</h2>
            <p>Découvrez les meilleures options d’hébergement.</p>
            <div class="content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/scooter-2792992_1280.jpg" alt="Hôtel avec piscine">
                <ul>
                    <li>
                        <h3>Les meilleurs hôtels tout compris</h3>
                        <p>Des séjours où tout est inclus.</p>
                    </li>
                    <li>
                        <h3>Les destinations les plus en vogue</h3>
                        <p>Découvrez les tendances voyage de l’année.</p>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn">Voir plus</a>
        </section>

        <section class="section">
            <h2>Hôtels + hébergements</h2>
            <p>Découvrez les meilleures options d’hébergement.</p>
            <div class="content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/scooter-2792992_1280.jpg" alt="Hôtel avec piscine">
                <ul>
                    <li>
                        <h3>Les meilleurs hôtels tout compris</h3>
                        <p>Des séjours où tout est inclus.</p>
                    </li>
                    <li>
                        <h3>Les destinations les plus en vogue</h3>
                        <p>Découvrez les tendances voyage de l’année.</p>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn">Voir plus</a>
        </section>
        <section class="section">
            <h2>Hôtels + hébergements</h2>
            <p>Découvrez les meilleures options d’hébergement.</p>
            <div class="content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/scooter-2792992_1280.jpg" alt="Hôtel avec piscine">
                <ul>
                    <li>
                        <h3>Les meilleurs hôtels tout compris</h3>
                        <p>Des séjours où tout est inclus.</p>
                    </li>
                    <li>
                        <h3>Les destinations les plus en vogue</h3>
                        <p>Découvrez les tendances voyage de l’année.</p>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn">Voir plus</a>
        </section>

        <section class="section">
            <h2>Hôtels + hébergements</h2>
            <p>Découvrez les meilleures options d’hébergement.</p>
            <div class="content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/scooter-2792992_1280.jpg" alt="Hôtel avec piscine">
                <ul>
                    <li>
                        <h3>Les meilleurs hôtels tout compris</h3>
                        <p>Des séjours où tout est inclus.</p>
                    </li>
                    <li>
                        <h3>Les destinations les plus en vogue</h3>
                        <p>Découvrez les tendances voyage de l’année.</p>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn">Voir plus</a>
        </section>


    </main>
    <?php require'footer.php';?>
    <script>
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

    </script>
    <style>
        /* Style spécifique pour la page conseil.php */
.conseil-page header {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1;
}

.conseil-page header ul{
    width: 70%;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
      }

      
/* carousel */


.carousel {
    position: relative;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
}

.carousel-container {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 300%;
}

.slide {
    min-width: 100%;
    position: relative;
}

.slide img {
    width: 100vw;
    height: 90vh;
    object-fit: cover;
}

.overlay {
    position: absolute;
    bottom: 0;
    background: white;
    color: black;
    width: 15%;
    border-radius: 20px;
    padding: 60px;
    text-align: left;
    margin-bottom: 152px;
    margin-left: 100px;
    font-size: 20px;
}

button {
    background: #000091;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
}

button:hover {
    background: #000091;
}

/* Flèches de navigation */
.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    font-size: 18px;
}

.prev { left: 10px; }
.next { right: 10px; }

.prev:hover, .next:hover {
    background: rgba(0, 0, 0, 0.8);
}

/* Indicateurs */
.dots {
    text-align: center;
    margin-top: 10px;
}

.dot {
    display: inline-block;
    width: 12px;
    height: 12px;
    background: #bbb;
    border-radius: 50%;
    margin: 5px;
    cursor: pointer;
}

.dot.active {
    background: #555;
}

/* Conseil */

.section {
    max-width: 1100px;
    margin: 50px auto;
    padding: 35px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(120, 41, 41, 0.1);
  
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

p {
    margin-bottom: 20px;
}

.content {
    display: flex;
    align-items: center;
    gap: 20px;
}

img {
    width: 40%;
    border-radius: 10px;
}

ul {
    list-style: none;
    width: 60%;
}

li {
    margin-bottom: 15px;
}

h3 {
    font-size: 18px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background: #000091;;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
}

.btn:hover {
    background: #333;
}

/* SECTION FOND SOMBRE */
.dark {
    background: #121212;
    color: white;
}

.dark .btn {
    background: white;
    color:#000091;;
}

.dark img {
    width: 50%;
}
    </style>
</body>
</html>