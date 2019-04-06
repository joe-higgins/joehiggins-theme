<?php
/**
 * About section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package joehiggins
 */

?>

<!-- About section -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center jh-headline" data-aos="fade-left" data-aos-duration="5000"><?php echo get_theme_mod('about-heading'); ?></h3>
  <p data-aos="fade-right" data-aos-duration="5000"><?php echo get_theme_mod('about-text1'); ?></p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large" data-aos="fade-in" data-aos-duration="5000">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('about-image')); ?>" class="w3-round w3-image jh-owner-image" alt="Photo of Me" width="300" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large" data-aos="fade-right" data-aos-duration="5000">
      <p><?php echo get_theme_mod('about-text2'); ?></p>
    </div>
  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <?php wp_nav_menu( array( 'theme_location' => 'social-menu' ) ); ?>
  <div class="w3-quarter  w3-section">
    <a href="https://www.linkedin.com/in/joe-higgins-73700b66/" target="_blank"><i class="fab fa-linkedin w3-hover-opacity jh-icon"></i></a>
  </div>
  <?php dynamic_sidebar( 'about_bottom_1' ); ?>
  <div class="w3-quarter  w3-section">
    <a href="https://www.facebook.com/silveroakwebdesign/" target="_blank"><i class="fab fa-facebook w3-hover-opacity jh-icon"></i></a>
  </div>
  <div class="w3-quarter  w3-section">
    <a href="https://codepen.io/joehiggins/" target="_blank"><i class="fab fa-codepen w3-hover-opacity jh-icon"></i></a>
  </div>
  <div class="w3-quarter w3-section">
    <a href="https://github.com/joe-higgins" target="_blank"><i class="fab fa-github w3-hover-opacity jh-icon"></i></a>
  </div>
</div>
<!-- END About section -->
