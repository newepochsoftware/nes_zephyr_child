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
      
      <div class="platform-menu" id="platform-menu">
        <?php get_template_part( 'parts/home', 'menu' ); ?>
      </div>

      <div class="grid-x logo-grid">
        <div class="cell small-6">
          <div class="logo"><a href="/" class="homelink"></a></div>
        </div>
        <div class="cell small-6 menublock">

          <button id="toggle-platform-menu" class="hamburger hamburger--boring" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>

        </div>
      </div>
    </div>
  </div>

</div>
