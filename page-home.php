<?php
/**
* Template Name: Homepage
* Description: The home page.
*
* @package Platinum
*/

get_header(); ?>

<main id="main" class="site-main" role="main">

  <section id="home-hero" class="home-hero">
    <?php dynamic_sidebar( 'home-hero' ); ?>

    <div class="home-hours">
      We are open weekdays from 8:00 am to 5:00 pm, closed on weekends
    </div>
  </section>
  <!-- /home-hero -->

  <div class="wrapper">
    <?php if ( is_active_sidebar( 'home-content' ) ) : ?>
    <section id="home-content" class="home-content">

      <h1>Repair, Paint, Services</h1>
      <p>SGI accredited auto body shop serving Saskatoon and surrounding areas. Our collision repair technicians are paid by the day, not by the job, meaning they'll take the time to do your repairs correctly.</p>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/training.svg">
        <h2>Collision repair</h2>
        <p>Proactively productize pandemic partnerships before future-proof platforms. Compellingly monetize.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/customizable.svg">
        <h2>Paint and Refinishing</h2>
        <p>Proactively productize pandemic partnerships before future-proof platforms. Compellingly monetize.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/responsive.svg">
        <h2>Mechanical</h2>
        <p>Proactively productize pandemic partnerships before future-proof platforms. Compellingly monetize.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/training.svg">
        <h2>Frame Repair</h2>
        <p>Proactively productize pandemic partnerships before future-proof platforms. Compellingly monetize.</p>
      </div>

      <?php dynamic_sidebar( 'home-content' ); ?>
    </section>
    <!-- /home-content -->
    <?php endif; ?>
  </div>
</main><!-- /main -->
<?php get_footer(); ?>
