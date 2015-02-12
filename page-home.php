<?php
/**
* Template Name: Homepage
* Description: The home page.
*
* @package Platinum
*/

get_header(); ?>

<main id="main" class="site-main" role="main">

  <section class="home-hero">
    <?php dynamic_sidebar( 'home-hero' ); ?>

    <div class="home-hours">
      We are open weekdays from 8:00 am to 5:00 pm, closed on weekends
    </div>
  </section><!-- /home-hero -->

  <section class="home-services">
    <div class="wrapper">
      <h1>Repair, Paint, Services</h1>
      <p>SGI accredited auto body shop serving Saskatoon and surrounding areas.</p>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/training.svg">
        <h2>Collision Repair</h2>
        <p>Proactively productize pandemic partnerships before future-proof platforms. Compellingly monetize.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/customizable.svg">
        <h2>Paint and Refinishing</h2>
        <p>Proactively productize pandemic partnerships before future-proof platforms. Compellingly monetize.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/responsive.svg">
        <h2>Paintless Dent Repair</h2>
        <p>Proactively productize pandemic partnerships before future-proof platforms. Compellingly monetize.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/training.svg">
        <h2>Glass Installation</h2>
        <p>Proactively productize pandemic partnerships before future-proof platforms. Compellingly monetize.</p>
      </div>

      <a class="button" href="#0">See a full list of our services</a>
    </div><!-- /wrapper -->
  </section><!-- /home-services -->

  <section class="home-about">
    <div class="wrapper">
      <div class="home-about--content">
        <h1>Proud to be a quality straight time shop</h1>
        <p>We are proud to be a quality straight time shop versus a flat rate shop where technicians take short cuts on jobs to log more hours. Straight time shops provide better quality and save customers unnecessary trips back for warranty repairs.</p>
        <a class="button" href="#0">Find out more about us</a>
      </div>
    </div><!-- /wrapper -->
  </section><!-- /home-about -->

  <section class="home-contact">
    <div class="wrapper">
      <h1>Contact us</h1>
      <ul>
        <li>Store Hours</li>
        <li>Monday: 7am - 5pm</li>
        <li>Tuesday: 7am - 5pm</li>
        <li>Wednesday: 7am - 5pm</li>
        <li>Thursday: 7am - 5pm</li>
        <li>Friday: 7am - 5pm</li>
      </ul>
    </div><!-- /wrapper -->
  </section><!-- /home-contact -->

</main><!-- /main -->
<?php get_footer(); ?>
