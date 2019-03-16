<?php
/**
 * joehiggins functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package joehiggins
 */

if ( ! function_exists( 'joehiggins_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function joehiggins_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on joehiggins, use a find and replace
		 * to change 'joehiggins' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'joehiggins', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'joehiggins' )
		) );
		//Adds an option for cutom classes on li menu items
		// Add class in wp_nav_menu array
		function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
		}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'joehiggins_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'joehiggins_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function joehiggins_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'joehiggins_content_width', 640 );
}
add_action( 'after_setup_theme', 'joehiggins_content_width', 0 );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function joehiggins_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'joehiggins' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'joehiggins' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'joehiggins_widgets_init' );

function jh_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 2', 'joehiggins' ),
		'id'            => 'jh-sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'joehiggins' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jh_widgets_init' );

function about_bottom_widgets_init() {

	register_sidebar( array(
		'name'          => 'About bottom sidebar',
		'id'            => 'about_bottom_1',
		'before_widget' => '<div class="about-bottom">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'about_bottom_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function joehiggins_scripts() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css',false,'1.1','all');
	wp_enqueue_style( 'framework', get_template_directory_uri() . '/css/framework.css',false,'1.1','all');
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'joehiggins-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'joehiggins-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'joehiggins_scripts' );

/**
*
*  Retains jpeg quality on upload
*/
add_filter('jpeg_quality', function($arg){return 100;});

/**
*
*  Adds support for custom background images
*/
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => 'repeat',
	'default-position-x'     => 'left',
        'default-position-y'     => 'top',
        'default-size'           => 'auto',
	'default-attachment'     => 'scroll',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

/**
* ===========================================
* Add custom editable theme content
* ===========================================
*/

// first parallax has site branding and background image
function jch_add_parallax1($wp_customize) {
	$wp_customize->add_section('parallax1-section', array(
		'title'		=> 'First Parallax Section'
	));
	$wp_customize->add_setting('parallax1-owner', array(
		'default'	=> 'Owner Name'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'parallax1-owner-control', array(
		'label'			=> 'Owner Name',
		'section' 	=>	'parallax1-section',
		'settings'	=>	'parallax1-owner'
	)));
	$wp_customize->add_setting('parallax1-tagline', array(
		'default'	=> 'Tag Line'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'parallax1-tagline-control', array(
		'label'			=> 'Tag line',
		'section' 	=>	'parallax1-section',
		'settings'	=>	'parallax1-tagline'
	)));
	$wp_customize->add_setting('parallax1-image', array(
		'default'	=> 'Image'
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'parallax1-image-control', array(
		'label'			=> 'Add parallax background image',
		'section' 	=>	'parallax1-section',
		'settings'	=>	'parallax1-image',
		'width'			=>	1200,
		'flex_width'	=> true
	)));

}
add_action('customize_register', 'jch_add_parallax1');

function jch_parallax1_bg_image()
{
?>
    <style type="text/css">
        .bgimg-1 {
            background-image: url('<?php echo wp_get_attachment_url(get_theme_mod( 'parallax1-image' ));?>');
        }
    </style>
<?php
}
add_action( 'wp_head', 'jch_parallax1_bg_image');

// About section heading, 2 text areas, image
function jch_add_about($wp_customize) {
	$wp_customize->add_section('about-section', array(
		'title'		=> 'About Section'
	));
	$wp_customize->add_setting('about-heading', array(
		'default'	=> 'Heading text'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'about-heading-control', array(
		'label'			=> 'Heading text',
		'section' 	=>	'about-section',
		'settings'	=>	'about-heading'
	)));
	$wp_customize->add_setting('about-text1', array(
		'default'	=> 'First text area'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'about-text1-control', array(
		'label'			=> 'First text area',
		'section' 	=>	'about-section',
		'settings'	=>	'about-text1',
		'type'			=> 	'textarea'
	)));
	$wp_customize->add_setting('about-text2', array(
		'default'	=> 'Second text area'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'about-text2-control', array(
		'label'			=> 'Second text area',
		'section' 	=>	'about-section',
		'settings'	=>	'about-text2',
		'type'			=> 	'textarea'

	)));
	$wp_customize->add_setting('about-image', array(
		'default'	=> 'Image'
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'about-image-control', array(
		'label'			=> 'Add Owner image',
		'section' 	=>	'about-section',
		'settings'	=>	'about-image',
		'width'			=>	3000,
		'flex_width'	=> true,
		'flex_height'	=> true
	)));

}
add_action('customize_register', 'jch_add_about');


// Second parallax has 1 text area and background image
function jch_add_parallax2($wp_customize) {
	$wp_customize->add_section('parallax2-section', array(
		'title'		=> 'Second Parallax Section'
	));
	$wp_customize->add_setting('parallax2-text', array(
		'default'	=> 'Display text'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'parallax2-text-control', array(
		'label'			=> 'Display text',
		'section' 	=>	'parallax2-section',
		'settings'	=>	'parallax2-text'
	)));
	$wp_customize->add_setting('parallax2-image', array(
		'default'	=> 'Image'
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'parallax1-imagee-control', array(
		'label'			=> 'Add parallax background image',
		'section' 	=>	'parallax2-section',
		'settings'	=>	'parallax2-image',
		'width'			=>	1200,
		'flex_width'	=> true
	)));

}
add_action('customize_register', 'jch_add_parallax2');

function jch_parallax2_bg_image()
{
?>
    <style type="text/css">
        .bgimg-2 {
            background-image: url('<?php echo wp_get_attachment_url(get_theme_mod( 'parallax2-image' ));?>');
        }
    </style>
<?php
}
add_action( 'wp_head', 'jch_parallax2_bg_image');

// Third parallax has background image with text area
function jch_add_parallax3($wp_customize) {
	$wp_customize->add_section('parallax3-section', array(
		'title'		=> 'Third Parallax Section'
	));
	$wp_customize->add_setting('parallax3-text', array(
		'default'	=> 'Display text'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'parallax3-text-control', array(
		'label'		=> 'Display text',
		'section'	=> 'parallax3-section',
		'settings'=> 'parallax3-text'
	)));
	$wp_customize->add_setting('parallax3-image', array(
		'default'	=> 'Image'
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'parallax3-image-control', array(
		'label'			=> 'Add parallax background image',
		'section' 	=>	'parallax3-section',
		'settings'	=>	'parallax3-image',
		'width'			=>	1200,
		'flex_width'	=> true
	)));

}
add_action('customize_register', 'jch_add_parallax3');

function jch_parallax3_bg_image()
{
?>
    <style type="text/css">
        .bgimg-3 {
            background-image: url('<?php echo wp_get_attachment_url(get_theme_mod( 'parallax3-image' ));?>');
        }
    </style>
<?php
}
add_action( 'wp_head', 'jch_parallax3_bg_image');

// ===================================================
// =========== Top Menu settings =====================
// ===================================================
register_nav_menus( array(
	'top-menu' => esc_html__( 'Top Menu', 'top-menu' ) 
) );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
