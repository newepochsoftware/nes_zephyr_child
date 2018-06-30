<?php

?>

<div class="midsection">
  <div class="angle_2"><div class="molecules"></div></div>

  <!-- How It Works Section -->
  <div class="grid-container howitworks">
    <div class="grid-x">
      <div class="cell small-12 text-center">
        <i class="fas fa-check-circle"></i>
        <h3>HOW IT WORKS</h3>
        <p>Lead Verified creates a snapshot and video of every form fill or specified event. We zip the site page as seen by the visitor along with user-generated content, location, IP, hardware and session parameters. Each lead is then saved with a unique token to the Google Drive or FTP location you specify.</p>
      </div>
    </div>

    <!-- Google Block -->
    <div class="grid-x google-block">
      <div class="cell small-12 text-center">
        <h3>We are a google premier partner</h3>
      </div>
      <div class="cell small-12 medium-6 small-order-2 medium-order-1">
        <ul>
          <li><i class="fas fa-check-circle"></i> We follow Google's best practices</li>
          <li><i class="fas fa-check-circle"></i> We are Google Ads certified</li>
          <li><i class="fas fa-check-circle"></i> We manage high-value ad spends</li>
          <li><i class="fas fa-check-circle"></i> We help businesses succeed online</li>
        </ul>
      </div>
      <div class="cell small-12 medium-6 small-order-1 medium-order-2">
        
      </div>
    </div>
    <!-- Google Block -->
  </div>
  <!-- How It Works Section -->

  <!-- Easy/Developer Sections -->
  <div class="easy-dev">
    <div class="grid-container">
      <div class="grid-x">
  
        <div class="cell small-12 medium-6 easytouse">
          <div><i class="fas fa-check-circle"></i> <h3>Easy to use</h3></div>
          <p>Get started in minutes! After creating your account, simply add Lead Verified “campaigns” for each of your form-fill pages. Place the auto-generated tracking code for each campaign onto your pages and celebrate a job well done -- all leads and other data from visitor engagements are now tracked!</p>
        </div>
    
        <div class="cell small-12 medium-6 devfriendly">
          <div><i class="fas fa-check-circle"></i> <h3>Developer friendly</h3></div>
          <p>A powerful API for your development needs. Developers can bring the power of Lead Verified directly into the ERP stack with our fully featured API. Create campaigns and view lead grades, maps, form fields, and complete certificates directly in your CRM, DMP, and other enterprise applications.</p>
        </div>

      </div>
    </div>
  </div>
  <!-- Easy/Developer Sections -->

  <!-- Digital Fingerprint -->
  <div class="fingerprint">
    <css-doodle>
      :doodle { 
        @grid: 1x10 / 62rem; 
      }

      @place-cell: center; 
      @size: calc(@index() * 7%);
      
      border-radius: 50%;
      border-style: dashed;
      border-width: calc(@index() * 0.75rem); 
      border-color: hsla(
        calc(20 * @index()), 70%, 68%, 
        calc(3 / @index() * .8)
      );
      
      --d: @rand(20s, 40s); 
      --rf: @rand(360deg);
      --rt: calc(var(--rf) + @pick(1turn, -1turn));

      animation: spin var(--d) linear infinite;
      @keyframes spin {
        from { transform: rotate(var(--rf)) }
        to   { transform: rotate(var(--rt)) }
      }
    </css-doodle>
    <div class="grid-container dfcontent">
      <div class="grid-x">
        <div class="cell small-12 text-center">
          <h4>A digital fingerprint for your leads and user-generated content</h4>
          <i class="fas fa-check-circle"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- Digital Fingerprint -->
</div>