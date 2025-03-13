<?php
/*
Template Name: Accueil
 */
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
        <link rel="stylesheet" href="css/accueil.css">
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>
    <body>
    <section class="section-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/tourdumonde-1.jpg');">
   
    <?php require'header-white.php';?>
<!--section 1--> 
        <article class="text1">
        <article class="title-section-1">
        <h4>Feel The Experience</h4>
        <h1>Explore The Majestic Asia Landscape Now</h1>
        <a href="destination.php"><button>Get started</button></a>
        </article>
        <article class="content-section-1">
            <article class="text-section-1" style="animation: scroll-1 10s linear infinite;">
            <box-icon name='time-five' type='solid' color='#ffffff' size="25px"></box-icon>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et</p>
            </article>
            <article class="text-section-1" style="animation: scroll-2 10s linear infinite;">
            <box-icon name='error' type='solid' color='#ffffff' size="25px"></box-icon>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et</p>
            </article>
        </article>
        </article>
    </section>
<!--section 2-->   
    <main>
    <section class="section-2">
    <article class="grid-1">
    <article class="img-section-2-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/lagon.jpg');">
        <article class="img-content-section-2">
            <h4>Grand Palace</h4>
            <p>Bagkok, Thailand</p>
        </article>
        <box-icon name='right-top-arrow-circle' size="40px" color='#ffffff' ></box-icon>
    </article>
    </article>
<article class="grid-2">
    <article class="img-section-2-2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/montagne.jpg');">
        <article class="img-content-section-2">
            <h4>Grand Palace</h4>
            <p>Bagkok, Thailand</p>
        </article>
        <box-icon name='right-top-arrow-circle' size="40px" color='#ffffff' ></box-icon>
    </article>

    <article class="img-section-2-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/moulin.jpg');">
        <article class="img-content-section-2">
            <h4>Grand Palace</h4>
            <p>Bagkok, Thailand</p>
        </article>
        <box-icon name='right-top-arrow-circle' size="40px" color='#ffffff' ></box-icon>
    </article>

    <article class="img-section-2-4" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/santorin.webp');">
        <article class="img-content-section-2">
            <h4>Grand Palace</h4>
            <p>Bagkok, Thailand</p>
        </article>
        <box-icon name='right-top-arrow-circle' size="40px" color='#ffffff' ></box-icon>
    </article>
    </article>
    </section>
<!--section 3--> 
    <section class="section-3">
        <article class="article-section-3">
        <article class="title-section-3">
            <h3>Experience The <br>New Adventure</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
        </article>

        <article class="icon-section-3">
        <box-icon size="30px" type='solid' name='check-shield' color='#ffffff'></box-icon>
            <article  class="content-section-3">
                <h4>Safe Travelling</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et</p>
            </article>
        </article>

        <article class="icon-section-3">
        <box-icon size="30px" name='money' color='#ffffff'></box-icon>
            <article class="content-section-3">
                <h4>Safe Travelling</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et</p>
            </article>
        </article>

        <article class="icon-section-3">
        <box-icon size="30px" name='door-open' type='solid' color='#ffffff' ></box-icon>
            <article class="content-section-3">
                <h4>Safe Travelling</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et</p>
            </article>
            </article>
        </article>
        <img src="<?php echo get_template_directory_uri(); ?>/img/lac.jpg" alt="lac">
    </section>
    </main>
    <?php require'footer.php';?>
    <style>
        body{
    background-color: whitesmoke;
}

main{
padding: 0px 150px 0px 150px;
}
/*----------------------------BODY-----------------------------------------------*/
/*---SECTION1---*/
.section-1{
    width: 100vw;
    height: 100vh;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; 
    color: white;
}

.title-section-1{
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    padding-bottom: 30px;
}

.text1{
    height: 80vh;
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    justify-content: center;
}

.section-1 h1{
font-size: 70px;
margin-top: 30px;
width: 50vw;
}

.section-1 h4{
    font-size: 16px;
    padding: 10px;
    border: solid 1px gray;
    border-radius: 20px;
    background-color: rgba(143, 143, 143, 0.349);
}

