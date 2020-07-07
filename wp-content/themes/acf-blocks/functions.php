<?php
/**
 * ACF Blocks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ACF_Blocks
 */


//All Block CPTs
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-basic-content.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-button-group.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-image-callout.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-image-slider.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-callout-slider.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-accordion.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-social-share.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-blog-post-list.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-team-card.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-media-callout.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-cta.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-flip-card.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-tabs.php');

//All Block ACFs
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-basic-content.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-button-group.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-image-callout.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-image-slider.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-callout-slider.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-accordion.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-social-share.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-blog-post-list.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-team-card.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-media-callout.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-cta.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-flip-card.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-tabs.php');

require_once( __DIR__ . '/theme_infrastructure/ACF/acf-options.php');


//Global Settings page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}

// Menu location
function wpb_custom_new_menu() {
  register_nav_menu('main-nav',__( 'main-nav' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

//Add featured image
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

//SVG Support in Media Uploader
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

function blocks_scripts() {

    //CSS
	wp_enqueue_style( 'blocks-style', get_template_directory_uri() . '/style.min.css');
	wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/layouts/custom-styles.css' );

	 wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/navigation.js', array('jquery'), time(), true );
	}

add_action( 'wp_enqueue_scripts', 'blocks_scripts' );

// Adds the new custom styles to the theme
function generate_options_css() {
    $ss_dir = get_stylesheet_directory();
    ob_start(); // Capture all output into buffer
    require($ss_dir . '/inc/custom-styles.php'); // Grab the custom-style.php file
    $css = ob_get_clean(); // Store output in a variable, then flush the buffer
    file_put_contents($ss_dir . '/layouts/custom-styles.css', $css, LOCK_EX); // Save it as a css file
}
add_action( 'acf/save_post', 'generate_options_css', 20 ); //Parse the output and write the CSS file on post save

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
