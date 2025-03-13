<?php
/*
Template Name: Article
 */
?>
<?php require_once 'contact-article.php';?>
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
            <li><a href="/wordpress%20sae303/index.php/blog">Blog ></a></li>
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/envelope-regular-108.png" alt="reseaux1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-logo-108.png" alt="reseaux2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/instagram-logo-108.png" alt="reseaux3">
        </article>
<section class="consulte-content-1">
        <h4>Les + Consultés</h4>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Cancun / Mer</span>
            <h4>Découvrez la capitale du monde et sa richesse</h4>
            </article>
            <article class="time-localisation">
                <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Dubai / Été</span>
            <h4>Découvrez la capitale du monde et sa richesse</h4>
            </article>
            <article class="time-localisation">
                <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Paris / Hiver</span>
            <h4>Découvrez la capitale du monde et sa richesse</h4>
            </article>
            <article class="time-localisation">
                <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>
</section>
    </aside>


    <aside class="conteneur-aside-droit">

    <article class="titre-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Capture-decran-2025-02-19-a-09.16.14.png" alt="Logo Blog">
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                <span style="padding-right:25px">1mn</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="date">
                <span>22/01/2025</span>
        </article>
    </article>
    </section>
    <section class="article-page-content-1">
        <h1 class="titre-post">Découvrez la capitale du monde et sa richesse</h1>

    <article class="image-post">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Capture-decran-2025-02-26-a-09.33.40.png" alt="Image article">
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/Capture-decran-2025-02-26-a-09.33.40.png" alt="Image article">
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
    <img src="<?php echo get_template_directory_uri(); ?>/img/Capture-decran-2025-02-19-a-09.16.14.png" alt="">
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Dubai / Été</span>
            <h4>La télévision connectée, un média innovant en plein développement ?</h4>
            </article>
            <article class="time-localisation">
                <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="date">
                <span>22/01/2025</span>
            </article>
        </article></a>

        <a href=""><article class="article-consulte">
            <article class="titre-article-consulte">
            <span>Paris / Hiver</span>
            <h4>SNCF Voyageurs présente 25 versions  de son logo  !</h4>
            </article>
            <article class="time-localisation">
                <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                <span>1mn</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="date">
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
<style>
    .conteneur-principal{
    display:flex;
    align-items: flex-start;
    justify-content:flex-start;
    flex-direction:row;
    width: 100%;
    margin-bottom: 100px;
}

/*----------------------------------aside-gauche-------------------------------------------------*/
.conteneur-aside-gauche{
    display:flex;
    flex-direction:column;
    width: 35%;
    padding-top:50px;
}

.conteneur-aside-gauche ul{
    padding-bottom: 32px;
    display: flex;
    flex-direction:column;
    align-items:flex-start;
    justify-content:flex-start;
}

.conteneur-aside-gauche ul li, .conteneur-aside-gauche h3{
    font-family: "Poppins", serif;
    color: #000091;
    cursor: pointer;
    transition: 0.2s ease;
}

.text1-aside-gauche,.text2-aside-gauche{
    padding: 0px;
}

.text1-aside-gauche li:hover, .text2-aside-gauche li:hover,
.text1-aside-gauche li.active, .text2-aside-gauche li.active {
    font-weight: bold;
    padding-left: 25px;
}

.text1-aside-gauche{
    font-size: 36px;
    padding-bottom:44px;
    font-weight: normal;
}

.text1-aside-gauche li{
line-height: 1.1;
text-decoration:none;
color: #000091;
cursor: pointer;
}

.text2-aside-gauche{
    font-size: 24px;
    padding-bottom:44px;
    font-weight: normal;
}

.text2-aside-gauche li{
line-height: 1;
text-decoration:none;
color: #000091;
cursor: pointer;
}

.conteneur-aside-gauche h3{
    font-size: 17px;
    font-weight: bold;
    padding-bottom: 5px;
}

