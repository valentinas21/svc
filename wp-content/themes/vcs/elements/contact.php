<section id="kontaktai">
  <div class="contact">
    <div class="main-container">
      <h1><?php the_field("contact_title", 42); ?></h1>
    </div>
  </div>
    <?php

      $location = get_field('location', 42);
      if( !empty($location) ):
      ?>
      <div class="acf-map">
      	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
      </div>

<?php endif; ?>

</section>
