<?php
/**
 * joehiggins Theme Customizer
 *
 * @package joehiggins
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function joehiggins_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'joehiggins_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'joehiggins_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'joehiggins_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function joehiggins_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function joehiggins_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function joehiggins_customize_preview_js() {
	wp_enqueue_script( 'joehiggins-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'joehiggins_customize_preview_js' );

// ================================================================
// =======  Customizer settings added by Joe Higgins 3/2019 =======
//=================================================================

// Logo in right side of header
function jch_header_logo($wp_customize) {
	$wp_customize->add_section('header-logo-section', array(
		'title'		=> 'Header Logo'
	));
	$wp_customize->add_setting('header-logo-owner', array(
		'default'	=> 'Header logo'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'header-logo-control', array(
		'label'			=> 'Header Logo',
		'section' 	=>	'header-logo-section',
		'settings'	=>	'header-logo-owner'
	)));

	$wp_customize->add_setting('header-logo-image', array(
		'default'	=> 'Image'
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'header-logo-image-control', array(
		'label'			=> 'Add header logo image - Please add "Safe SVG" plugin if using SVG images!',
		'section' 	=>	'header-logo-section',
		'settings'	=>	'header-logo-image',
		'width'			=>	300,
		'flex_width'	=> true
	)));

}
add_action('customize_register', 'jch_header_logo');

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
		'label'			=> 'Text to diplay over parallax 2 image',
		'section' 	=>	'parallax2-section',
		'settings'	=>	'parallax2-text'
	)));
	$wp_customize->add_setting('parallax2-heading', array(
		'default' 	=>  'Add heading for parallax 2 section'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'parallax2-heading-control', array(
		'label'  =>  'Add heading for parallax 2 section',
		'section' 	=>	'parallax2-section',
		'settings'	=>	'parallax2-heading'
	)));
	$wp_customize->add_setting('parallax2-tagline', array(
		'default'		=> 'Parallax 2 tagline'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'parallax2-tagline-control', array(
		'label'  =>  'Add tagline for parallax 2 section',
		'section' 	=>	'parallax2-section',
		'settings'	=>	'parallax2-tagline',
		'type'			=> 	'textarea'
	)));
	$wp_customize->add_setting('parallax2-image', array(
		'default'	=> 'Image'
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'parallax1-image-control', array(
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
