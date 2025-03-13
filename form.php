<?php
/*
Template Name: Contact
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Voyages et Découvertes</title>
    <link rel="stylesheet" href="css/destination.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body style="background: url('<?php echo get_template_directory_uri(); ?>/img/fond_form.jpg') no-repeat center/cover;">
<?php require'header-white.php';?>
<div class="form-container">
    <form action="/ma-page-de-traitement" method="post">
        <fieldset>
            <legend><i class="fas fa-plane"></i> Planifiez votre voyage</legend>

            <!-- Nom -->
            <label for="name"><i class="fas fa-user"></i> Nom :</label>
            <input type="text" id="name" name="user_name" placeholder="Votre nom" required>

            <!-- Email -->
            <label for="mail"><i class="fas fa-envelope"></i> E-mail :</label>
            <input type="email" id="mail" name="user_mail" placeholder="Votre e-mail" required>

            <!-- Sélection de la destination -->
            <label for="destination"><i class="fas fa-map-marker-alt"></i> Destination :</label>
            <select id="destination" name="destination" required>
                <option value="">Sélectionnez une destination</option>
                <option value="paris">Paris, France</option>
                <option value="new_york">New York, USA</option>
                <option value="tokyo">Tokyo, Japon</option>
                <option value="marrakech">Marrakech, Maroc</option>
                <option value="rome">Rome, Italie</option>
            </select>

            <!-- Date de départ -->
            <label for="departure"><i class="fas fa-calendar-alt"></i> Date de départ :</label>
            <input type="date" id="departure" name="departure_date" required>

            <!-- Date de retour -->
            <label for="return"><i class="fas fa-calendar-alt"></i> Date de retour :</label>
            <input type="date" id="return" name="return_date" required>

            <!-- Nombre de voyageurs -->
            <label for="travelers"><i class="fas fa-users"></i> Nombre de voyageurs :</label>
            <input type="number" id="travelers" name="num_travelers" min="1" max="10" value="1" required>

            <!-- Message -->
            <label for="msg"><i class="fas fa-comment"></i> Message :</label>
            <textarea id="msg" name="user_message" placeholder="Détails supplémentaires (préférences, besoins spécifiques, etc.)"></textarea>

            <!-- Checkbox newsletter -->
            <label class="checkbox-container">
                <input type="checkbox" id="newsletter" name="newsletter">
                <span class="checkmark"></span> Je souhaite recevoir les offres et promotions par e-mail.
            </label>

            <!-- Bouton d'envoi -->
            <button type="submit"><i class="fas fa-paper-plane"></i> Envoyer</button>
        </fieldset>
    </form>
</div>
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
