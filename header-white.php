<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/header-white.css">
<link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<body>
<header>
    <a href="/wordpress%20sae303/index.php/accueil"><img style="width:200px;" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>
    <ul>
        <li><a href="/wordpress%20sae303/index.php/accueil">ACCUEIL</a></li>
        <li><a href="/wordpress%20sae303/index.php/blog">BLOG</a></li>
        <li><a href="/wordpress%20sae303/index.php/voyages/">DESTINATION</a></li>
        <li><a href="/wordpress%20sae303/index.php/contact">CONTACT</a></li>
        <li><a href="/wordpress%20sae303/index.php/about">À PROPOS</a></li>
        <li><a href="/wordpress%20sae303/index.php/conseil">CONSEIL</a></li>
    </ul>
    <img style="border-radius:1000px;animation: rotation 5s linear infinite;width:100px;" src="<?php echo get_template_directory_uri(); ?>/img/lavion-head.jpg" alt="avion">
</header>
<style>
    /*----------------------------HEADER-----------------------------------------------*/
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
box-sizing: border-box;
margin: 0;
padding: 0;
list-style: none;
text-decoration: none;
font-family: "Poppins", serif;
}

@keyframes rotation {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

header{
    padding: 30px 0px 30px 0px;
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    align-items: center;
    margin-right: 0px;
}

header ul{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;
    border: solid 2px white;
    padding: 20px;
    border-radius: 100px;
}

header ul li a{
    padding: 10px 25px 10px 25px;
    font-family: "Poppins", serif;
    font-size: 20px;
    color: white;
    transition: 0.2s;
}

header ul li a:hover{
    font-weight: bold;
    background-color: rgba(143, 143, 143, 0.349);
    border-radius: 100px;
    color: white;
}

header ul li a:active{
    font-weight: bold;
    background-color: rgba(143, 143, 143, 0.349);
    border-radius: 100px;
    color: white;
}

/*----------------------------------responsive-------------------------------------------------*/
@media (min-width: 1400px) {
    header{
        padding-left:5.71%;
        padding-right:5.71%;
    }
}

@media (min-width: 1200px) {
    header{
        padding-left: 5%;
        padding-right:5%;
    }
}
@media (min-width: 992px) {
    header{
        padding-left: 3.23%;
        padding-right:3.23%;
    }
}
@media (min-width: 768px) {
    header{
       padding-left:6.25%;
       padding-right:6.25%;
    }
}
</style>