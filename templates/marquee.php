<?php
/**
 * Template: Marquee (homepage component)
 * (Use only with 'home-new' template)
 * 
 */

$themePath = get_stylesheet_directory_uri();
?>

<!-- marquee -->
<div class="marquee">

  <!-- angled colors -->
  <div class="angle_1">
    <span class="shape_1"></span>
    <span class="shape_1 pos_2"></span>
  </div>
  <!-- angled colors -->

  <!-- grid container -->
  <div class="grid-container">
    <div class="grid-x logo-grid">
      <div class="cell small-6">
        <div class="logo"><a href="/" class="homelink"></a></div>
      </div>
      <div class="cell small-6 menublock">
        <div class="menuburger"><a href="#" id="openmenu"><i class="fal fa-bars"></i></a></div>
        <ul class="nes_mainmenu">
          <?php get_template_part( 'parts/home', 'menu' ); ?>
        </ul>
      </div>
    </div>
    <div class="grid-x">
      <div class="cell small-12 medium-8">
        <h1>Lead Verified is your solution for<br> <span id="typing" class="typing"></span></h1>
        <p>Lead Verified provides visit history, archival, data recovery, and authenticity certificates for your webleads and user-generated content. We process thousands of leads per day so our clients can buy, sell, and integrate leads while supporting <span class="hilite">TCPA</span>, <span class="hilite">GDPR</span>, and <span class="hilite">MiFID</span> compliance requirements.</p>
        
        <div class="request_demo" id="request_demo">
          <a href="#">
            <span>Request Demo</span>
          </a>
        </div>
        
        <!-- Trusted Grid -->
        <div class="trusted-grid">
          <h3>Our Clients</h3>
          <div class="grid-x grid-margin-x">
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/Hakkasan-Logo-white.png">
            </div>
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/OMNIA-Logo-white.png">
            </div>
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/AllPurposeLoans-Logo-white.png">
            </div>
          </div>

          <div class="grid-x grid-margin-x">
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/LIB-Logo-white.png">
            </div>
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/RedBull-white.png">
            </div>
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/p1440_white.png">
            </div>
          </div>
          
          <!--
          <div class="grid-x grid-margin-x">
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/BoxedWater_white.png">
            </div>
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/Vidanta_white.png">
            </div>
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/p1440_white.png">
            </div>
          </div>
          -->

        </div>
        <!-- Trusted Grid -->

      </div>
      <div class="cell small-12 medium-4 hide-for-small-only">
        <div class="tablet"></div>
      </div>
    </div>

  </div>
  <!-- grid container -->

</div>
<!-- marquee -->
