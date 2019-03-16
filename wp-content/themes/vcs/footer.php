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
    </div>

     <div class="icons flex-container">
      <a href="<?php the_field("facebook_link", 42) ?>">
        <h3><?php the_field("facebook_link", get_the_ID() ) ?></h3>
      </a>
      <a href="<?php the_field("linkedin_link", 42) ?>">
        <h3><?php the_field("linkedin_link", get_the_ID() ) ?></h3>
      </a>
      <a href="<?php the_field("instagram_link", 42) ?>">
        <h3><?php the_field("instagram_link", get_the_ID() ) ?></h3>
      </a>
      <div class="copyright-container">
        <p><?php the_field('copyright_text', get_the_ID()) ?>
      </div>

</footer>
<?php endwhile;endif; ?>
<?php wp_footer(); ?>
</body>
</html>
