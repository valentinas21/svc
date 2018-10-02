<!-- <?php
$servicesQuery = new WP_Query( array(
  'post_type'         => 'pjovimas',
  'posts_per_page'    => 3,
  'orderby'           =>'date',
  'order'             =>'ASC'
  ) );
 ?>
 <section class="cut">
   <div class="container">
     <div class="cut-container flex-container">
       <?php
          if ($servicesQuery->have_posts() ) :
            while ($servicesQuery->have_posts() ) :
              $servicesQuery->the_post();
              $image_id = get_field('pjovimas_image', get_the_ID() );
              $image_url = wp_get_attachment_image_src($image_id,'other_image');
        ?>
        <div class="cut-name">
          <h3><?php the_field('pjovimas_name') ?></h3>
        </div>
        <p><?php the_field('pjovimas_description') ?></p>
        <div class="cut-image">
          <img src="<?= $image_url[0] ?>" alt="") ?>
        </div>
        <footer>
          <a href="<?php the_permalink($post); ?> " class="button special"><?= __('more') ?></a>
        </footer>
      <?php endwhile;endif; ?>
     </div>
   </div>
 </section> -->