.reseaux img{
 background-color: #000091;
 border-radius: 100%;
 padding: 5px;
 margin: 0px 4px 0px 4px;
 width: 37px;
 height: 37px;
 transition: 0.2s ease;
}

.reseaux img:hover{
    width: 42px;
    height: 42px;
    background-color: #000091;
    border-radius: 100%;
}

.conteneur-aside-gauche h4{
    font-family: "Poppins", serif;
    color: #000000;
    font-size: 17px;
    font-weight: bold;
    padding-top: 32px;
    padding-bottom: 5px;
}

.article-consulte{
display: flex;
flex-direction: column;
justify-content: flex-start;
align-items: flex-start;
padding-bottom: 32px;
padding-right:150px;
transition: 0.2s ease;
}

.article-consulte:hover{
    padding-left: 25px;
    padding-right:125px;
}

.titre-article-consulte{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
}

.titre-article-consulte span{
padding-bottom: 5px;
font-family: "Poppins", serif;
color: #000000;
font-weight: bold;
font-size: 12px;
}

.titre-article-consulte h4{
    font-family: "Poppins", serif;
    color: #000091;
    font-weight: 800;
    font-size: 17px;
    padding:0px;
}

.time-localisation{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
}

.time-localisation img{
    width: 15px;
    height: 15px;
    object-fit: contain;
    padding-right: 5px ;
}

.time-localisation span{
    padding-right: 25px ;
    font-family: "Poppins", serif;
    color: #000000;
    font-weight: normal;
    font-size: 9px;
}

/*----------------------------------aside-droit-------------------------------------------------*/
.conteneur-aside-droit{
    display: flex;
    flex-direction: column;
    width: 100%;
    padding-top:60px;
}

.titre-logo{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding:0px 20px 60px 20px;
}

.titre-logo img{
    width: 189px;
    height: 100%;
    padding-right: 23px;
    object-fit: contain;
}
.titre-logo h2{
    font-family: "Poppins", serif;
    font-size: 36px;
    font-weight: bold;
    color: #000091;
}

.section-time-localisation{
    display: flex;
    flex-direction:row;
    justify-content:flex-end;
    align-items:center;
    width: 100%;
}

.blog-localisation-time{
    display: flex;
    flex-direction:row;
    justify-content:space-between;
    align-items:center;
    padding-bottom: 50px;
    width: 60%;
}

.blog-localisation{
    display:flex;
    flex-direction:row;
    justify-content:flex-start;
    align-items:center;
    font-family: "Poppins", serif;
    font-size: 14px;
    font-weight: normal;
    color: #000000;
}

.blog-time{
    display:flex;
    flex-direction:row;
    justify-content:flex-start;
    align-items:center;
    font-family: "Poppins", serif;
    font-size:14px;
    font-weight:normal;
    color: #000000;
}

.blog-time img{
height:20px;
width:20px;
padding-right:5px;
object-fit: contain;
}

.blog-time span{
    font-family: "Poppins", serif;
    font-size:14px;
    font-weight:normal;
    color: #000000;
}

.titre-post{
    font-family: "Poppins", serif;
    font-size:52px;
    font-weight:800;
    color: #000091;
    padding-bottom: 50px;
}

.image-post{
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
}

.image-post img{
    width: 100%;
    object-fit: cover;
    padding-bottom: 10px;
    border-radius: 15px;
}

.image-post p{
    font-family: "Poppins", serif;
    font-size:12px;
    font-weight:normal;
    color: #00000060;
    padding-bottom: 20px;
}

.text2-aside-droit{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    font-size: 16.5px;
    font-family: "Poppins", serif;
}

.post-paragraphe{
    font-family: "Poppins", serif;
    color: #000000;
    font-weight: normal;
    padding-bottom:32px;
    margin:0;
}

.post-paragraphe-titre1, .post-paragraphe-hashtag{
    font-family: "Poppins", serif;
    padding-bottom: 5px;
    margin:0;
    color: #000091;
    font-weight: bold;
}

