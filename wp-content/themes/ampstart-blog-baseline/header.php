<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Ampstart_Blog_Baseline
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> ⚡>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

<?php amp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">
    <?php if ( is_front_page() ) : ?>
		  <?php get_template_part( 'template-parts/header/header', 'fullpagehero' ); ?>
    <?php else : ?>
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="ampstart-accent block px3 pt2 mb2 text-decoration-none"><?php bloginfo( 'name' ); ?></a></h1>
    <?php endif; ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header>
