<?php
/*
Template Name: History Template
*/
get_header();
?>

<?php
    while ( have_posts() ) :
    the_post();
?>
  
  <?php require_once('template-parts/wave-effect.php') ?>
  <?php require_once('template-parts/history-top-wraper.php') ?>
  <?php require_once('template-parts/history-table.php') ?>
  <?php require_once('template-parts/history-modal.php') ?>

<?php endwhile; ?>   
<?php get_footer();?>