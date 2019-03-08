<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package joehiggins
 */

?>
<!doctype html>
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
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'joehiggins' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation w3-bar">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'joehiggins' ); ?></button>
			<?php
			wp_nav_menu( array(
				'menu'            => '',
        'container'       => 'div',
        'container_class' => 'w3-top',
        'container_id'    => '',
				'theme-location'=> 'top-menu',
				'menu_id'       => 'top-menu',
				'menu_class'		=> 'w3-bar',
				'menu-id'				=> 'myNavBar',
				'link_before'		=> '',
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'add_li_class'	=> 'w3-bar-item'


			) );
			?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$joehiggins_description = get_bloginfo( 'description', 'display' );
			if ( $joehiggins_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $joehiggins_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
