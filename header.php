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
	<title><?php echo get_bloginfo( 'name' ); ?></title>
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
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>

    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#resume" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-eye"></i> RESUM&Eacute;</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#home" class="w3-bar-item w3-right"><img class="logo" src="images/logo2.svg" alt=""></a>
    <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a> -->
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#resume" class="w3-bar-item w3-button" onclick="toggleFunction()">RESUM&Eacute;</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>
