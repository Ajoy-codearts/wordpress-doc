<?php
/*
Template Name: Home Template
*/
get_header();
?>

<?php
    while ( have_posts() ) :
    the_post();
?>
  
  <?php require_once('template-parts/hero.php')  ?>
  <?php require_once('template-parts/cloudStorage.php') ?>
  <?php require_once('template-parts/runPartnerNode.php') ?>

<?php endwhile; ?>   
<?php get_footer();?>