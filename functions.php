<?php
/* Custom functions code goes here. */

$vDate = date('mdY');
$vMarker = '1.0.'.$vDate.'.A';
define('LV_VERSION', $vMarker);

function add_nes2018_css(){
  wp_enqueue_style( 'nes2018-custom', get_stylesheet_directory_uri().'/css/custom.css', array(), LV_VERSION, 'all');

  wp_dequeue_style( 'us-responsive' );
  wp_dequeue_style( 'bsf-Defaults' );
}
add_action( 'wp_enqueue_scripts', 'add_nes2018_css', 999);