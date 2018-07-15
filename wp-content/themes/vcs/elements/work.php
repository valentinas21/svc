<?php
  $categories = get_categories( array(
    'post_type'               => 'portfolio',
    'hide_empty'              => false
  ) );
  $portfolioQuery = new WP_Query( array(
    'post_type'             => 'portfolio',
    'posts_per_page'        => 8,
    'orderby'               => 'date',
    'order'                 => 'DESC'
  ) );
?>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Portfolio</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <!-- ciklas skirtas spausdinti filtro mygtukams  -->
            <?php foreach( $categories as $category ):
                    if( $category->slug !== 'uncategorized' ):
                    ?>
                    <li><a
                        href="#"
                        data-filter="<?=$category->slug === 'all' ? '*' : '.' . $category->slug; ?>"
                        class="<?=$category->slug === 'all' ? 'active' : ''; ?>"><?=$category->name?></a><!-- shothand if -->
                    </li>
                    <?php endif;endforeach; ?>
                  </ol>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="row">
              <div class="portfolio-items">
                <?php while( $portfolioQuery->have_posts() ):
                        $portfolioQuery->the_post();
                        //get current post categories
                        $post_categories = get_the_category( get_the_ID() );
                        //empty string for adding classes
                        $classes_string = '';
                        $name_string = '';

                        //add all slug names to variable
                        foreach($post_categories as $category) {
                          if( $category->slug !== 'all' ) {
                            $classes_string .= ' ' . $category->slug;
                            $name_string .= $category->name . ', ';
                          }
                        }

                        ?>
                        <div class="col-sm-6 col-md-3 col-lg-3 <?=$classes_string?>">
                          <div class="portfolio-item">
                            <div class="hover-bg">
                              <a
                              href="<?php the_post_thumbnail_url('portfolio_large') ?>"
                              title="Project description"
                              rel="prettyPhoto">
                                <div class="hover-text">
                                  <h4><?php the_title() ?></h4>
                                  <small><?=$name_string?></small>
                                </div>
                                <img
                                src="<?php the_post_thumbnail_url('portfolio_small') ?>"
                                class="img-responsive"
                                alt="<?php the_title() ?>">
                              </a>
                            </div>
                          </div>
                        </div>
                      <?php endwhile; ?>
                    </div>
                  </div>
                </div>
              </div>