.form-contact{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    background-color: #000091;
    margin-top: 40px;
    padding: 60px 200px 45px 110px;
    width: 100%;
    border-radius: 15px;
}

.form-contact-slogan{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 100vw;
    padding-left: 5%;
}

.form-contact-slogan img{
    padding-right: 60px;
    width: 20vw;
}

.form-contact h3{
    font-family: "Poppins", serif;
    color: #ffffff;
    font-weight: bold;
    font-size: 18px;
    padding-bottom: 30px;
    margin:0px;
}

.form-contact form{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
}

.form-contact form input, .form-contact form textarea{
    width: 100%;
    background-color: #000091;
    color: #ffffff;
    font-size: 14px;
    border-top: none;
    border-left: none;
    border-right: none;
}

.form-contact form input{
border-bottom:solid 1px #ffffff;
}

.form-contact textarea{
  line-height: 45px; /* Hauteur des lignes */
  background-image:linear-gradient(transparent 98%, white 2%);
  background-size: 100% 45px; /* Hauteur des lignes */
  background-position: 0 bottom; /* Positionner les lignes en bas */
  background-repeat: repeat-y;
}

.input-form{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: baseline;
    width: 100%;
    padding-bottom: 30px;
}

.input-form label{
    padding-right: 10px;
    color: #ffffff;
    font-size: 16.5px;
}

.form-contact form button{
    padding:10px 20px 10px 20px;
    background-color: #ffffff;
    border: none;
    font-family: "Poppins", serif;
    color: #000091;
    font-weight: bold;
    font-size: 16.5px;
    border-radius:5px;
}
textarea{
    height: 90px;
}

.article-page-content-2, .consulte-content-2{
display:none;
padding-left: 4%;
padding-right: 4%;
}
/*----------------------------------responsive-------------------------------------------------*/
@media (max-width: 2500px) {
    .conteneur-principal{
        padding-left:5.71%;
        padding-right:5.71%;
    }
    .form-contact-slogan{
        padding-left:5.71%;
    }
}

