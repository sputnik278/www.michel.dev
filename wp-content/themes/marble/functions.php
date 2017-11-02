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
	'header_menu' => 'Navigation pricipal',
	'footer_menu' => 'Navigation du footer',
	) );

}
add_action('after_setup_theme', 'marble_setup');


function marble_setup_widgets_init() {
    register_sidebar( array(
        'name' => 'Sidebar droite',
        'id' => 'right-sidebar',
        'description' => 'Le contenu de la sidebar du site',
        'before_widget' => '<div id="%1$s" class="widget-box widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name' => 'Sidebar footer',
        'id' => 'footer-sidebar',
        'description' => 'Le ontenu du pied de page.',
        'before_widget' => '<div id="%1$s" class="col widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'marble_setup_widgets_init' );

//stoper une fonction
//remove_action('after_setup_theme', 'marble_setup');

?>