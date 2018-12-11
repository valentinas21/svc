 <?php
    /* Template Name: Darbai */
    get_header();
    while(have_posts() ) :
      the_post()

?>
 <?php
   $workQuery = new WP_QUERY( array(
     'post_type'             =>'darbai',
     'post_per_page'         =>20,
     'orderby'               =>'date',
     'order'                 =>'ASC'

   ));
  ?>
 <div class="container">
   <div class="heading-container">
     <h1><?php the_title(); ?></h1>
   </div>
   <ul class="more-images-list-container flex-container">
     <?php if($workQuery  -> have_posts() ) :
             while( $workQuery -> have_posts() ) :
               $workQuery->the_post();
               $image_id = get_field('darbai_images', get_the_ID());
               $image = wp_get_attachment_image_src( $image_id, 'portfolio_small');
               ?>
   <li class="more-image-item"> <!-- Nuotraukos random-->
    <a href="<?= $image[0] ?>" data-lightbox="gallery"><img src="<?="$image[0]"?>" alt=""></a>
   </li>

     <?php endwhile;endif; ?>
  </ul>
   <div class="content-container">
     <?php the_content() ?>
    </div>
</div>
<?php
  get_footer();
 ?>
 <?php
 endwhile;?>
