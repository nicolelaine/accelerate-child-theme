<?php
/*
Template Name: Custom About Page
*/
get_header(); 
?>

<div id="primary" class="about-page">

  <!-- HERO SECTION -->
  <section class="about-hero">
  <div class="hero-overlay">
    <h3 class="tagline">
      Accelerate is a strategy and marketing agency located in the heart of NYC. 
      Our goal is to build businesses by making our clients visible and making their customers smile.
    </h3>
  </div>
</section>


  <!-- SERVICES SECTION -->
<section class="about-services">
  <div class="container">
    <h2 class="section-title">Our Services</h2>
    <p class="section-subtitle">
      We take pride in our clients and the content we create for them.<br> 
      Here’s a brief overview of our offered services.
    </p>

    <!-- Service 1 -->
<div class="service-row">
  <div class="icon">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/bullseye.png" alt="Content Strategy" />
  </div>
  <div class="text">
    <h3>Content Strategy</h3>
    <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs.</p>
  </div>
</div>


    <!-- Service 2 -->
    <div class="service-row reverse">
      <div class="icon">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/atom.png" alt="Content Strategy" />
      </div>
       <div class="text">
        <h3>Influencer Mapping</h3>
        <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground round t-bone swine shoulder, cow bacon sausage turkey meatloaf.</p>
      </div>
    </div>

    <!-- Service 3 -->
    <div class="service-row">
      <div class="icon">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/like.png" alt="Content Strategy" />
    </div>
      <div class="text">
        <h3>Social Media Strategy</h3>
        <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs.</p>
      </div>
    </div>

    <!-- Service 4 -->
    <div class="service-row reverse">
      <div class="icon">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/services/design.png" alt="Content Strategy" />
    </div>
      <div class="text">
        <h3>Design and Development</h3>
        <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs.</p>
      </div>
    </div>
  </div>
</section>



  <!-- CTA SECTION -->
<section class="about-cta">
  <div class="container">
    <div class="cta-inner">
      <h2>Interested in working with us?</h2>
      <a href="/contact" class="btn">Contact Us</a>
    </div>
  </div>
</section>


</div><!-- #primary -->

<?php get_footer(); ?>
