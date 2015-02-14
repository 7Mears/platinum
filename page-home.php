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
      <h1>Repairs and services</h1>
      <p>An SGI accredited auto body shop with the expertise to serve your needs.</p>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/paint.png" alt="Painting and refinishing">
        <h2>Painting and refinishing</h2>
        <p>Our Standox-trained, Mercedes Certified Painters use computerized colour matching and our state-of-
the-art, dust-free downdraft paint booths to ensure the best paint job possible, every time.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/vehicle.png" alt="Collision and dent repair">
        <h2>Collision and dent repair</h2>
        <p>We have experts in frame straightening, and panel repair and replacement, and our paintless dent repair technician can make hail and parking lot damage disappear without painting.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/tools.png" alt="Mechanical">
        <h2>Mechanical</h2>
        <p>Platinum Paint and Body has five dedicated mechanical technicians with access to seven hoists. We can do any repairs, from brakes to wheel alignment, and custom exhausts to air conditioning repairs and recharging.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/carwash.png" alt="Glass installation">
        <h2>Glass installation</h2>
        <p>Whether fixing up a stone bruise while you wait, or replacing a windshield or side glass on any make or model, our dedicated glass replacement specialists will ensure the job gets done right -- insured or not.</p>
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

  <?php if ( is_active_sidebar( 'home-contact' ) ) : ?>
  <section class="home-contact">
    <div class="wrapper">
      <?php dynamic_sidebar( 'home-contact' ); ?>
    </div><!-- /wrapper -->
  </section><!-- /home-contact -->
  <?php endif; ?>


</main><!-- /main -->
<?php get_footer(); ?>
