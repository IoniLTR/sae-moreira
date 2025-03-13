<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SAE303
 */

?>

	<footer id="colophon" class="site-footer">
	<img src="<?php echo get_template_directory_uri(); ?>/img/logo-2.png" alt="logo">
<article class="footer-content">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
    <a href="form.php"><button>Contactez-nous</button></a>
</article>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<style>
	footer{
    background-color: black;
    margin-top: 100px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 100px;
}

footer img{
    width: 300px;
}

.footer-content{
    width: 700px;
}

footer p{
    color: white;
    padding-bottom: 20px;
}

footer button{
    font-size: 20px;
    padding: 10px 30px 10px 30px;
    border: solid 1px rgb(255, 255, 255);
    color: #000091;
    border-radius: 50px;
    background-color: rgb(255, 255, 255);
}

/*------responsive-------*/
@media (min-width: 1400px) {
    footer{
        padding-left:5.71%;
        padding-right:5.71%;
    }
}

@media (min-width: 1200px) {
    footer{
        padding-left: 5%;
        padding-right:5%;
    }
}
@media (min-width: 992px) {
    footer{
        padding-left: 3.23%;
        padding-right:3.23%;
    }
}
@media (min-width: 768px) {
    footer{
       padding-left:6.25%;
       padding-right:6.25%;
    }
}
</style>
</body>
</html>
