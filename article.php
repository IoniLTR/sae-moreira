
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

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Paris</title>
    <link rel="stylesheet" href="css/article.css">
</head>
<body>
    <?php require_once 'header-black.php';?>

<main class="conteneur-principal">
    
<aside class="conteneur-aside-gauche">
        <ul class="text1-aside-gauche">
            <li><a href="blog.php">Blog ></a></li>
            <li id="ville-paris">Paris</li>
            <li id="ville-dubai">Dubai</li>
            <li id="ville-bangkok">Bangkok</li>
            <li id="ville-cancun">Cancun</li>
        </ul>
        <ul class="text2-aside-gauche">
            <li id="categorie-hiver">Hiver</li>
            <li id="categorie-ete">Été</li>
            <li id="categorie-tropical">Tropical</li>
            <li id="categorie-mer">Mer</li>
            <li id="categorie-montagne">Montagne</li>
        </ul>

        <h3>Partagez !</h3>
        
        <article class="reseaux">
            <img src="img/envelope-regular-108.png" alt="reseaux1">
            <img src="img/linkedin-logo-108.png" alt="reseaux2">
            <img src="img/instagram-logo-108.png" alt="reseaux3">
        </article>
<section class="consulte-content-1">
        <h4>Les + Consultés</h4>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Cancun / Mer</span>
            <h4>Découvrez la capitale du monde et sa richesse</h4>
            </article>
            <article class="time-localisation">
                <img src="img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Dubai / Été</span>
            <h4>Découvrez la capitale du monde et sa richesse</h4>
            </article>
            <article class="time-localisation">
                <img src="img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Paris / Hiver</span>
            <h4>Découvrez la capitale du monde et sa richesse</h4>
            </article>
            <article class="time-localisation">
                <img src="img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>
</section>
    </aside>


    <aside class="conteneur-aside-droit">

    <article class="titre-logo">
        <img src="img/Capture-decran-2025-02-19-a-09.16.14.png" alt="Logo Blog">
        <h2>Parce que vous êtes à part, Blog à part <br>a été imaginé rien que pour vous !</h2>
    </article>
    <section class="section-time-localisation">
        <article class="blog-localisation-time">
    <article class="blog-localisation">
                        <span id="localisation-paris" style="font-weight:bold;">Paris </span>
                        <span style="padding-left:5px; padding-right:5px;"> / </span>
                        <span id="article-hiver">Hiver</span>
    </article>
        <article class="blog-time">
                <img src="img/horloge.png" alt="time">
                <span style="padding-right:25px">1mn</span>
                <img src="img/calendar.png" alt="date">
                <span>22/01/2025</span>
        </article>
    </article>
    </section>
    <section class="article-page-content-1">
        <h1 class="titre-post">Découvrez la capitale du monde et sa richesse</h1>

    <article class="image-post">
            <img src="img/Capture-decran-2025-02-26-a-09.33.40.png" alt="Image article">
        <p class="credit-photo">Crédit Photo DTP</p>
    </article>

    <article class="text2-aside-droit">
        <p class="post-paragraphe">Paris, ville emblématique de la France, captivante par son mélange unique d'histoire, de culture et d'élégance, attire les visiteurs du monde entier. Nichée sur les rives de la Seine, Paris séduit par ses célèbres monuments qui racontent son passé glorieux. La majestueuse tour Eiffel, symbole universel de la ville, offre une vue panoramique incomparable sur ses avenues arborées et ses toits en zinc. Les Champs-Élysées, célèbre avenue bordée de boutiques de luxe et de cafés élégants, mène majestueusement à l'Arc de Triomphe, érigé pour honorer les victoires militaires de la France.</p>
        <p class="post-paragraphe-titre1">Ville Emblématique</p>
        <p class="post-paragraphe">Paris est aussi un creuset culturel où l'art et la littérature prospèrent depuis des siècles. Les musées renommés comme le Louvre, abritant la Joconde et des milliers d'autres trésors artistiques, attirent les passionnés d'art du monde entier. Montmartre, quartier bohème cher aux artistes comme Picasso et Modigliani, continue d'inspirer avec ses ruelles pittoresques et sa vue imprenable sur la ville. La scène gastronomique parisienne est tout aussi riche et variée, des bistrots traditionnels aux restaurants étoilés, offrant des délices culinaires pour tous les palais</p>
        <p class="post-paragraphe-hashtag">#Voyage #Paris #Capital</p>
    </article>
    </section>
    </aside>
</main>


