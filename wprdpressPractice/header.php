<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>

<body>
<header class="custom-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 align-self-center">
        <nav class="navbar navbar-expand-lg"> 
          <a class="navbar-brand" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
          </a>
          <ul class="header-button-wrap header-button-wrap-for-mobile">
            <li class="header-btn">
              <a href="#" class="btn custom-btn custom-btn-fill">Login</a>
            </li>
            <li class="header-btn">
              <a href="#" class="btn custom-btn custom-btn-outline">Sign Up</a>
            </li>
          </ul>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <ul class="navbar-nav wheader ml-auto">
              <li class="nav-item active"> <a class="nav-link" href="index.html">Home</a> </li>
              <li class="nav-item"> <a class="nav-link" href="strato-partner-nodes.html">Nodes</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">"Get STRATO" Discord</a> </li>
            </ul> -->
            <?php
                wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'  => '',
                'depth'      => 2,
                'items_wrap' => '<ul class="wheader">%3$s</ul>' ,
                'menu_class' => '',
                
                ) );
				      ?>
      
              <!-- <li class="nav-item"> <a class="nav-link" href="#">Login</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Sign Up</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li> -->
           
          </div>
        </nav>
      </div>
      <div class="col-lg-4 align-self-center">
        <div class="header-right"> 
                <ul class="header-button-wrap">
                  <li class="header-btn">
                    <a href="#" class="btn custom-btn custom-btn-fill">Login</a>
                  </li>
                  <li class="header-btn">
                    <a href="#" class="btn custom-btn custom-btn-outline">Sign Up</a>
                  </li>
                </ul>
              <ul class="header-socials-wrap">
                <li class="header-social">
                  <a href="#" class="header-social-icon"><span><i class="fab fa-facebook-f"></i></span></a>
                </li>
                <li class="header-social">
                  <a href="#" class="header-social-icon"><span><i class="fab fa-twitter"></i></span></a>
                </li>
                <li class="header-social">
                  <a href="#" class="header-social-icon"><span><i class="fab fa-linkedin-in"></i></span></a>
                </li>
                <li class="header-social">
                  <a href="#" class="header-social-icon"><span><i class="fab fa-instagram"></i></span></a>
                </li>
              </ul>
        </div>
      </div>
    </div>
  </div>  
</header>


