<section class="contact" id="kontaktai">
    <div class="main-container">
      <h1><?php the_field("contact_title", 42); ?></h1>
    </div>


    <?php

      $location = get_field('location', 42);

      if( !empty($location) ):
      ?>
      <div class="acf-map">
      	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
      </div>
      <div class="contact-form">
        <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
        <div class="adress-container">
          <p><?php the_field("adress_name", 42) ?></p>
          <p><?php the_field("mobile_phone", 42) ?></p>
        </div>
      </div>
<?php endif; ?>

</section>
