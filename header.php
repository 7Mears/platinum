<?php
/**
 * The header for our theme.
 *
 *
 * @package platinum
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'platinum' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Platinum</a></h1>
			<h3>Paint and Body Ltd.</h3>
		</div><!-- .site-branding -->

		<div class="contact-info">
			<p>(306) 249-5670</p>
			<p>125 105 Street East</p>
			<p>Saskatoon, SK</p>
		</div><!-- .contact-info -->

		<?php if ( is_front_page() ) {} else { ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'platinum' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		<?php } ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
