<?php 
/* 
Template Name: Stratolicense Template 
*/
get_header();
?>

<?php 
while( have_posts() ) :
the_post();
?>

<?php require_once('template-parts/wave-effect.php') ?>
<?php require_once('template-parts/partner-license.php'); ?>

<?php endwhile; ?>
<?php get_footer(); ?>