.section-1 button{
    margin-top: 30px;
    font-size: 20px;
    padding: 10px 30px 10px 30px;
    border: solid 1px rgb(255, 255, 255);
    color: #000091;
    border-radius: 50px;
    background-color: rgb(255, 255, 255);
}

@keyframes scroll-2 {
  0% { right: 100%; }
  100% { right: -160%; }
}

@keyframes scroll-1 {
    0% { right: 100%; }
    100% { right: -110%; }
  }


.content-section-1{
    margin-top: 100px;
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: flex-start;
}

.text-section-1{
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: flex-start;
    padding: 0px 50px 0px 0px;    
    overflow: hidden;
    position: relative;
}

.text-section-1 box-icon{
    padding: 10px;
    margin-right: 10px;
    background-color: rgba(91, 91, 91, 0.77);
    border-radius: 100px;
}

.text-section-1 p{
    font-size: small;
}

/*---SECTION2---*/
.section-2{
    width: 100%;
    padding-top: 100px;
    display: flex;
    flex-direction: row;
    align-items: center;
    padding-bottom: 100px;
}

.grid-1{
width: 40%;
height: 84vh;
}

.img-section-2-1{
display: flex;
justify-content: space-between;
padding: 30px;
box-shadow: inset 0px -50px 50px black;
transition:0.5s;
color: white;
flex-direction: row;
align-items: flex-end;
height: 100%;
width: 100%;
border-radius: 15px;
}

.grid-2{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(2,40vh);
    width: 70%;
    gap: 30px;
    margin-left: 30px;
}

.img-section-2-2{
    display: flex;
    justify-content: space-between;
    padding: 30px;
box-shadow: inset 0px -50px 50px black;
transition:0.5s;
    color: white;
    flex-direction: row;
    align-items: flex-end;
    width: 100%; 
    height: 40vh;
    border-radius: 15px;
}

.img-section-2-3{
    display: flex;
    justify-content: space-between;
    padding: 30px;
box-shadow: inset 0px -50px 50px black;
transition:0.5s;
    color: white;
    flex-direction: row;
    align-items: flex-end;
    width: 100%; 
    height: 40vh;
    border-radius: 15px;
}

.img-section-2-4{
    display: flex;
    justify-content: space-between;
    padding: 30px;
box-shadow: inset 0px -50px 50px black;
transition:0.5s;
    color: white;
    flex-direction: row;
    align-items: flex-end;
    width: 100%; 
    height: 40vh;
    border-radius: 15px;
    grid-column: span 2;
}

.img-section-2-1:hover, .img-section-2-2:hover, .img-section-2-3:hover, .img-section-2-4:hover{
    box-shadow: inset 0px 0px 0px black;
}

/*section3*/
.section-3{
    height: 80vh;
    display: flex;
    flex-direction: row;
    justify-content:space-between;
    align-items: center;
}

.article-section-3{
    width: 40%;
    padding: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.section-3 img{
    border-radius: 15px;
    height: 80vh;
    object-fit: cover;
    width: 60%;
}

.title-section-3 h3{
    font-size: 40px;
    padding-bottom: 20px;
    color: #000091;
}

.title-section-3 p{
    font-size: 16px;
    padding-bottom: 20px;
}

.icon-section-3{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
    padding-bottom: 20px;
}
.icon-section-3 box-icon{
    padding: 10px;
    margin-right: 10px;
    background-color: #000091;
    border-radius: 100px;
}

.icon-section-3 h4{
    font-size: 25px;
    color: #000091;
}

.icon-section-3 p{
    color: black;
    font-size: 16px;
}
/*----------------------------------responsive-------------------------------------------------*/
@media (min-width: 1400px) {
    .text1, main{
        padding-left:5.71%;
        padding-right:5.71%;
    }
}

@media (min-width: 1200px) {
    .text1, main{
        padding-left: 5%;
        padding-right:5%;
    }
}
@media (min-width: 992px) {
    .text1, main{
        padding-left: 3.23%;
        padding-right:3.23%;
    }
}
@media (min-width: 768px) {
    .text1, main{
       padding-left:6.25%;
       padding-right:6.25%;
    }
}
    </style>
</body>
</html>