<?php

$vDate = date('mdY');
$vMarker = '1.7.'.$vDate.'.F';
define('THEME_PATH', get_stylesheet_directory_uri());
define('LV_VERSION', $vMarker);

/**
 * Primary Custom CSS 
 * 
 */
function add_nes2018_css(){
  wp_enqueue_style( 'nes2018-custom', THEME_PATH.'/css/custom.css', array(), LV_VERSION, 'all');

  if(is_page_template( 'templates/home_new.php' )){
    wp_dequeue_style( 'us-responsive' );
    wp_dequeue_style( 'bsf-Defaults' );
  }
}
add_action('wp_enqueue_scripts', 'add_nes2018_css', 999);

/**
 * Primary Animations and JS
 * 
 */
function add_animations(){
  wp_enqueue_script('mobiledetect', THEME_PATH.'/js/mobile-detect.min.js', array(), LV_VERSION, false);
  wp_enqueue_script('animations-js', THEME_PATH.'/js/anims.js', array('jquery'), LV_VERSION, true);
}
add_action('wp_enqueue_scripts', 'add_animations', 999);

/**
 * Tooltips
 * https://atomiks.github.io/tippyjs/
 */
function add_tippyjs() {
  wp_enqueue_script( 'tippy-js', 'https://unpkg.com/tippy.js@2.5.3/dist/tippy.all.min.js', array(), LV_VERSION, true );
}
add_action('wp_enqueue_scripts', 'add_tippyjs', 11);

/**
 * Animate on Scroll
 * https://michalsnik.github.io/aos/
 */
function add_aos() {
  wp_enqueue_style( 'aos-styles', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), LV_VERSION, 'all' );
  wp_enqueue_script( 'aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), LV_VERSION, true );
}
add_action('wp_enqueue_scripts', 'add_aos', 12);

/**
 * Typing Effect
 * https://github.com/mattboldt/typed.js/blob/master/README.md
 */
function add_typing() {
  wp_enqueue_script( 'typed-script', THEME_PATH.'/js/typed.min.js', array(), LV_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'add_typing', 13 );

/**
 * Particles Script
 */
function add_particles() {
  wp_enqueue_script( 'particles-script', THEME_PATH.'/js/particles.min.js', array(), LV_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'add_particles', 14 );

/**
 * Register Extra Menu
 * 
 */
function register_my_menu() {
  register_nav_menu('nes2018-mainmenu',__( 'NES 2018 Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

