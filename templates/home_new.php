<?php
/**
 * Template Name: PLH 2018 - LeadVerified
 * @version LV_VERSION
 */

$plh_args = array();

get_header('2018'); ?>

<?php 
if(isset($_GET['about'])){
  get_template_part( 'parts/home', 'midsection' );
}
?>

<?php get_template_part( 'parts/home', 'features' ); ?>

<?php get_template_part( 'parts/home', 'pricingopts' ); ?>

<?php get_template_part( 'parts/home', 'formblock' ); ?>

<?php get_footer(); ?>