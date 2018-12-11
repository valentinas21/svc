<?php
  $query = new WP_Query( array(
    'post_type'         => 'downloads',
    'posts_per_page'    => 1,
    'orderby'           =>'date',
    'order'             =>'ASC'

  ) );
 ?>

<section class="download-section" id="DOWNLOAD">
  <div class="container">
    <div class="download-contaienr ">
      <?php if($query->have_posts() ):
          while($query->have_posts() ) :
          $query->the_post();
          ?>
      <div class="download-text">
        <h2><?php the_field('down_description', get_the_ID() ) ?></h2>
        <h6><?php the_field('down_text', get_the_ID() ) ?></h6>
      </div>
      <div class="download-button">
        <a href="<?php the_field('down_link',193) ?>"><?php the_field('down_button', get_the_ID() ) ?></a>
      </div>
    </div>
    <?php endwhile;endif; ?>
  </div>
</section>
