<?php
/**
 * Template: Marquee (homepage component)
 * (Use only with 'home-new' template)
 * 
 */

$themePath = get_stylesheet_directory_uri();
?>

<div class="marquee">

  <div class="angle_1">
    <span class="shape_1"></span>
    <span class="shape_1 pos_2"></span>
  </div>

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
    <div class="grid-x">
      <div class="cell small-12 medium-8">
        <h1>Lead Verified is your solution for<br> <span id="typing" class="typing"></span></h1>
        <p>Lead Verified provides visit history, archival, data recovery, and authenticity certificates for your webleads and user-generated content. We process thousands of leads per day so our clients can buy, sell, and integrate leads while supporting <span class="hilite">TCPA</span>, <span class="hilite">GDPR</span>, and <span class="hilite">MiFID</span> compliance requirements.</p>
        
        <div class="request_demo" id="request_demo">
          <a href="#formblock">
            <span>Request Demo</span>
          </a>
        </div>
        
        <!-- Trusted Grid -->
        <div class="trusted-grid">
          <h3>Our Clients Include</h3>
          <?php //get_template_part( 'parts/home', 'clientgrid' ); ?>
          
          <div class="grid-x grid-margin-x ">
            <div class="cell auto text-left">
              <ul>
                <li>Insurance Companies</li>
                <li>Mortgage Lenders</li>
                <li>Music Festivals</li>
                <li>Nightlife Venues</li>
              </ul>
            </div>
            <div class="cell auto text-left">
              <ul>
                <li>Recording Artists</li>
                <li>Restaurants &amp; Bars</li>
                <li>Sports Franchises</li>
                <li>Tech Companies</li>
              </ul>
            </div>
          </div>

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
