<?php
wp_nav_menu(
  array(
    'menu'=>'nes2018-mainmenu',
    'container' => 'div',
    'container_class' => 'nes_mainmenu',
    /*'walker' => new US_Walker_Nav_Menu,*/
    'items_wrap' => '%3$s',
    'fallback_cb' => FALSE,
  )
);
?>

<a target="_blank" href="https://leadverified.com/" class="sign-in-link">
  Sign In <i class="far fa-arrow-right"></i>
</a>