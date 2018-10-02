<?php
  $workQuery = new WP_QUERY( array(
    'post_type'             =>'darbai',
    'post_per_page'         =>4,
    'orderby'               =>'date',
    'order'                 =>'DESC'

  ));
 ?>
<section class="work-container">
  <div class="main-container">
    <h1><?php the_field("darbai_field", 42) ?></h1>
  </div>
  <div class="container">
    <ul class="images-list-container flex-container">
      <?php if($workQuery  -> have_posts() ) :
              while( $workQuery -> have_posts() ) :
                $workQuery->the_post();
                $image_id = get_field('darbai_images', get_the_ID());
                $image = wp_get_attachment_image_src( $image_id, 'other_image');

                ?>
    <li class="image-item">
      <img src="<?="$image[0]"?>" alt="">
    </li>
      <?php endwhile;endif; ?>
  </ul>
  <div class="darbai-button">
    <a href="<?php the_permalink(189); ?>" class="button special"><?=__('Daugiau darbų') ?></a>
  </div>
  </div>
</section>
