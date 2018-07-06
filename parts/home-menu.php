<?php
wp_nav_menu(
  array(
    'menu'=>'nes2018-mainmenu',
    'container' => 'ul',
    'container_class' => 'nes_mainmenu',
    /*'walker' => new US_Walker_Nav_Menu,*/
    'items_wrap' => '%3$s',
    'fallback_cb' => FALSE,
  )
);
?>