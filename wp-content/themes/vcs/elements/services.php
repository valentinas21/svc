<?php
$query = new WP_Query( array(
  'post_type'         => 'services',
  'posts_per_page'    => 3,
  'orderby'           =>'date',
  'order'             =>'ASC'
  ) );

 ?>
 <section class="works-container">
   <div class="main-container">
     <h1><?php the_field('services_field',42) ?></h1>
   </div>
   <nav>
     <ul class="works-list-container flex-container">
       <?php if($query->have_posts() ):
               while($query->have_posts() ) :
                 $query->the_post();
                 $image_id = get_field('services_image', get_the_ID() );
                 $image_url = wp_get_attachment_image_src($image_id,'other_image');
                 ?>
                 <li class="works-services-container">
                   <div class="background-container">
                     <div class="images-container">
                       <img src="<?= $image_url[0] ?>" alt="") ?>
                          <div class="text-container flex-container">
                            <h4><?php the_field('works_text', get_the_ID() ) ?></h4>
                            <p><?php the_field('works_description', get_the_ID() )?></p>
                          </div>
                        </div>
                      </div>
                     </li>
                     <?php endwhile;endif; ?>
     </ul>
   </nav>
 </section>
