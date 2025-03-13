<?php
/*
Template Name: About
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <title>À propos</title>
</head>
<body>

    <section style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/beach-4405357_1280.jpg');">
    <?php require'header-white.php';?>
        <div class="content">
            <h3>Explorez des Paysages Époustouflants en Asie</h3>
            <p>Vivez une expérience unique et inoubliable à travers les plus belles destinations d’Asie. Partez à l’aventure dès maintenant.</p>
            <a href="#" class="button">Commencer l'Aventure</a>
        </div>
    </section>
    <main>
        <div class="partie-1">
            <di class="right-text">
                <h3>About us our team press</h3>
            </di>
            <div class="about-text">
                <h2>About us</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cum eveniet 
                    animi accusantium asperiores ipsum optio deserunt id reprehenderit r
                    epellendus assumenda dolorem, laudantium impedit consequuntur maxime ex! Amet, qui magnam? 
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam perferendis eius ab asperiores modi a esse maiores facilis, officiis vel provident 
                    impedit laudantium soluta qui repudiandae voluptatibus tenetur iure dignissimos!</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cum eveniet 
                        animi accusantium asperiores ipsum optio deserunt id reprehenderit r
                        epellendus assumenda dolorem, laudantium impedit consequuntur maxime ex! Amet, qui magnam? 
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam perferendis eius ab asperiores modi a esse maiores facilis, officiis vel provident 
                        impedit laudantium soluta qui repudiandae voluptatibus tenetur iure dignissimos!</p>
            </div>
        </div>

        <div class="partie-2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/annie-spratt-sggw4-qDD54-unsplash.jpg" />
        </div>

       
            <div class="partie-3">
                <div class="citation">
                    <h4>Our work does make sense only if it is a feathful </h4>
                </div>
               <div class="citation-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/marvin-meyer-SYTO3xs06fU-unsplash.jpg"/>
               </div>
               
            </div>
      
   
    <div class="partie-4">
        
        <div class="team">

            <div class="image-team">

                <img src="<?php echo get_template_directory_uri(); ?>/img/businessman-1247947_1280.jpg"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/woman-1254454_1280.jpg"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/woman-868534_1280.jpg"/>

            </div>

            <div class="text-team">
                <h1>THE TEAM</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi quisquam modi voluptatibus aliquam quo excepturi iusto, nulla neque qui earum ullam quod deb
                    itis ipsa, recusandae impedit pariatur commodi tenetur placeat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quibusdam deserunt maiores, ducimus excepturi quam magni consequuntur, eius incidunt, labore ullam earum beatae placeat natus totam
                     hic voluptatem harum expedita.</p>
    
                     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi quisquam modi voluptatibus aliquam quo excepturi iusto, nulla neque qui earum ullam quod deb
                        itis ipsa, recusandae impedit pariatur commodi tenetur placeat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quibusdam deserunt maiores, ducimus excepturi quam magni consequuntur, eius incidunt, labore ullam earum beatae placeat natus totam
                         hic voluptatem harum expedita.</p>
                        
            </div>
            
                  
        </div>
    </div>
</main>
<?php require'footer.php';?>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

main{
    padding: 60px;
  }
  section {
    width: 100vw;
    height: 100vh;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; 
    color: white;
    text-align: center;
}

.content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 150px 300px 150px 300px;
}

.content h3 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 20px;
}

.content p {
    font-size: 1.2rem;
    line-height: 1.6;
    margin-bottom: 20px;
}

.button {
    display: inline-block;
    padding: 12px 24px;
    background: #fff;
    color: #000;
    font-size: 1rem;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: 0.3s;
}

.button:hover {
    background: #f0f0f0;
}




.partie-1 {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Deux colonnes égales */
    gap: 20px; /* Espacement entre les éléments */
    align-items: center; /* Centre les éléments verticalement */
  
  }
  
  .right-text, .about-text {
    display: flex;
    flex-direction: column; /* Aligner les éléments en colonne */
    justify-content: center;
  
    padding: 20px;
    height: 100%; /* Assure que les deux sections aient la même hauteur */
  }
  
  .right-text h3 {
    font-size: 24px;
   
    text-align: center;
   
  }
  
  .about-text h2 {
    font-size: 28px;
    
    margin-bottom: 10px;
  }
  
  .about-text p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    margin-bottom: 20px; /* Ajoute de l'espace entre les paragraphes */
    padding-bottom: 10px; /* Optionnel : espace intérieur pour plus d'aération */
  
  }
  
  .about-text p:last-of-type {
    border-bottom: none; /* Supprime la bordure sous le dernier paragraphe */
  }
  

.partie-2 img{
    border-radius: 20px;
    margin-left:200px;
    height: 50%;
    width: 80%;
}

.partie-3 {
    padding: 50px;
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Deux colonnes égales */
    gap: 20px; /* Espacement entre les éléments */
    align-items: stretch; /* Étire les éléments pour qu'ils aient la même hauteur */
  }
  
  .citation, .citation-img {
    display: flex;
    align-items: center; /* Centre le contenu verticalement */
    justify-content: center; /* Centre le contenu horizontalement */
  
    padding: 20px;
  }
  
  .citation-img img {
    border-radius: 20px;
    width: 100%; /* Ajuste l'image pour remplir son conteneur */
    height: 100%; /* Prend toute la hauteur disponible */
    object-fit: cover; /* Évite la déformation de l’image */
  }



  .partie-4 {
    padding: 50px;
  }
  
  .team {
    display: grid;
    grid-template-columns: 1fr 1.5fr; /* Deux colonnes */
    gap: 50px; /* Espace entre la grille des images et le texte */
    align-items: center; /* Aligne les éléments verticalement */
  }
  
  /* 📌 Organisation des images */
  .image-team {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Deux colonnes */
    grid-template-rows: auto auto; /* Deux lignes */
    gap: 15px;
    align-items: center;
  }
  
  .image-team img:nth-child(1) {
    border-radius: 20px;
    grid-column: 1 / 2; /* Première colonne */
    grid-row: 1 / 2; /* Première ligne */
  }
  
  .image-team img:nth-child(2) {
    border-radius: 20px;
    grid-column: 1 / 2; /* Toujours à gauche */
    grid-row: 2 / 3; /* Seconde ligne */
  }
  
  .image-team img:nth-child(3) {
    border-radius: 20px;
    grid-column: 2 / 3; /* À droite */
    grid-row: 1 / 3; /* Occupe deux lignes */
    align-self: center; /* Centre verticalement */
  }
  
  /* 🌟 Style des images */
  .image-team img {
    border-radius: 20px;
    width: 100%;
    height: auto;
    object-fit: cover; /* Évite la déformation */
    border-radius: 5px;
  }
  
  /* 🎨 Style du texte */
  .text-team {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  
  .text-team h1 {
    font-size: 48px;
    font-weight: bold;
  }
  
  .text-team p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    margin-bottom: 15px;
  }
</style>
</body>
</html>