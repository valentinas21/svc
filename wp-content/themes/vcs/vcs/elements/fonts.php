<?php
  $query = new WP_Query( array(
    'post_type'         => 'fonts',
    'posts_per_page'    => 6,
    'orderby'           =>'date',
    'order'             =>'ASC'

  ) );
 ?>

<section class="font-section " id="FEATURES">
  <div class="font-container">
    <nav>
    <ul class="font-background flex-container">
      <?php if($query->have_posts() ):
              while($query->have_posts() ) :
                $query->the_post();
                ?>
                <li><?php the_field('fonts_image', get_the_ID() ) ?>
                    <h3><strong><?php the_field('fonts_name', get_the_ID() ) ?></strong></h3>
                    <p><?php the_field('font_description', get_the_ID() ) ?></p>
                </li>
              <?php endwhile;endif; ?>
    </ul>
    </nav>
  </div>
</section>