<section class="article-page-content-2">
        <h1 class="titre-post">Découvrez la capitale du monde et sa richesse</h1>

    <article class="image-post">
            <img src="img/Capture-decran-2025-02-26-a-09.33.40.png" alt="Image article">
        <p class="credit-photo">Crédit Photo DTP</p>
    </article>

    <article class="text2-aside-droit">
        <p class="post-paragraphe">SNCF Voyageurs, filiale créée en 2020, a lancé une campagne visant à se distinguer visuellement de sa maison-mère la SNCF. Malgré des millions de clients quotidiens, la marque manquait de visibilité et de singularité visuelle, ce qui a conduit à une refonte complète. Une étude approfondie des profils démographiques des clients a permis de concevoir une nouvelle identité visuelle grâce à l’utilisation d’une plateforme marketing alimentée par l’IA. Résultat, création de 25 logos personnalisés qui représentent un type de voyageur et leurs centres d’intérêt : les passionnés de sport, les amateurs de musique rock, les rêveurs, les lecteurs…</p>
        <p class="post-paragraphe-titre1">Une collection artistique unique</p>
        <p class="post-paragraphe">Cette collection unique a été conçue par des graphistes, des illustrateurs qui ont mêlé des styles variés, des visuels artistiques et des rendus 3D audacieux. Ces ‘’Big’’ créations reflètent la diversité et les aspirations des clients, tout en renforçant l'identité de SNCF Voyageurs à travers des supports visuels modernes et inspirants.</p>
        <p class="post-paragraphe-hashtag">#logo #sncfvoyageurs #illustration</p>
    </article>
</section>

<section class="form-contact-slogan" style="display:flex;">
    <img src="img/Capture-decran-2025-02-19-a-09.16.14.png" alt="">
    <article class="form-contact">
        <h3>Un projet voyage bonnes raisons de nous contacter !</h3>
        <form action="" method="post">
        <article class="input-form">   
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="" required>
        </article>
        <article class="input-form"> 
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="" required>
         </article>
        <article class="input-form"> 
        <label for="societe">Objet</label>
        <input type="text" id="societe" name="societe" value="" required>
         </article>
        <article class="input-form"> 
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="" required>
         </article>
        <article class="input-form" style="padding-bottom:20px;"> 
        <label for="tel">Téléphone</label>
        <input type="tel" id="tel" name="tel" value="" required>
         </article>
        <article class="input-form"> 
        <label for="message">Message</label>
        <textarea type="text" id="message" name="message" rows="2" value="" required></textarea>
        </article>
            <button type="submit">Envoyez !</button>
        </form>
    </article>
        </section>

<section class="consulte-content-2">
<h4>Les + Consultés</h4>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Cancun / Mer</span>
            <h4>Bref retour sur une campagne de communication qui a suscité de l’émotion !</h4>
            </article>
            <article class="time-localisation">
                <img src="img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Dubai / Été</span>
            <h4>La télévision connectée, un média innovant en plein développement ?</h4>
            </article>
            <article class="time-localisation">
                <img src="img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Paris / Hiver</span>
            <h4>SNCF Voyageurs présente 25 versions  de son logo  !</h4>
            </article>
            <article class="time-localisation">
                <img src="img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>
</section>
<?php require'footer.php';?>
<!-----------------------JS------------------------>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

jQuery(".header_burger").click(function() {
        jQuery(".header").toggleClass("white");
    jQuery(".header").toggleClass("white");
    
  });
  
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Récupérer toutes les spans de localisation et de catégorie
    let localisations = document.querySelectorAll("span[id^='localisation-']");
    let categories = document.querySelectorAll("span[id^='article-']");

    // Récupérer toutes les <li> des villes et des catégories
    let villeItems = document.querySelectorAll(".text1-aside-gauche li");
    let categorieItems = document.querySelectorAll(".text2-aside-gauche li");

    // Fonction pour activer le bon <li>
    function activerLi(spans, liItems) {
        spans.forEach(span => {
            let spanId = span.id.replace("localisation-", "").replace("article-", ""); // Ex: "orleans"
            
            liItems.forEach(li => {
                let liId = li.id.replace("ville-", "").replace("categorie-", ""); // Ex: "orleans"

                if (spanId === liId) {
                    li.classList.add("active");
                }
            });
        });
    }

    // Appliquer aux villes et aux catégories
    activerLi(localisations, villeItems);
    activerLi(categories, categorieItems);
});

</script>
<script>
// Sélectionner tous les éléments li qui ont un id qui commence par "ville-"
document.querySelectorAll("li[id^='ville-']").forEach(function(li) {
    li.addEventListener("click", function() {
        // Récupérer l'ID de la ville (par exemple: "ville-paris" -> "paris")
        const villeId = li.id.replace("ville-", "");

        // Vérifier s'il y a un élément span avec l'ID correspondant à la localisation
        const localisationElement = document.getElementById("localisation-" + villeId);
        if (localisationElement) {
            // Rediriger vers /blog avec l'ID comme ancre
            window.location.href = `/blog#${localisationElement.id}`;
        } else {
            // Si l'élément de localisation n'existe pas, rediriger simplement vers /blog
            window.location.href = `blog.php`;
        }
    });
});
</script>
</body>
</html>