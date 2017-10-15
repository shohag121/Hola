<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPGeeky
 */
global $wpgeeky_options;
if ( ( ! is_active_sidebar( 'sidebar' ) ) || ( $wpgeeky_options['blog-settings-sidebar'] == 'none' ) ) {
	return;
}
?>

<div class="<?php echo esc_attr( ( $wpgeeky_options['blog-settings-sidebar'] == 'left' ) ? 'col-md-4 col-sm-4 col-md-pull-8' : 'col-md-4 col-sm-4' ); ?>">
    <div class="blog-right-sidebar">
		<?php dynamic_sidebar( 'sidebar' ); ?>
    </div>
</div>

