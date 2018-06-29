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
  <!-- div class="angle_1 offset_4"></div -->
  <!-- ^^angled colors^^ -->

  <!-- grid container -->
  <div class="grid-container">
    <div class="grid-x logo-grid">
      <div class="cell small-12">
        <div class="logo"></div>
      </div>
    </div>
    <div class="grid-x">
      <div class="cell small-12 medium-8">
        <h1>Your solution for lead scoring and data compliance</h1>
        <p>Lead Verified provides visit history, archival, data recovery, and authenticity certificates for your webleads and user-generated content. We process thousands of leads per day so our clients can buy, sell, and integrate leads while supporting <span class="hilite">TCPA</span>, <span class="hilite">GDPR</span>, and <span class="hilite">MiFID</span> compliance requirements.</p>
        
        <div class="request_demo" id="request_demo">
          <a href="#">
            <span>Request Demo</span>
            <div class="orangeSlate"></div>
          </a>
        </div>
        
        <!-- Trusted Grid -->
        <div class="trusted-grid">
          <h3>Trusted by:</h3>
          <div class="grid-x grid-margin-x">
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/LiveNation-Logo-white.png">
            </div>
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/OMNIA-Logo-white.png">
            </div>
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/AllPurposeLoans-Logo-white.png">
            </div>
          </div>
          <div class="grid-x">
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/LasRageous-white.png">
            </div>
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/LIB-Logo-white.png">
            </div>
            <div class="cell auto">
              <img src="<?php echo $themePath; ?>/img/clients/Hakkasan-Logo-white.png">
            </div>
          </div>
        </div>
        <!-- ^^Trusted Grid -->

      </div>
      <div class="cell small-12 medium-4 hide-for-small-only">
        <div class="tablet"></div>
      </div>
    </div>

  </div>
  <!-- ^^grid container^^ -->

</div>
<!-- ^^marquee^^ -->
