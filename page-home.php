<?php
/**
* Template Name: Homepage
* Description: The home page.
*
* @package Platinum
*/

get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="home-hero"></div><!-- /hero image-->

<?php if ( is_active_sidebar( 'home-services' ) ) : ?>
  <section class="home-services">
    <div class="wrapper">
        <?php dynamic_sidebar( 'home-services' ); ?>
    </div><!-- /wrapper -->
  </section><!-- /home-services -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'home-accident' ) ) : ?>
  <section class="home-accident">
    <div class="wrapper">
      <?php dynamic_sidebar( 'home-accident' ); ?>
    </div><!-- /wrapper -->
  </section><!-- /home-accident -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'home-about' ) ) : ?>
  <section class="home-about">
    <div class="wrapper">
        <?php dynamic_sidebar( 'home-about' ); ?>
    </div><!-- /wrapper -->
  </section><!-- /home-about -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'home-contact' ) ) : ?>
  <section class="home-contact">
    <div class="wrapper">
      <?php dynamic_sidebar( 'home-contact' ); ?>
    </div><!-- /wrapper -->
  </section><!-- /home-contact -->
<?php endif; ?>


</main><!-- /main -->
<?php get_footer(); ?>
