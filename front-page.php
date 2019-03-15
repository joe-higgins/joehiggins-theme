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
    <p class="w3-xxxlarge w3-animate-opacity jh-text-color"><?php echo get_theme_mod('parallax1-owner'); ?></p>
    <p class="w3-xlarge w3-animate-opacity jh-text-color"><?php echo get_theme_mod('parallax1-tagline'); ?></p>
  </div>
</div>

<?php get_template_part('template-parts/about'); ?>
<!-- Second Parallax Image with Portfolio Text - parallax2 -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge jh-text-color jh-headline w3-wide"><?php echo get_theme_mod('parallax2-text'); ?></span>
  </div>
</div>

<?php get_template_part('template-parts/portfolio'); ?>

<!-- Third Parallax Image with text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge jh-text-color jh-headline w3-wide"><?php echo get_theme_mod('parallax3-text'); ?></span>
  </div>
</div>

<?php get_template_part('template-parts/other-projects'); ?>

<!-- Fourth Parallax Image with Contact Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge jh-text-color w3-wide">CONTACT</span>
  </div>
</div>

<?php get_template_part('template-parts/contact'); ?>

<!-- Fifth Parallax Image Resume text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge jh-text-color w3-wide">RESUM&Eacute;</span>
  </div>
</div>

<!-- Resume -->
<?php get_template_part('template-parts/resume'); ?>
<?php get_footer(); ?>
