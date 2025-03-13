<?php
/*
Template Name: Blog
 */
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>

<?php require_once 'header-black.php'?>

<main class="conteneur-principal">
    
    <aside class="conteneur-aside-gauche">
        <ul class="text1-aside-gauche">
            <li><a href="/wordpress%20sae303/index.php/blog">Voir tout</a></li>
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
        
        <div class="reseaux">
            <img src="<?php echo get_template_directory_uri(); ?>/img/envelope-regular-108.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-logo-108.png" alt="reseaux2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/instagram-logo-108.png" alt="reseaux3">
        </div>
    </aside>


    <aside class="conteneur-aside-droit">
    
        <div class="titre-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Capture-decran-2025-02-19-a-09.16.14.png">
            <h1>Parce que vous êtes à part, Blog à part<br> a été imaginé rien que pour vous !</h1>
        </div>
       
            
            <a href="/wordpress%20sae303/index.php/article" style="text-decoration:none;"><article class="articles-blog" style="flex-direction:row; padding:30px 22px 30px 22px;"> 
            <article class="article-blog-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Capture-decran-2025-02-26-a-09.33.40.png" alt="article-1">
                </article>
            <section class="blog-article-content" style="padding-right:0px"> 
                <article class="blog-time-localisation">  
                    <article class="blog-localisation">
                        <span id="localisation-paris">Paris</span>
                        <span style="padding-left:5px; padding-right:5px;"> / </span>
                        <span id="article-hiver">Hiver</span>
                    </article>
                    <article class="blog-time">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                        <span style="margin-right:27px;">1mn</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="calendar">
                        <span>12/03/2025</span>
                    </article>
                    </article>
                    <article class="blog-article-text">
                    <h2>Voyage à la découverte de la capital du monde</h2>
                        </article>
                        <span style="color:black;">En Lire +</span>
                </section>
            </article></a>
            
            <a href="/wordpress%20sae303/index.php/article" style="text-decoration:none;"><article class="articles-blog" style="flex-direction:row-reverse; padding:30px 22px 30px 0px;"> 
            <article class="article-blog-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/dubai-marina-hd.jpg" alt="article-1">
                </article>
            <section class="blog-article-content" style="padding-right:22px"> 
                <article class="blog-time-localisation">  
                    <article class="blog-localisation">
                        <span id="localisation-dubai">Dubai</span>
                        <span style="padding-left:5px; padding-right:5px;"> / </span>
                        <span id="article-ete">Été</span>
                    </article>
                    <article class="blog-time">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                        <span style="margin-right:27px;">1mn</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="calendar">
                        <span>12/03/2025</span>
                    </article>
                    </article>
                    <article class="blog-article-text">
                    <h2>Découvez la ville la plus évolué des Émirats Arabe Unis</h2>
                        </article>
                        <span style="color:black;">En Lire +</span>
                </section>
            </article></a>

            <a href="/wordpress%20sae303/index.php/article" style="text-decoration:none;"><article class="articles-blog" style="flex-direction:row; padding:30px 22px 30px 22px;"> 
            <article class="article-blog-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bangkok.jpg" alt="article-1">
                </article>
            <section class="blog-article-content" style="padding-right:0px"> 
                <article class="blog-time-localisation">  
                    <article class="blog-localisation">
                        <span id="localisation-bangkok">Bangkok</span>
                        <span style="padding-left:5px; padding-right:5px;"> / </span>
                        <span id="article-montagne">Montagne</span>
                    </article>
                    <article class="blog-time">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                        <span style="margin-right:27px;">1mn</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="calendar">
                        <span>12/03/2025</span>
                    </article>
                    </article>
                    <article class="blog-article-text">
                    <h2>Voyage à la découverte de la capital du monde</h2>
                        </article>
                        <span style="color:black;">En Lire +</span>
                </section>
            </article></a>

            <a href="/wordpress%20sae303/index.php/article" style="text-decoration:none;"><article class="articles-blog" style="flex-direction:row-reverse; padding:30px 22px 30px 0px;"> 
            <article class="article-blog-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cancun.jpg" alt="article-1">
                </article>
            <section class="blog-article-content" style="padding-right:22px"> 
                <article class="blog-time-localisation">  
                    <article class="blog-localisation">
                        <span id="localisation-cancun">Cancun</span>
                        <span style="padding-left:5px; padding-right:5px;"> / </span>
                        <span id="article-mer">Mer</span>
                    </article>
                    <article class="blog-time">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                        <span style="margin-right:27px;">1mn</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="calendar">
                        <span>12/03/2025</span>
                    </article>
                    </article>
                    <article class="blog-article-text">
                    <h2>Découvrez la ville où la fête est folle</h2>
                        </article>
                        <span style="color:black;">En Lire +</span>
                </section>
            </article></a>

            <a href="/wordpress%20sae303/index.php/article" style="text-decoration:none;"><article class="articles-blog" style="flex-direction:row; padding:30px 22px 30px 22px;"> 
            <article class="article-blog-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cancun.jpg" alt="article-1">
                </article>
            <section class="blog-article-content" style="padding-right:0px"> 
                <article class="blog-time-localisation">  
                    <article class="blog-localisation">
                        <span id="localisation-cancun">Cancun</span>
                        <span style="padding-left:5px; padding-right:5px;"> / </span>
                        <span id="article-tropical">Tropical</span>
                    </article>
                    <article class="blog-time">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/horloge.png" alt="time">
                        <span style="margin-right:27px;">1mn</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="calendar">
                        <span>12/03/2025</span>
                    </article>
                    </article>
                    <article class="blog-article-text">
                    <h2>Découvrez la ville où la fête est folle</h2>
                        </article>
                        <span style="color:black;">En Lire +</span>
                </section>
            </article></a>
    </aside>
