<?php

$vDate = date('mdY');
$vMarker = '1.7.'.$vDate.'.H';
define('THEME_PATH', get_stylesheet_directory_uri());
define('LV_VERSION', $vMarker);

/**
 * Primary Custom CSS (including icon font)
 * Icon font generated at https://glyphter.com/
 */
function add_nes2018_css(){
  wp_enqueue_style( 'nes2018-custom', THEME_PATH.'/css/custom.css', array(), LV_VERSION, 'all');
  wp_enqueue_style( 'nes2018-icons', THEME_PATH.'/css/NESIcons.css', array(), LV_VERSION, 'all');

  if(is_page_template( 'templates/home_new.php' )){
    wp_dequeue_style( 'us-responsive' );
    wp_dequeue_style( 'bsf-Defaults' );
  }
}
add_action('wp_enqueue_scripts', 'add_nes2018_css', 999);

/**
 * Hamburger menu CSS animations
 * https://jonsuh.com/hamburgers/
 */
function add_neatburgers() {
  wp_enqueue_style( 'neatburgers', THEME_PATH.'/css/hamburgers.min.css', array(), LV_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'add_neatburgers');

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
 * jQuery Transit
 * http://ricostacruz.com/jquery.transit/
 */
function add_transit() {
  wp_enqueue_script( 'transit-scripts', THEME_PATH.'/js/jquery.transit.min.js', array(), LV_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'add_transit', 10);

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
 * https://vincentgarreau.com/particles.js/
 */
function add_particles() {
  wp_enqueue_script( 'particles-script', THEME_PATH.'/js/particles.min.js', array(), LV_VERSION, true );
  
  $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
  wp_localize_script( 'particles-script', 'object_name', $translation_array );
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

/**
 * Add Tealium
 * (supports dynamic data layer mapping for confirmation pages)
 * 
 */
function add_tealium() {
  
  $pgID = get_the_ID();
  $pgTitle = get_the_title( $pgID );
  $pgURL = get_permalink( $pgID );
  $pgSlug = get_post_field( 'post_name', $pgID );

  $event = ($pgSlug == 'thank-you') ? 'form-fill' : $pgSlug.'_view';

  $jshtml = "";
  $jshtml .= "<!-- NEW Tealium -->";
  $jshtml .= "<script type=\"text/javascript\">";
  
  $jshtml .= "var utag_data = {";
  
    $jshtml .= '"country_code" : "us",';
    $jshtml .= '"language_code" : "en",';

    if($event == 'form-fill' && $_GET['uid']) {

      $entry_id = $_GET['uid'];
      $entry = GFAPI::get_entry( $entry_id );
      $jshtml .= '"customer_email" : "'.$entry["6"].'",
                  "customer_first_name" : "'.$entry["2"].'",
                  "customer_last_name" : "'.$entry["8"].'",
                  "customer_phone" : "'.$entry["4"].'",';
    }

    $jshtml .= '"page_name" : "' .$pgTitle. '",';
    $jshtml .= '"site_section" : "' .$pgSlug. '",';
    $jshtml .= '"tealium_event" : "'.$event.'"';

  $jshtml .= "}";

  $jshtml .= "</script>";

  $jshtml .= "<!-- Loading script asynchronously -->";
  $jshtml .= "<script type=\"text/javascript\">";
  $jshtml .= "(function(a,b,c,d){a='//tags.tiqcdn.com/utag/epochsoftware/main/prod/utag.js';
              b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;
              a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
              })();";
  $jshtml .= "</script>";
  $jshtml .= "<!-- NEW Tealium -->";

  echo $jshtml;
}
add_action('after_body', 'add_tealium', 999);

/*
var utag_data = {
	"customer_email": "",
	"customer_first_name": "",
  "customer_last_name": "",
	"customer_phone": "",
	"tealium_event": "" // Content type home-view or section-view or form-fill
  };
  */