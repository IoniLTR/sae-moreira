<?php
/*
Template Name: Destination
 */
?>
<?php
// Tableau des destinations avec leurs informations
$destinations = [
    "paris" => [
        "nom" => "Paris, France",
        "image" => "<?php echo get_template_directory_uri(); ?>/img/paris.jpg",
        "description" => "Découvrez la ville lumière, avec ses monuments emblématiques comme la Tour Eiffel, le Louvre et les Champs-Élysées.",
    ],
    "new_york" => [
        "nom" => "New York, USA",
        "image" => "<?php echo get_template_directory_uri(); ?>/img/new_york.jpg",
        "description" => "Explorez la ville qui ne dort jamais, avec Times Square, Central Park et la Statue de la Liberté.",
    ],
    "tokyo" => [
        "nom" => "Tokyo, Japon",
        "image" => "<?php echo get_template_directory_uri(); ?>/img/tokyo.webp",
        "description" => "Plongez dans l’univers unique de Tokyo entre traditions ancestrales et technologies futuristes.",
    ],
    "marrakech" => [
        "nom" => "Marrakech, Maroc",
        "image" => "<?php echo get_template_directory_uri(); ?>/img/marrakech.jpg",
        "description" => "Visitez la perle du Sud et découvrez ses souks, palais et jardins exotiques.",
    ],
    "rome" => [
        "nom" => "Rome, Italie",
        "image" => "<?php echo get_template_directory_uri(); ?>/img/rome.jpg",
        "description" => "Découvrez la ville éternelle et son histoire fascinante avec le Colisée, le Vatican et la fontaine de Trevi.",
    ]
];

// Récupérer la destination sélectionnée depuis l'URL
$destination_key = isset($_GET['name']) ? $_GET['name'] : null;

// Vérifier si la destination existe
if ($destination_key && array_key_exists($destination_key, $destinations)) {
    $destination = $destinations[$destination_key];
} else {
    // Redirection vers la page des voyages si la destination n'existe pas
    header("Location: /wordpress%20sae303/index.php/voyages");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $destination['nom']; ?></title>
    <link rel="stylesheet" href="css/destination.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>    
    <?php require'header-black.php';?>
<section class="titre_destination">
    <h1><?php echo $destination['nom']; ?></h1>
</section>

<main class="destination-details">
    <img src="<?php echo get_template_directory_uri(); ?>/<?php echo $destination['image']; ?>" alt="<?php echo $destination['nom']; ?>">
    <p><?php echo $destination['description']; ?></p>
    <a href="/wordpress%20sae303/index.php/voyages" class="btn"><i class="fas fa-arrow-left"></i> Retour aux destinations</a>
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
