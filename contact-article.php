
<?php
// Initialisation des variables pour éviter les erreurs d'affichage
$prenom = $nom = $societe = $email = $tel = $message = "";
$success_message = $error_message = "";

// Fonction pour nettoyer et sécuriser les entrées
function nettoyer_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et sécurisation des données du formulaire
    $prenom = nettoyer_input($_POST['prenom'] ?? '');
    $nom = nettoyer_input($_POST['nom'] ?? '');
    $societe = nettoyer_input($_POST['societe'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $tel = nettoyer_input($_POST['tel'] ?? '');
    $message = nettoyer_input($_POST['message'] ?? '');

    // Vérification des champs requis
    if (!$prenom || !$nom || !$societe || !$email || !$tel || !$message) {
        $error_message = "Tous les champs sont obligatoires.";
    } elseif (!$email) {
        $error_message = "Adresse e-mail invalide.";
    } else {
        // Formatage du contenu du mail
        $contenu_mail = "Prénom: $prenom\n";
        $contenu_mail .= "Nom: $nom\n";
        $contenu_mail .= "Société: $societe\n";
        $contenu_mail .= "Email: $email\n";
        $contenu_mail .= "Téléphone: $tel\n\n";
        $contenu_mail .= "Message:\n$message";

        // Destinataire et sujet
        $destinataire = "ioni@ze-com.com";
        $sujet = "Message via Formulaire de Contact Article du Blog";

        // En-têtes de l'email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Envoi de l'email et vérification
        if (mail($destinataire, $sujet, $contenu_mail, $headers)) {
            $success_message = "Merci! Votre message a été envoyé avec succès.";
            // Réinitialiser les valeurs après envoi
            $prenom = $nom = $societe = $email = $tel = $message = "";
        } else {
            $error_message = "Erreur lors de l'envoi du message. Veuillez réessayer plus tard.";
        }
    }
}
?>