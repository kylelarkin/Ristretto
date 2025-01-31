<?php
/**
 * Include all partial php/helper files
 */
foreach (glob(dirname(__FILE__) . '/lib/' . '*.php') as $filename) {
  require( $filename );
}

/**
 * Enqueue Scripts and Styles
 */
function ristretto_enqueue_init() {
  $theme   = wp_get_theme();
  $theme_version = $theme->get( 'Version' );
  // Register Scripts
  wp_register_script( 'aos', get_bloginfo( 'stylesheet_directory' ) . '/node_modules/aos/dist/aos.js', null, null, true );
  wp_register_script( 'jarallax', get_bloginfo( 'stylesheet_directory' ) . '/node_modules/jarallax/dist/jarallax.min.js', array('jquery'), null, true );
  wp_register_script( 'fontawesome', '//kit.fontawesome.com/ce9172c803.js', null, null, true );
  wp_register_script( 'lity', get_bloginfo( 'stylesheet_directory' ) . '/node_modules/lity/dist/lity.min.js', array('jquery'), null, true );
  wp_register_script( 'tiny-slider', get_bloginfo( 'stylesheet_directory' ) . '/node_modules/tiny-slider/dist/min/tiny-slider.js', null, null, true );
  wp_register_script( 'ristretto-app', get_bloginfo( 'stylesheet_directory' ) . '/js/dist/app-min.js', array('jquery'), $theme_version, true );
  
  // Enqueue Scripts
  wp_enqueue_script('aos');
  wp_enqueue_script('jarallax');
  wp_enqueue_script('fontawesome');
  // wp_enqueue_script('lity');
  // wp_enqueue_script('tiny-slider');
  wp_enqueue_script('ristretto-app');

  // Register Styles
  wp_register_style( 'aos-styles', get_bloginfo( 'stylesheet_directory' ) . '/node_modules/aos/dist/aos.css', array(), null, 'all' );
  wp_register_style( 'typekit', '//use.typekit.net/vbl0nii.css', array(), null, 'all' );
  wp_register_style( 'lity-css', get_bloginfo( 'stylesheet_directory' ) . '/node_modules/lity/dist/lity.min.css', array(), null, 'all' );
  wp_register_style( 'tiny-slider-css', get_bloginfo( 'stylesheet_directory' ) . '/node_modules/tiny-slider/dist/tiny-slider.css', array(), null, 'all' );
  wp_register_style( 'ristretto-screen', get_bloginfo( 'stylesheet_directory' ) . '/css/screen.css', array(), $theme_version, 'all' );
  
  // Enqueue Styles
  wp_enqueue_style('aos-styles');
  wp_enqueue_style('typekit');
  //wp_enqueue_style('lity-css');
  //wp_enqueue_style('tiny-slider-css');
  wp_enqueue_style('ristretto-screen');
 }
add_action('wp_enqueue_scripts', 'ristretto_enqueue_init', 15);