</main>
<?php require'footer.php';?>
<!-----------------------JS------------------------>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){
    function afficherArticlesVille(idVille, bouton) {
        $(".articles-blog").hide(); // Cache tous les articles
        $(".articles-blog").has(idVille).show(); // Affiche uniquement ceux contenant le span voulu

        // Gestion de l'effet actif
        $("ul li").removeClass("active"); // Retire la classe active de tous les éléments
        $(bouton).addClass("active"); // Ajoute la classe active à l'élément cliqué
    }

    function afficherArticlesCategorie(idCategorie, bouton) {
        $(".articles-blog").hide(); // Cache tous les articles
        $(".articles-blog").has(idCategorie).show(); // Affiche uniquement ceux contenant le span voulu

        // Gestion de l'effet actif
        $("ul li").removeClass("active"); // Retire la classe active de tous les éléments
        $(bouton).addClass("active"); // Ajoute la classe active à l'élément cliqué
    }

    $("#ville-paris").click(function(){ afficherArticlesVille("#localisation-paris", this); });
    $("#ville-dubai").click(function(){ afficherArticlesVille("#localisation-dubai", this); });
    $("#ville-bangkok").click(function(){ afficherArticlesVille("#localisation-bangkok", this); });
    $("#ville-cancun").click(function(){ afficherArticlesVille("#localisation-cancun", this); });

    $("#categorie-hiver").click(function(){ afficherArticlesCategorie("#article-hiver", this); });
    $("#categorie-ete").click(function(){ afficherArticlesCategorie("#article-ete", this); });
    $("#categorie-tropical").click(function(){ afficherArticlesCategorie("#article-tropical", this); });
    $("#categorie-mer").click(function(){ afficherArticlesCategorie("#article-mer", this); });
    $("#categorie-montagne").click(function(){ afficherArticlesCategorie("#article-montagne", this); });

});
</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

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
    padding: 0px 0px 32px 0px;
    display: flex;
    flex-direction:column;
    align-items:flex-start;
    justify-content:flex-start;
    margin: 0;
}

.text1-aside-gauche, .text2-aside-gauche{
    margin: 0;
}

