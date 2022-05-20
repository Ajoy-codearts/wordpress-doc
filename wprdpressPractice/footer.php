<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<footer class="custom-pad">
  <div class="footer-shape-top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
      <path class="footer-shape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z">
      </path>
    </svg>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="footer-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="">
        </div>
        <div class="footer-menu">
          <ul class="footer-menu-list text-center">
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Home</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link"  href="#">Nodes</a>
            </li>
            <li class="footer-menu-item">
              <a  class="footer-menu-link" href="#">"Get strato" discord</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link"  href="#"> login</a>
            </li>
            <li class="footer-menu-item">
              <a  class="footer-menu-link" href="#">Signup</a>
            </li>
          </ul>
        </div>
        <div class="footer-socials">
          <ul class="header-socials-wrap text-center">
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
</footer>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/parallax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
</body>
</html>
