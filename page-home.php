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

    <div id="hero-gallery" class="gallery js-flickity" >
      <div class="gallery-cell"><img src="http://localhost/platinum/wp-content/uploads/2015/02/ppb-front.jpg"></div>
      <div class="gallery-cell"><img src="http://localhost/platinum/wp-content/uploads/2015/02/home-top.jpg"></div>
    </div>

  </section><!-- /home-hero -->


  <section class="home-services">
    <div class="wrapper">
      <h1>Repairs and services<div class="bar">&nbsp;</div></h1>
      <p>An SGI accredited auto body shop with the expertise to serve your needs.</p>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/paint.png" alt="Painting and refinishing">
        <h2>Painting and refinishing</h2>
        <p>Our Standox-trained, Mercedes Certified Painters use computerized colour matching.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/vehicle.png" alt="Collision and dent repair">
        <h2>Collision and dent repair</h2>
        <p>We have experts in frame straightening, and panel repair and replacement.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/tools.png" alt="Mechanical">
        <h2>Mechanical</h2>
        <p>Platinum Paint and Body has five dedicated mechanical technicians with access to seven hoists.</p>
      </div>

      <div class="card">
        <img src="/platinum/wp-content/themes/platinum/src/img/carwash.png" alt="Glass installation">
        <h2>Glass installation</h2>
        <p>Whether fixing up a stone bruise while you wait, or replacing a windshield or side glass.</p>
      </div>

      <a class="button" href="#0">See a full list of our services</a>
    </div><!-- /wrapper -->
  </section><!-- /home-services -->

  <section class="home-about">
    <div class="wrapper">
      <div class="home-about--content">
        <h1>Serving Saskatoon and area since 1996<div class="bar">&nbsp;</div></h1>
        <p>Owned by Alan and Cindy Manderschied since 1996, Platinum Paint and Body is proud to be a

straight-time shop -- all of our staff are paid for they hours they work, no matter what.</p>
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
