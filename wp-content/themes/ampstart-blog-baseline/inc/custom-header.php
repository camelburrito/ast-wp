<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage Ampstart_Blog_Baseline
 * @since 1.0
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses ampstart_blog_baseline_header_style()
 */
function ampstart_blog_baseline_custom_header_setup() {

	/**
	 * Filter Ampstart blog-baseline custom-header support arguments.
	 *
	 * @since Ampstart Blog Baseline 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-image     		Default image of the header.
	 *     @type string $default_text_color     Default color of the header text.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 954.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 1300.
	 *     @type string $wp-head-callback       Callback function used to styles the header image and text
	 *                                          displayed on the blog.
	 *     @type string $flex-height     		Flex support for height of header.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'ampstart_blog_baseline_custom_header_args', array(
		'default-image'      => get_parent_theme_file_uri( '/assets/images/header.jpg' ),
		'width'              => 2000,
		'height'             => 1200,
		'flex-height'        => true,
		'video'              => true,
	) ) );

	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/assets/images/header.jpg',
			'thumbnail_url' => '%s/assets/images/header.jpg',
			'description'   => __( 'Default Header Image', 'ampstart-blog-baseline' ),
		),
	) );
}
add_action( 'after_setup_theme', 'ampstart_blog_baseline_custom_header_setup' );
?>