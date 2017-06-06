<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Ampstart_Blog_Baseline
 * @since 1.0
 * @version 1.0
 */

?>

<?php if ( get_header_image() ) : ?>
<!-- Start Fullpage Hero -->
  <figure class="ampstart-image-fullpage-hero m0 relative mb4">
    <amp-img width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" layout="responsive" src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" media="(max-width: 415px)" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></amp-img>
    <amp-img height="<?php echo esc_attr( get_custom_header()->height ); ?>" layout="fixed-height" src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" media="(min-width: 416px)" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></amp-img>
    <figcaption class="absolute top-0 right-0 bottom-0 left-0">
      <header class="p3">
        <h1 class="ampstart-fullpage-hero-heading mb3">
          <span class="ampstart-fullpage-hero-heading-text">
            <?php bloginfo( 'name' ); ?>
          </span>
        </h1>

          <span class="ampstart-image-credit h4">
      			<?php $description = get_bloginfo( 'description', 'display' );
      				if ( $description || is_customize_preview() ) : ?>
      					<?php echo $description; ?>
      				<?php endif; ?>
          </span>
    </header>
    <footer class="absolute left-0 right-0 bottom-0">
      <a class="ampstart-readmore py3 caps line-height-2 text-decoration-none center block h5" href="#content"><?php _e( 'Read more', 'amp-blog-baseline' ); ?></a>
    </footer>
    </figcaption>
  </figure>
  <!-- End Fullpage Hero -->
<?php endif; ?>

