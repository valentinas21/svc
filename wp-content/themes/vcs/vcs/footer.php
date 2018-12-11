
<?php
  $query = new WP_Query( array(
    'post_type'         => 'footers',
    'posts_per_page'    => 3,
    'orderby'           =>'date',
    'order'             =>'ASC'

  ) );
 ?>

<footer>
    <div class="footer-container flex-container">
      <?php if($query->have_posts() ):
          while($query->have_posts() ) :
          $query->the_post();
          ?>
      <div class="location">
        <h3><?php the_field('footer_name_one', get_the_ID() ) ?></h3>
        <P><a href="<?php the_field('footers_link',188) ?>"><?php the_field('footer_description_one', get_the_ID() ) ?></P></a>
      </div>
      <div class="share-container">
        <h3><?php the_field('footer_name_two', get_the_ID() ) ?></h3>
        <a href="<?php the_field('facebook_link', 178) ?>">
          <?php the_field( 'facebook_button', 167 ) ?>
        </a>
        <a href="<?php the_field('twitter_link', 178) ?>" >
          <?php the_field( 'twitter_button', 167 ) ?>
        </a>
        <a href="<?php the_field('linkedin_link', 178) ?>" >
          <?php the_field( 'linkedin_button', 167 ) ?>
        </a>
        </div>
        <div class="about-container">
          <h3><?php the_field('footer_name_three', get_the_ID() ) ?></h3>
          <p><?php the_field('footer_description_three', get_the_ID() ) ?></p>
        </div>
    </div>
    <?php endwhile;endif; ?>
    <div class="copyright-container">
      <p><?php the_field('copyright_text', get_the_ID()) ?>
      <p><?php the_field('copyright_text_second', get_the_ID() ) ?> <i class="fas fa-heart"></i><a href="https://www.google.lt"><span> <?php the_field('copyright_text_name', get_the_ID()) ?></span></a> </p>
    </div>


</footer>

<?php wp_footer(); ?>
</body>
</html>
