<?php
  get_header();
  if(have_posts() ) :
    while(have_posts() ) :
      the_post();
    endwhile;
  endif;
  get_footer();
 ?>
 <div class="container">
   <div class="heading-container">
     <h1><?php the_title(); ?></h1>
   </div>
   <div class="image">
     <?php the_post_thumbnail('banner_image', array(
       'style'        =>'max=width:25%'
     )) ?>
   </div>
   <div class="content-container">
     <p><?php the_field('services_long') ?></p>
   </div>
</div>
