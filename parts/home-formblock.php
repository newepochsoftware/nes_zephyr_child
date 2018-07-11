<?php 

$themePath = get_stylesheet_directory_uri();
?>

<!-- Form Row -->
<div class="form-block" id="formblock">
  <div class="angle_10">
    <div class="molecules alt"></div>
  </div>

  <div class="grid-container mainform" id="mainform">
    
    <div class="grid-x">
      <div class="cell small-12 headline text-center">
        <h3>Complete Lead Intelligence<br>for your business</h3>
      </div>
    </div>

    <div class="grid-x">
      <div class="cell small-12 medium-6 text-right">
        <p>Lead Verified saves a history of every attempted lead event or transaction, provides heatmaps of visitor interaction, serves as a failover solution for lead posts, scores every lead using our proprietary grading system, and issues a certificate of authenticity for each lead. Extensible to any event, transaction, or visitor interaction, Lead Verified can verify and record engagement, and identify abuse and fraud.</p>
        
      </div>
      <div class="cell small-12 medium-6">
        <?php if (isset($_GET['GML2018'])): ?>
          <!-- ALT LAYOUT -->
          <div class="free_trial">
            <h5 class="trial">EXCLUSIVE TRIAL FOR ATTENDEES OF</h5>
            <img src="<?php echo $themePath; ?>/img/google/GML2018.jpg">
            <h5 class="strike">$199</h5>
            <h5 class="free">1 MONTH<br>FREE</h5>
          
            <ul>
              <li>Users: 1</li>
              <li>Campaigns: 3</li>
              <li>Leads: 1,000/mo</li>
              <li>Retention: Up to 4 yr.</li>          
              <li>Price per certificate: $0.20</li>
            </ul>

            <div class="startnow">
              <a href="https://newepochsoftware.recurly.com/subscribe/lv-beta" target="_blank">
                <span>Start Free Trial Now</span>
              </a>
            </div>
          </div>
          <!-- ALT LAYOUT -->
        <?php 
          else: 
            echo do_shortcode( '[gravityform id="3" title="false" description="false"]' ); 
        ?>
        
          <p class="disclaimer">By submitting this form, I agree by electronic signature to: (1) be contacted by SMS text at my mobile phone number and by email (Consent is not required as a condition of purchase); (2) <a href="/privacy-policy">Privacy Policy</a>; and (3) <a href="/tos">Terms of Service</a>.</p>
        
        <?php endif; ?>
        
        <div class="grid-x">
          <div class="cell small-6 text-center">
            <table width="135" border="0" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications.">
              <tr>
                <td width="135" align="center" valign="top">
                  <script type="text/javascript" src="https://seal.websecurity.norton.com/getseal?host_name=www.newepochsoftware.com&amp;size=M&amp;use_flash=NO&amp;use_transparent=Yes&amp;lang=en"></script>
                </td>
              </tr>
            </table>
          </div>
          <div class="cell small-6 text-center">
            <br>
            <script src="https://cdn.ywxi.net/js/inline.js?w=120"></script>
          </div>
        </div>        
      </div>
    </div>

  </div>

</div>
<!-- ^^Form Row -->