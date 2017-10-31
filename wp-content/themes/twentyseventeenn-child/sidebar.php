<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<!-- get_template_directory_uri(); -> dossier du theme parent-->
	<!-- get_stylesheet_directory_uri(); -> dossier du theme enfant-->
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Logo de la société">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
