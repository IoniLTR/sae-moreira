<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Voyages et Découvertes</title>
    <link rel="stylesheet" href="css/destination.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body style="background: url('img/fond_form.jpg') no-repeat center/cover;">
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
</body>
</html>
