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
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-fancy-posts.php');
require_once( __DIR__ . '/theme_infrastructure/CustomPostTypes/Blocks/cpt-team-card.php');

//All Block ACFs
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-basic-content.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-button-group.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-image-callout.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-image-slider.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-callout-slider.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-accordion.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-social-share.php');
require_once( __DIR__ . '/theme_infrastructure/ACF/ACF-Blocks/acf-fancy-posts.php');

//Stop color picker maddness
function klf_acf_input_admin_footer() { ?>
	<script type="text/javascript">
		(function($) {
		acf.add_filter('color_picker_args', function( args, $field ){
			// add the hexadecimal codes here for the colors you want to appear as swatches
			args.palettes = ['#2facbf', '#474747']
			// return colors
			return args;
			});
		})(jQuery);
	</script>
	<?php }
add_action('acf/input/admin_footer', 'klf_acf_input_admin_footer');

//Add featured image
add_theme_support( 'post-thumbnails' );

//SVG Support in Media Uploader
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

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
