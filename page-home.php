<?php
/**
* Template Name: Homepage
* Description: The home page.
*
* @package Platinum
*/

get_header(); ?>

<main id="main" class="site-main" role="main">

  <?php if ( is_active_sidebar( 'home-hero' ) ) : ?>
  <section id="home-hero" class="home-hero">
    <?php dynamic_sidebar( 'home-hero' ); ?>
  </section>
  <!-- /home-hero -->
  <?php endif; ?>

  <nav id="site-navigation" class="main-navigation" role="navigation">
    <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'platinum' ); ?></button>
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
  </nav><!-- #site-navigation -->

  <?php if ( is_active_sidebar( 'home-content' ) ) : ?>
  <section id="home-content" class="home-content">
    <?php dynamic_sidebar( 'home-content' ); ?>
  </section>
  <!-- /home-content -->
  <?php endif; ?>

</main><!-- /main -->
<?php get_footer(); ?>
