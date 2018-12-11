
<?php
  $query = new WP_Query( array(
    'post_type'         => 'images',
    'posts_per_page'    => 8,
    'orderby'           =>'date',
    'order'             =>'ASC'

  ) );
 ?>

 <section class="images-section"id="WORKS">
   <div class="main-container">
     <ul class="images flex-container">
       <?php if($query->have_posts() ):
           while($query->have_posts() ) :
           $query->the_post();
           $image_id = get_field('images_list', get_the_ID() );
           $image_url = wp_get_attachment_image_src($image_id,'portfolio_size');
           ?>

           <li class="click-container">
             <div class="background-container">
               <div class="images-container">
                 <div class="fade"></div>
                   <img src="<?= $image_url[0] ?>" alt="person1") ?>
                     <div class="text-container flex-container">
                       <h4><?php the_field('images_text', get_the_ID() ) ?></h4>
                       <p><?php the_field('images_description', get_the_ID() )?></p>
                      </div>
                    </div>
                  </div>
                 </li>
                 <?php endwhile;endif; ?>
     </ul>

  </div>
</section>
