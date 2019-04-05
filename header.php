<?php
/**
 * Header file
 *
 * This is the template that displays all of the <head> section
 * and everything up until First Parallax Image
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package joehiggins
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
		<!-- Copied from joehiggins.me static site -->
		<meta property="og:title" content="Joe Higgins - Web Designer and Developer" />
		<meta property="og:url" content="http://www.joehiggins.me" />
		<meta property="og:image" content="http://www.joehiggins.me/images/joehiggins.png" />
		<link rel="icon"
		      type="image/png"
		      href="images/logo2.png">
<!-- CHANGE THIS!!! - enqueue stylesheets!!!  -->
		<!-- <link rel="stylesheet" href="style.css"> -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<?php wp_head(); ?>
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
	<div class="w3-top">
	  <div class="w3-bar" id="myNavbar">
			<a href="#home" class="w3-bar-item w3-right"><img class="logo" src="<?php echo wp_get_attachment_url(get_theme_mod('header-logo-image')); ?>" alt=""></a>
	    <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>

	  </div>
	</div>
