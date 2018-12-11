<?php
  $query = new WP_Query( array(
    'post_type'         => 'teams',
    'posts_per_page'    => 4,
    'orderby'           =>'date',
    'order'             =>'ASC'

  ) );
 ?>

<section class="team-section" id="OUR_TEAM">
  <div class="container">
    <div class="information">
      <ul class="team-container flex-container">
        <?php if($query->have_posts() ):
            while($query->have_posts() ) :
            $query->the_post();
            $image_id = get_field('team_image', get_the_ID() );
            $image_url = wp_get_attachment_image_src($image_id,'full');
            ?>
        <li class="team-images-container">
          <img src="<?=$image_url[0] ?>" alt="Ruth">
        <div class="name-container">
          <h3><?php the_field('team_name', get_the_ID() ) ?></h3>
        </div>
        <div class="job-container">
          <h6><?php the_field('team_job', get_the_ID() ) ?></h6>
        </div>
        <div class="about-team-container">
          <p><?php the_field('team_about', get_the_ID() ) ?></p>
        </div>
        <div class="button-container">
          <a href="<?php the_field('facebook_link', 178) ?>">
            <?php the_field( 'facebook_button', 174 ) ?>
          </a>
          <a href="<?php the_field('twitter_link', 178) ?>" >
            <?php the_field( 'twitter_button', 174 ) ?>
          </a>
          <a href="<?php the_field('linkedin_link', 178) ?>" >
            <?php the_field( 'linkedin_button', 174 ) ?>
          </a>
          </div>
        </li>
        <?php endwhile;endif; ?>
      </ul>
    </div>
  </div>
</section>
