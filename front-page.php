<?php
/**
 * The template for displaying joehiggins front-page
 *
 * @package joehiggins
 */

get_header();
?>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-topright jh-topright" style="white-space:nowrap;">
    <p class="w3-xxxlarge w3-animate-opacity jh-text-color">Joe Higgins</p><p class="w3-xlarge w3-animate-opacity jh-text-color">Web Designer/Developer</p>
  </div>
</div>

<?php get_template_part('template-parts/about'); ?>
<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge jh-text-color w3-wide">PORTFOLIO</span>
  </div>
</div>

<?php get_template_part('template-parts/portfolio'); ?>

<?php get_template_part('template-parts/other-projects'); ?>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge jh-text-color w3-wide">CONTACT</span>
  </div>
</div>

<?php get_template_part('template-parts/contact'); ?>

<!-- parallax 4  -->
<!-- Resume -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge jh-text-color w3-wide">RESUM&Eacute;</span>
  </div>
</div>

<?php get_template_part('template-parts/resume'); ?>
<?php get_footer(); ?>
