<section class="slider-section">
  <div class="slider-background flex-container" style="background-image: url('<?= get_template_directory_uri() . '/Images/pagr.jpg'?>')">
  <div class="abs"></div>
    <div class="description-container">
      <h1><?php the_field('site_heading',67 ) ?></br></h1>
      <p><?php the_field('site_tagline', 67) ?></p>
      <div class="first-button-container">
        <a href="<?php the_field('banner_link', 197) ?>"><?php the_field('site_button_text', 67) ?></a>
    </div>
    </div>
  </div>
</section>
