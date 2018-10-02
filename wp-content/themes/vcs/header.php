<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="mobile-container">
      <h3><?php the_field('number_field', 42) ?></h3>
    </div>
  <header>
    <div class="container">
        <div class="header-logo-container flex-container">
            <div class="logo">
              <a href="<?php get_site_url() ?>"><img src="<?php the_field('logo_field', 42); ?> "></a>
            </div>
            <?php

      $menu= wp_nav_menu( array(
          'theme_location'      => 'top-menu',
          'container'           => 'nav ',
          'container_class'     =>'',
          'menu_class'          =>'navigation hide'
        ));
        ?>
      </div>
    </div>
  </header>
