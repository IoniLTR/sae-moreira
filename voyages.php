<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations de voyage</title>
    <link rel="stylesheet" href="css/destination.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<?php require'header-black.php';?>
<section class="Titre-destination">
    <h1>Nos Destinations</h1>
</section>

<main class="destination-container">
    <div class="destination-card">
        <img src="img/paris.jpg" alt="Paris">
        <h2>Paris, France</h2>
        <p>Découvrez la ville lumière et ses monuments emblématiques.</p>
        <a href="destination.php?name=paris" class="btn">Voir plus</a>
    </div>

    <div class="destination-card">
        <img src="img/new_york.jpg" alt="New York">
        <h2>New York, USA</h2>
        <p>Explorez la ville qui ne dort jamais, entre gratte-ciels et Broadway.</p>
        <a href="destination.php?name=new_york" class="btn">Voir plus</a>
    </div>

    <div class="destination-card">
        <img src="img/tokyo.webp" alt="Tokyo">
        <h2>Tokyo, Japon</h2>
        <p>Plongez dans la culture japonaise entre tradition et modernité.</p>
        <a href="destination.php?name=tokyo" class="btn">Voir plus</a>
    </div>

    <div class="destination-card">
        <img src="img/marrakech.jpg" alt="Marrakech">
        <h2>Marrakech, Maroc</h2>
        <p>Visitez la perle du Sud et ses souks colorés.</p>
        <a href="destination.php?name=marrakech" class="btn">Voir plus</a>
    </div>

    <div class="destination-card">
        <img src="img/rome.jpg" alt="Rome">
        <h2>Rome, Italie</h2>
        <p>Découvrez la ville éternelle et son incroyable histoire.</p>
        <a href="destination.php?name=rome" class="btn">Voir plus</a>
    </div>
</main>
<?php require'footer.php';?>
</body>
</html>
