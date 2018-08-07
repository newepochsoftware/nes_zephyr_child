<?php

$vDate = date('mdY');
$vMarker = '1.7.'.$vDate.'.K';
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
 * Submit form fills to Glowfish
 * 
 */
add_action( 'gform_after_submission', 'glowfish_my_lead', 10, 2);
function glowfish_my_lead($entry, $form) {

  /**
   * Set API info
   */
  $gf_email   = 'michael@newepochsoftware.com';
  $gf_apikey  = 'k2jKv_1022838621137371982c5dbb17255febdaa3e1cc';

  /**
   * Set field mapping
   */
  $f_name = rgar($entry, '2');
  $l_name = rgar($entry, '3');
  $email  = rgar($entry, '4');
  $phone  = rgar($entry, '6');

  require_once(__DIR__ . "/Colugo/API.php");
  try {
    $user = new Colugo\API\User($gf_email, $gf_apikey);
    $api = new \Colugo\API\API($user);
    $lead = new \Colugo\API\Lead();

    $lead->setLeadIpAddress($_SERVER["REMOTE_ADDR"]);
    $lead->setLeadSource("NEW EPOCH");
    $lead->setFields([
          "First Name"  => $f_name,
          "Last Name"   => $l_name,
          "Email"       => $email,
          "Work Phone"  => $phone
          ]);

    $api->post($lead);

  } catch (\Exception $e) {
    file_put_contents("php://stderr", "COLUGO MAIL ERROR: ".$e->getMessage()."\n");
    return false;
  }
    return true;
}


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
  $jshtml .= "<!-- Tealium -->";
  $jshtml .= "<script type=\"text/javascript\">\r\n";
  
  $jshtml .= "var utag_data = {\r\n";
  
    $jshtml .= "\"country_code\" : \"us\",\r\n";
    $jshtml .= "\"language_code\" : \"en\",\r\n";

    if($event == 'form-fill' && $_GET['uid']) {
      $entry_id = $_GET['uid'];
      $entry = GFAPI::get_entry( $entry_id );

      if (isset($_GET['debug'])){
        print_r($entry);
      }

      $jshtml .= "\"customer_email\" : \"".$entry["6"]."\",\r\n";
      $jshtml .= "\"customer_first_name\" : \"".$entry["2"]."\",\r\n";
      $lastname = (!$entry["8"]) ? $entry["3"] : $entry["8"];
      $jshtml .= "\"customer_last_name\" : \"".$lastname."\",\r\n";
      $jshtml .= "\"customer_phone\" : \"".$entry["4"]."\",\r\n";
    }

    $jshtml .= "\"page_name\" : \"" .$pgTitle. "\",\r\n";
    $jshtml .= "\"site_section\" : \"" .$pgSlug. "\",\r\n";
    $jshtml .= "\"tealium_event\" : \"".$event."\"\r\n";

  $jshtml .= "}\r\n";

  $jshtml .= "</script>\r\n";

  $jshtml .= "<!-- Loading script asynchronously -->\r\n";
  $jshtml .= "<script type=\"text/javascript\">\r\n";
  $jshtml .= "(function(a,b,c,d){\r
  a='//tags.tiqcdn.com/utag/newepoch/main/prod/utag.js';\r
  b=document;\r
  c='script';\r
  d=b.createElement(c);\r
  d.src=a;\r
  d.type='text/java'+c;\r
  d.async=true;\r
  a=b.getElementsByTagName(c)[0];\r
  a.parentNode.insertBefore(d,a);\r
})();\r\n";
  $jshtml .= "</script>\r\n";
  $jshtml .= "<!-- Tealium -->";

  echo $jshtml;
}
add_action('after_body', 'add_tealium', 999);