<?php
/**
* Sets up theme defaults and registers support for Various Wordpress feachers.
*/
function marble_setup(){
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// This theme uses wp_nav_menu()
	register_nav_menus( array(
	'header-menu' => 'Navigation pricipal',
	'footer_menu' => 'Navigation du footer',
	) );

}
add_action('after_setup_theme', 'marble_setup');

//sotper une fonction
//remove_action('after_setup_theme', 'marble_setup');

?>