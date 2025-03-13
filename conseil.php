

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
                <img src="img/airplane-2588202_1280.jpg" alt="Voyage 1">
                <div class="overlay">
                    <h2>Comment trouver les meilleurs billets d’avion sur Air-France ?</h2>
                    <button>En savoir plus</button>
                </div>
            </div>
            <div class="slide">
                <img src="img/airport-2373727_1280.jpg" alt="Voyage 2">
                <div class="overlay">
                    <h2>Où  partir en décembre au soleil : guide des meilleures destination</h2>
                    <button>En savoir plus</button>
                </div>
            </div>
            <div class="slide">
                <img src="img/merry-christmas-5219496_1280.jpg" alt="Voyage 3">
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
                <img src="img/plane-513641_1280.jpg" alt="Plage et mer">
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
                <img src="img/map-2530069_1280.jpg" alt="Avion en vol">
            </div>
        </section>
    
        <section class="section">
            <h2>Hôtels + hébergements</h2>
            <p>Découvrez les meilleures options d’hébergement.</p>
            <div class="content">
                <img src="img/scooter-2792992_1280.jpg" alt="Hôtel avec piscine">
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
                <img src="img/scooter-2792992_1280.jpg" alt="Hôtel avec piscine">
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
                <img src="img/scooter-2792992_1280.jpg" alt="Hôtel avec piscine">
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
                <img src="img/scooter-2792992_1280.jpg" alt="Hôtel avec piscine">
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
</body>
</html>