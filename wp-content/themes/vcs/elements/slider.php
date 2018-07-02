<?php
  $sliderQuery = new WP_QUERY( array(
    'post_type'             =>'slider',
    'post_per_page'         =>-1,
    'orderby'               =>'date',
    'order'                 =>'DESC'

  ));
 ?>
<div id="karusele" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators ">
    <li data-target="#karusele" data-slide-to="0" class="active"></li>
    <li data-target="#karusele" data-slide-to="1"></li>
    <li data-target="#karusele" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <?php if($sliderQuery  -> have_posts() ) :
            while( $sliderQuery -> have_posts() ) :
              $sliderQuery->the_post();
              $image_id = get_field('slider_image', get_the_ID());
              $image = wp_get_attachment_image_src( $image_id, 'banner_image');

              ?>

    <div class="carousel-item <?= $sliderQuery->current_post === 0 ? 'active': ''; ?>">
      <img src="<?="$image[0]" ?>" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php the_field('images_info', get_the_ID()) ?></h5>
        <p><?php the_field('images_secont_info', get_the_ID()) ?></p>
      </div>
    </div>
  <?php endwhile;endif; ?>
</div>
  <a class="carousel-control-prev" href="#karusele" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#karusele" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