@media (min-width: 1480px) {
    .conteneur-principal, .form-contact-slogan{
        margin-right: auto;
        margin-left: auto;
        max-width:1320px;
        padding-right: var(--bs-gutter-x, .75rem);
        padding-left: var(--bs-gutter-x, .75rem);
}
.form-contact-slogan img{
max-width:325px;
}
}
@media (max-width: 1400px) {
    .conteneur-principal{
        padding-left: 5%;
        padding-right:5%;
    }
}
@media (max-width: 1200px) {
    .form-contact-slogan{
        padding-left: 3.23%;
    }
}
@media (max-width: 1024px) {
    .conteneur-principal{
        padding-left: 3.23%;
        padding-right:3.23%;
    }
    .form-contact-slogan{
        padding-left: 0%;
    }
}
@media (max-width: 992px) {
    .conteneur-principal{
       padding-left:6.25%;
       padding-right:6.25%;
    }
}
@media (max-width: 768px) {
    .conteneur-principal{
        margin-top:0px;
        padding-left:4%;
        padding-right:4%;
    }

}
/*----------------------------------aside-gauche-------------------------------------------------*/
@media (max-width: 1024px) {
    .conteneur-aside-gauche{
        width: 30%;
    }

    .text1-aside-gauche {
        font-size: 30px;
    }

    .text2-aside-gauche{
        font-size: 20px;
    }
    .article-consulte{
        padding-right: 50px;
    }

    .article-consulte:hover{
    padding-left: 25px;
    padding-right:25px;
}

    .article-consulte h4 {
        font-size: 15px;
    }
}
/*-------------------------------------*/
@media (max-width: 768px) {
    .conteneur-aside-gauche{
        width: 30%;
        padding-top: 0px;
    }

    .text1-aside-gauche, .text2-aside-gauche{
    padding-left:0px;
    }

    .reseaux img{
    width: 27px;
    height: 27px;
    }
    .text1-aside-gauche {
        font-size: 25px;
    }
    .text2-aside-gauche {
        font-size: 17px;
    }
    .text1-aside-gauche li:hover, .text2-aside-gauche li:hover{
        font-weight: normal;
        padding-left: 0px;   
    }
    .reseaux img:hover{
    width: 27px;
    height: 27px;
}
.article-consulte {
        padding-right: 20px;
    }
.article-consulte:hover{
    padding-left: 0px;
    padding-right:50px;
}
.article-consulte h4{
        font-size: 13px;
    }
    .titre-article-consulte span{
font-size:10px;
}
}
/*---------------------------------------------*/
@media (max-width: 425px) {
    .conteneur-aside-gauche{
        width: 35%;
    }
    .conteneur-aside-gauche ul {
        padding-bottom: 15px;
        margin:0px;
    }
    .text1-aside-gauche li{
        font-size:24px;
    }
    .text2-aside-gauche li{
        font-size:19px;
    }
    .conteneur-aside-gauche h3 {
        font-size: 14px;
    }
    .reseaux{
        flex-wrap:nowrap;
    }
    .reseaux img {
        width: 27px;
        padding:5px;
        height: 27px;
        margin:0;
        }
    .consulte-content-1{
    display:none;
    }
}
/*----------------------------------aside-droit-------------------------------------------------*/
@media (max-width: 1024px) {
    .titre-logo img{
        width: 130px;
    }
    .titre-logo {
        padding: 0px 20px 40px 20px;
    }

    .blog-localisation-time {
        padding-bottom: 40px;
    }

    .titre-logo h2{
        font-size: 24px;
    }

    .blog-localisation-time{
        width: 80%;
    }
    
    .titre-post{
        font-size: 45px;
    }
    .form-contact-slogan img{
        display:none;
    }
    .form-contact{
        padding: 60px 70px 45px 70px;
    }
}
/*-------------------------------------*/
@media (max-width: 768px) {
.conteneur-aside-droit{
    padding-top: 0px;
}

.titre-logo{
        flex-direction: column;

    }
.titre-logo img{
    padding-right:0px;
    padding-bottom:20px;
}

.titre-logo h2 {
    font-size: 23px;
    text-align: center;
}
.blog-localisation-time {
    width: 100%;
    flex-wrap:wrap;
    justify-content:center;
    }

.titre-post{
    font-size: 30px;
    padding-bottom: 20px;
}
.blog-localisation{
    font-size:12px;
    padding-right:30px;
}
.blog-time {
    font-size:12px;
}
.titre-post{
    font-size: 35px;
    padding-bottom: 20px;
}
.text2-aside-droit {
font-size:14px;
}
.form-contact h3{
    padding-bottom:20px;
    font-size:16px;
}
.input-form label{
    font-size:15px;  
}
.form-contact button{
    font-size:12px; 
}
}
/*---------------------------------------------*/
@media (max-width: 425px) {
.titre-logo {
    padding: 0px 0px 20px 20px;
}
.titre-logo h2 {
    font-size: 20px;
}
.titre-logo img{
padding-bottom: 40px;
}
.blog-localisation-time{
    padding-bottom: 20px;
}
.blog-localisation, .blog-time{
        font-size: 12px;
        padding-right: 0px;
}
.article-page-content-1{
    display:none;
}
.form-contact {
    padding: 40px;
    margin-bottom:30px;
}
.form-contact form button{
    font-size:14px;
}
.article-page-content-2{
display:block;
}
.consulte-content-2{
    display:block;
}
.consulte-content-2 h4{
    font-family: "Poppins", serif;
    color: #00009B;
    font-size: 25px;
    font-weight: bold;
}
.consulte-content-2 .article-consulte{
    padding-right:0px;
}
.consulte-content-2 span{
    font-family: "Poppins", serif;
    font-size: 13px;
}
.consulte-content-2 .titre-article-consulte h4{
    font-size: 18px;
}
}
@media (max-width: 342px) {
    .titre-logo img{
padding-bottom: 20px;
}
}
</style>
</body>
</html>