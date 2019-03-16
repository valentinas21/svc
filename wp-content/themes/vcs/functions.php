<?php
define('ASSETS_URL', get_template_directory_uri() . '/assets/');
add_action ('wp_enqueue_scripts', 'vcs_theme_style');

function vcs_theme_style() {
  wp_register_style('main_site_styles', ASSETS_URL . 'css/main.css', array(), false, 'all');
  wp_register_script('font_awesome', 'https://use.fontawesome.com/releases/v5.0.9/js/all.js', array(), false, true);
  wp_register_style('lightbox_style', ASSETS_URL . 'css/lightbox.min.css', array(), false, 'all');
  wp_enqueue_style('lightbox_style');
  wp_enqueue_script('font_awesome');
  wp_enqueue_style('main_site_styles');

  wp_register_style('bootstrap_css', ASSETS_URL . '/bootstrap/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap_css');

  wp_register_script('main_js', ASSETS_URL . 'js/main.js', array('jquery'), false, true);
  wp_enqueue_script('main_js');
  wp_register_script('lightbox_js', ASSETS_URL . 'js/lightbox-plus-jquery.min.js', array('jquery'), false, true);
  wp_enqueue_script('lightbox_js');
  wp_register_script('google_map_api','https://maps.googleapis.com/maps/api/js?key=AIzaSyDGavnthkHuqLe8AWSY8IrRL4uWFHgmyQw ', array(), false, true);
  wp_enqueue_script('google_map_api');
  wp_register_script('maps',ASSETS_URL . 'js/maps.js', array('google_map_api'), false, true);
  wp_enqueue_script('maps');

  wp_register_script('bootstrap_js', ASSETS_URL . '/bootstrap/js/bootstrap.min.js', array('jquery'), false, true);
  wp_enqueue_script('bootstrap_js');
}


add_action('init', 'vcs_adding_theme_supports');
function vcs_adding_theme_supports() {
  add_theme_support('menus');
  add_theme_support('post-thumbnails');

}
add_action('init', 'vcs_registering_menus');
function vcs_registering_menus () {
  // register_nav_menus(arrar(
  //     'primary-navigation' => __('Primary Navigation')
  //   ));
    register_nav_menus( array(
      'top-menu'              => __('viršutinis meniu'),
      'footer-menu'           =>__('apatinis meniu'),
    ) );

}
add_action('init', 'vcs_image_sizes');
function vcs_image_sizes() {
  add_image_size('banner_image', 1920, 900, true);
}
add_action('init', 'vcs_works_image_sizes');
function vcs_works_image_sizes() {
  add_image_size('other_image', 300, 200, true);
}
add_action('init', 'vcs_portfolio_image_sizes');
function vcs_portfolio_image_sizes() {
  add_image_size('portfolio_small', 200, 200, true);
}
add_action('init', 'vcs_portfolio_small_image_sizes');
function vcs_portfolio_small_image_sizes() {
  add_image_size('portfolio_large', 300, 250, true);
}
function my_acf_google_map_api( $api ){

	$api['key'] = ' AIzaSyDGavnthkHuqLe8AWSY8IrRL4uWFHgmyQw ';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
