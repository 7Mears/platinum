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
<?php include_once("analyticstracking.php") ?>

</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'platinum' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Platinum</a></h1>
			<h3>Paint and Body Ltd.</h3>
		</div><!-- .site-branding -->
		<?php if(is_front_page() ) { ?>
		<div class="header-contact--info">
			<p><i class="fa fa-phone"></i> <a href="tel:306-249-5670">(306) 249-5670</a></p>
			<p><i class="fa fa-map-marker"></i> <a href="https://goo.gl/maps/H7riw">125 105th Street East</a></p>
			<p><i class="fa fa-globe"></i> Saskatoon, SK</p>
		</div><!-- .contact-info -->
		<?php } ?>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