.conteneur-aside-gauche ul li, .conteneur-aside-gauche h3{
    font-family: "Poppins", serif;
    color: #000091;
    cursor: pointer;
    transition: 0.2s ease;
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
cursor: pointer;
}

.text2-aside-gauche{
    font-size: 24px;
    padding-bottom:44px;
    font-weight: normal;
}

.text2-aside-gauche li{
line-height: 1;
cursor: pointer;
}

.conteneur-aside-gauche h3{
    font-size: 17px;
    font-weight: bold;
    padding-bottom: 5px;
}

.reseaux img{
 background-color: #00009B;
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
    background-color: #00009B;
    border-radius: 100%;
}

/*----------------------------------aside-droit-------------------------------------------------*/
.conteneur-aside-droit{
    display: flex;
    flex-direction: column;
    width: 100%;
}

.titre-logo{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding:60px 20px 60px 20px;
}

.titre-logo img{
    width: 189px;
    height: 100%;
    padding-right: 23px;
    object-fit: contain;
}
.titre-logo h1{
    font-family: "Poppins", serif;
    font-size: 36px;
    font-weight: bold;
    color: #000091;
}

.articles-blog{
    display: flex;
    border-bottom: solid 1px black;
    overflow: hidden;
    align-items: space-between;
    width: 100%;
}

.articles-blog span{
    font-family: "Poppins", serif;
}

.article-blog-img{
    display:block;
    overflow:hidden;
    max-width:300px;
    width: 100%;
    max-height:250px;
    border-radius: 15px;
}

.article-blog-img img{
    border-radius: 15px;
    max-width:300px;
    width:100%;
    height:100%;
    object-fit:cover;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;  
}

.articles-blog:hover .article-blog-img img{
    max-width:300px;
    transform:scale(1.2);
}

.blog-article-content{
    display: flex;
    justify-content:flex-start;
    flex-direction: column;
    transition: 0.5s ease;
    padding-left:25px;
    width: 100%;
}

.articles-blog:hover .blog-article-content{
    padding-left: 35px;
}

.blog-time-localisation{
    display: flex;
    flex-direction: row;
    align-items:center;
    justify-content: space-between;
    padding-bottom:5px;
    width: 100%;
}

.blog-localisation{
    display: flex;
    flex-direction: row;
    align-items:center;
    justify-content: flex-start;
}

.blog-localisation span, .blog-localisation p {
    font-family: "Poppins", serif;
    font-size: 14px;
    font-weight: normal;
    color: #000000;
}

#localisation-cancun, #localisation-paris, #localisation-dubai, #localisation-bangkok{
    font-size: 16px;
    font-weight: bold;
}

.blog-time{
    display: flex;
    flex-direction: row;
    align-items:center;
    justify-content: flex-start;
}

.blog-time span{
    font-family: "Poppins", serif;
    font-size: 14px;
    font-weight: normal;
    color: #000000;
    margin-left:5px;
}

.blog-time img{
    height:20px;
    width: 20px;
}

.blog-article-text{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding-bottom:5px;
}

.blog-article-text h2{
    font-family: "Poppins", serif;
    font-size: 30px;
    font-weight: 800;
    color: #000091;
}

.blog-article-text span{
    font-family: "Poppins", serif;
    font-size: 17px;
    font-weight: light;
    color: #000000;
}

/*----------------------------------responsive-------------------------------------------------*/
@media (min-width: 1400px) {
    .conteneur-principal{
        padding-left:5.71%;
        padding-right:5.71%;
    }
}

@media (min-width: 1200px) {
    .conteneur-principal{
        padding-left: 5%;
        padding-right:5%;
    }
}
@media (min-width: 992px) {
    .conteneur-principal{
        padding-left: 3.23%;
        padding-right:3.23%;
    }
}
@media (min-width: 768px) {
    .conteneur-principal{
       padding-left:6.25%;
       padding-right:6.25%;
    }
}
</style>
</body>
</html>