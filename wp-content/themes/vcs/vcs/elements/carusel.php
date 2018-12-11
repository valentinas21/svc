<?php
  $query = new WP_Query( array(
    'post_type'         => 'slides',
    'posts_per_page'    => 5,
    'orderby'           =>'date',
    'order'             =>'ASC'

  ) );
 ?>

<section class="double-container" id="TESTIMONIALS">
  <div class="main-container flex-container">
    <div class="last-team-container">
      <img src=" <?php the_field('slides_image', 156); ?> " alt="tea">
    </div>
    <div class="slide-container">
      <div class="slideshow-container">
        <?php if($query->have_posts() ):
            while($query->have_posts() ) :
            $query->the_post();
            ?>



      <div class="mySlides">
        <h4><?php the_field('slides_text', get_the_ID() ) ?></h4>
        <p><?php the_field( 'slides_name', get_the_ID() ) ?></p>
      </div>
      <?php endwhile;endif; ?>

      <!-- <div class="mySlides">
        <h4>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form...”</h4>
        <p>SUSAN SIMS, INTERACTION DESIGNER AT XYZ</p>
      </div>
      <div class="mySlides">
        <h4>“Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean su leo quam...”</h4>
        <p>Thomas A. EDISON, INTERACTION DESIGNER AT XYZ</p>
      </div>
      <div class="mySlides">
        <h4>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form....”</h4>
        <p>SUSAN SIMS, INTERACTION DESIGNER AT XYZ</p>
      </div>
      <div class="mySlides">
        <h4>“Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean su leo quam...”</h4>
        <p>THOMAS A. EDISON, INTERACTION DESIGNER AT XYZ</p>
      </div> -->
      <div class="dot-container">

        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
      </div>
    </div>
</section>
