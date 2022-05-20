<?php
/*
Template Name: Stratonodes Template
*/
get_header();
?>

<?php
    while ( have_posts() ) :
    the_post();
?>
  
  <?php require_once('template-parts/wave-effect.php') ?>
  <?php require_once('template-parts/buy-nodes.php'); ?>

<?php endwhile; ?>   
<?php get_footer();?>