<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SAE303
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sae303' ); ?></a>

	<header id="masthead" class="site-header">
	<a href="index.php"><img style="width:200px;" src="img/logo-2.png" alt="logo"></a>
    <ul>
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="blog.php">BLOG</a></li>
        <li><a href="destination.php">DESTINATION</a></li>
        <li><a href="form.php">CONTACT</a></li>
        <li><a href="about.php">À PROPOS</a></li>
        <li><a href="conseil.php">CONSEIL</a></li>
    </ul>
    <img style="border-radius:1000px;animation: rotation 5s linear infinite;width:100px;" src="img/lavion-head.jpg" alt="avion">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sae303' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
