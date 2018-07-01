<?php
/* Custom functions code goes here. */

$vDate = date('mdY');
$vMarker = '1.0.'.$vDate.'.A';
define('THEME_PATH', get_stylesheet_directory_uri());
define('LV_VERSION', $vMarker);

function add_nes2018_css(){
  wp_enqueue_style( 'nes2018-custom', THEME_PATH.'/css/custom.css', array(), LV_VERSION, 'all');

  wp_dequeue_style( 'us-responsive' );
  wp_dequeue_style( 'bsf-Defaults' );
}
add_action( 'wp_enqueue_scripts', 'add_nes2018_css', 999);

function add_css_doodle() {
  wp_enqueue_script( 'nes2018-css-doodle', 'https://cdnjs.cloudflare.com/ajax/libs/css-doodle/0.3.2/css-doodle.min.js', array() );
}
add_action( 'wp_enqueue_scripts', 'add_css_doodle' );

function add_animations(){
  wp_enqueue_script('animations-js', THEME_PATH.'/js/anims.js', array('jquery'), LV_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'add_animations' );