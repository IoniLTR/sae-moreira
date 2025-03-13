<?php
/*
Template Name: Voyages
 */
?>
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
        <img src="<?php echo get_template_directory_uri(); ?>/img/paris.jpg" alt="Paris">
        <h2>Paris, France</h2>
        <p>Découvrez la ville lumière et ses monuments emblématiques.</p>
        <a href="/wordpress%20sae303/index.php/destination.php?name=paris" class="btn">Voir plus</a>
    </div>

    <div class="destination-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/new_york.jpg" alt="New York">
        <h2>New York, USA</h2>
        <p>Explorez la ville qui ne dort jamais, entre gratte-ciels et Broadway.</p>
        <a href="/wordpress%20sae303/index.php/destination.php?name=new_york" class="btn">Voir plus</a>
    </div>

    <div class="destination-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/tokyo.webp" alt="Tokyo">
        <h2>Tokyo, Japon</h2>
        <p>Plongez dans la culture japonaise entre tradition et modernité.</p>
        <a href="/wordpress%20sae303/index.php/destination.php?name=tokyo" class="btn">Voir plus</a>
    </div>

    <div class="destination-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/marrakech.jpg" alt="Marrakech">
        <h2>Marrakech, Maroc</h2>
        <p>Visitez la perle du Sud et ses souks colorés.</p>
        <a href="/wordpress%20sae303/index.php/destination.php?name=marrakech" class="btn">Voir plus</a>
    </div>

    <div class="destination-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/rome.jpg" alt="Rome">
        <h2>Rome, Italie</h2>
        <p>Découvrez la ville éternelle et son incroyable histoire.</p>
        <a href="/wordpress%20sae303/index.php/destination.php?name=rome" class="btn">Voir plus</a>
    </div>
</main>
<?php require'footer.php';?>
<style>
    /* STYLE DU FORMULAIRE */
.form-container {
    max-width: 600px;
    background: rgba(255, 255, 255, 0.9); /* Fond semi-transparent pour la lisibilité */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin: 50px auto;
    text-align: center;
    position: relative;
}

/* Ajout d'un fond image */
body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: stretch;
}
.form-container fieldset {
    border: none;
}

.form-container legend {
    font-size: 1.8rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 20px;
}

/* Champs input et textarea */
.form-container input,
.form-container select,
.form-container textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.8); /* Fond légèrement transparent */
}

/* Effet focus */
.form-container input:focus,
.form-container select:focus,
.form-container textarea:focus {
    border-color: #000091;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
}

/* Bouton stylisé */
.form-container button {
    background: #000091;
    color: #fff;
    font-size: 1rem;
    font-weight: bold;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
    margin-top: 15px;
    width: 100%;
}

.form-container button:hover {
    background: #0056b3;
}
/* Importation des polices */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* BACKGROUND GÉNÉRAL */
body {
    background: url('images/fond_form.jpg') no-repeat center center/cover;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Titre destination */
.titre-destination {
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    width: 100%;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-size: 1.8rem;
    font-weight: bold;
    color: #333;
}

/* CONTENEUR DES DESTINATIONS */
.destination-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 40px;
    max-width: 1200px;
    text-align: center;
}

/* CARTES DE DESTINATION */
.destination-card {
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.destination-card:hover {
    transform: translateY(-5px);
}

/* IMAGE DANS LES CARTES */
.destination-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 10px;
}

/* TITRE DES DESTINATIONS */
.destination-card h2 {
    font-size: 1.5rem;
    margin: 10px 0;
}

/* PARAGRAPHE DESCRIPTION */
.destination-card p {
    color: #666;
    margin-bottom: 10px;
}

/* BOUTON "VOIR PLUS" */
.btn {
    display: inline-block;
    background: #000091;
    color: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s ease;
}

.btn:hover {
    background: #000091;
}
/* PAGE DESTINATION - STYLE DES DÉTAILS */
.destination-details {
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 800px;
    margin: 50px auto;
}

.destination-details img {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 20px;
}

.destination-details p {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 20px;
}

/* BOUTON RETOUR */
.btn {
    display: inline-block;
    background: #000091;
    color: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s ease;
}

.btn:hover {
    background: #000091;
}

</style>
</body>
</html>
