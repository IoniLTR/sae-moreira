<?php
// Tableau des destinations avec leurs informations
$destinations = [
    "paris" => [
        "nom" => "Paris, France",
        "image" => "img/paris.jpg",
        "description" => "Découvrez la ville lumière, avec ses monuments emblématiques comme la Tour Eiffel, le Louvre et les Champs-Élysées.",
    ],
    "new_york" => [
        "nom" => "New York, USA",
        "image" => "img/new_york.jpg",
        "description" => "Explorez la ville qui ne dort jamais, avec Times Square, Central Park et la Statue de la Liberté.",
    ],
    "tokyo" => [
        "nom" => "Tokyo, Japon",
        "image" => "img/tokyo.webp",
        "description" => "Plongez dans l’univers unique de Tokyo entre traditions ancestrales et technologies futuristes.",
    ],
    "marrakech" => [
        "nom" => "Marrakech, Maroc",
        "image" => "img/marrakech.jpg",
        "description" => "Visitez la perle du Sud et découvrez ses souks, palais et jardins exotiques.",
    ],
    "rome" => [
        "nom" => "Rome, Italie",
        "image" => "img/rome.jpg",
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
    header("Location: voyages.php");
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
    <img src="<?php echo $destination['image']; ?>" alt="<?php echo $destination['nom']; ?>">
    <p><?php echo $destination['description']; ?></p>
    <a href="voyages.php" class="btn"><i class="fas fa-arrow-left"></i> Retour aux destinations</a>
</main>
<?php require'footer.php';?>
</body>
</html>
