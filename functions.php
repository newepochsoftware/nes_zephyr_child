<?php

$vDate = date('mdY');
$vMarker = '1.7.'.$vDate.'.C';
define('THEME_PATH', get_stylesheet_directory_uri());
define('LV_VERSION', $vMarker);

function add_nes2018_css(){
  wp_enqueue_style( 'nes2018-custom', THEME_PATH.'/css/custom.css', array(), LV_VERSION, 'all');

  if(is_page_template( 'templates/home_new.php' )){
    wp_dequeue_style( 'us-responsive' );
    wp_dequeue_style( 'bsf-Defaults' );
  }
}
add_action( 'wp_enqueue_scripts', 'add_nes2018_css', 999);

function add_tippyjs() {
  wp_enqueue_script( 'tippy-js', 'https://unpkg.com/tippy.js@2.5.3/dist/tippy.all.min.js', array(), LV_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'add_tippyjs' );

function add_animations(){
  wp_enqueue_script('animations-js', THEME_PATH.'/js/anims.js', array('jquery'), LV_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'add_animations' );