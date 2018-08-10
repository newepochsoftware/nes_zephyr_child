<?php
/**
 * Template: NES Marquee (Global Site Component)
 * (Use with child-theme header template)
 * 
 */

$themePath = get_stylesheet_directory_uri();
?>

<div class="nes_marquee">

  <div class="angle_10">
    <span class="shape_1"></span>
    <span class="shape_1 pos_2"></span>
  </div>

  <div class="nes_menu">

    <div class="grid-container">
      
      <div class="grid-x logo-grid navbar" id="navbar">
        <div class="nav_background" id="nav_background"></div>
        <div class="cell small-9 medium-4 large-4">
          <div class="logo"><a href="/" class="homelink"></a></div>
        </div>
        <div class="cell small-3 medium-8 large-8 menublock">
          <button id="toggle-platform-menu" class="hamburger hamburger--boring hide-for-large" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
          <!-- Show for all except mobile -->
          <?php get_template_part('parts/home', 'broadnav'); ?>
        </div>

        <div class="platform-menu" id="platform-menu">
          <?php get_template_part( 'parts/home', 'mobilemenu' ); ?>
        </div>
      </div>

    </div>
  </div>

</div>