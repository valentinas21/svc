<?php
define('ASSETS_URL', get_template_directory_uri() . '/assets/');
add_action ('wp_enqueue_scripts', 'vcs_theme_style');

function vcs_theme_style() {
  wp_register_style('main_site_styles', ASSETS_URL . '/css/main.css', array(), false, 'all');
  wp_register_script('font_awesome', 'https://use.fontawesome.com/releases/v5.0.9/js/all.js', array(), false, true);

  wp_enqueue_style('main_site_styles');
  wp_enqueue_script('font_awesome');

  wp_register_script('main_js', ASSETS_URL . '/js/main.js', array('jquery'), false, true);
  wp_enqueue_script('main_js');
  wp_register_script('google_map_api','https://maps.googleapis.com/maps/api/js?key=AIzaSyB9spHYeyF9cx8MSTc5Cq1esnSo_4pOk0I', array(), false, true);
  wp_enqueue_script('google_map_api');
  wp_register_script('maps',ASSETS_URL . 'js/maps.js', array('google_map_api'), false, true);
  wp_enqueue_script('maps');
}

add_action('init', 'vcs_adding_theme_supports');
function vcs_adding_theme_supports() {
  add_theme_support('menus');

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
add_action('after_theme_setup', 'vcs_adding_images_size');
function vcs_adding_images_size () {
  add_images_size( 'portfolio_size', 350, 250, true );
}
function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyB9spHYeyF9cx8MSTc5Cq1esnSo_4pOk0I';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
