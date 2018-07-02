<?php
$query = new WP_Query( array(
  'post_type'         => 'about',
  'posts_per_page'    => 3,
  'orderby'           =>'date',
  'order'             =>'ASC'
  ) );

 ?>
<section class="about-container">
  <div class="about-container">
    <div class="main-container">
      <h1><?php the_field('skill_section', 42) ?></h1>
    </div>
    <nav>
      <ul class="about-us-container flex-container">
        <?php if($query->have_posts() ):
                while($query->have_posts() ) :
                  $query->the_post();
                  ?>
                  <li><?php the_field('about_us_image', get_the_ID() ) ?>
                      <h4><strong><?php the_field('about_us_name', get_the_ID() ) ?></strong></h4>
                      <p><?php the_field('about_us_description', get_the_ID() ) ?></p>
                  </li>
                <?php endwhile;endif; ?>

      </ul>
    </nav>
  </div>
</section>
