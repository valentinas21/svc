<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <?php wp_head(); ?>
  </head>
  <body>
  <header>
    <div class="container">
      <div class="header-container flex-container">
        <div class="logo">
          <a href="<?php get_site_url() ?>"><img src="<?php the_field('homepage_field', 67); ?>"></a>
        </div>
        <?php

      $menu= wp_nav_menu( array(
          'theme_location'      => 'top-menu',
          'container'           => 'nav ',
          'container_class'     =>'',
          'menu_class'          =>'navigation flex-container hide'
        ));

          ?>
            <button onclick="" id="myBtn" title="go to top"><?php the_field('scroll_button', 209) ?><?php the_field('scroll_icon', 209) ?></button>
          <div class="burger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
        </nav>
      </div>
    </div>
  </header>
