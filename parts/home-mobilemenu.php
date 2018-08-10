<?php

/**
 * NES Mobile Menu
 */

wp_nav_menu(
  array(
    'theme_location'=>'nes2018-mainmenu',
    'container' => 'div',
    'container_class' => 'nes_mainmenu',
    'items_wrap' => '%3$s',
    'fallback_cb' => FALSE,
  )
);
?>

<a target="_blank" href="https://leadverified.com/" class="sign-in-link">
  Sign In <i class="far fa-sign-in-alt"></i>
</a>