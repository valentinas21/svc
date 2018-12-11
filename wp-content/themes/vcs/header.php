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
              <a href="http://localhost/svc/"><img src="<?php the_field('logo_field', 42); ?> "></a>
            </div>
            <?php
            /* linkas kolkas
             vidiniam hoste*/
      $menu= wp_nav_menu( array(
          'theme_location'      => 'top-menu',
          'container'           => 'nav ',
          'container_class'     =>'',
          'menu_class'          =>'navigation hide'
        ));
        ?>
        <button onclick="" id="myBtn" title="Į viršų"><?php the_field('scroll_link', 42) ?></button>
      <div class="burger">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
      </div>
    </div>
  </header>
