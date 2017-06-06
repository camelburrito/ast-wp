<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Ampstart_Blog_Baseline
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main id="content">
  <?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) : ?>
    <amp-img src="<?the_post_thumbnail( 'ampstart-blog-baseline-featured-image' );?>" width="1280" height="853" layout="responsive" class="mb4 mx3"></amp-img>
  <?
	endif;
  ?>
</main>

<?php get_footer(); ?>
