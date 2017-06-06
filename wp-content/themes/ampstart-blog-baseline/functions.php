<?php

function ampstart_blog_baseline_setup() {
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

  add_image_size( 'ampstart-blog-baseline-featured-image', 1280, 853, true );
}
add_action( 'after_setup_theme', 'ampstart_blog_baseline_setup' );
/**
 * Head tag contents
 */

function ampruntime_js() {
  echo '<script async src="https://cdn.ampproject.org/v0.js"></script>';
}

function amp_boilerplate_css() {
  echo '<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>';
}

function remove_default_css() {
  get_rid_of_style('customize-preview');
  get_rid_of_style('wp_print_styles');
}

function amp_custom_css() {
  $styles = wp_get_custom_css();
  $safe_styles = '';
  if ( $styles || is_customize_preview() ) {
    $safe_styles = strip_tags( $styles );
  }

  echo '<style amp-custom>' .file_get_contents(get_stylesheet_uri()) . $safe_styles . '</style>';
}

function amp_head() {
  do_action( 'amp_head' );
}

add_action( 'amp_head', 'ampruntime_js', 0 );
add_action( 'amp_head', 'amp_boilerplate_css', 0 );
add_action( 'amp_head', 'amp_custom_css', 0 );


/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );
