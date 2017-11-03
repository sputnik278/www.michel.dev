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

    // ajoute une taille d'image personalisé
    // nom (SLUG) de l'image, largeur, hauteur, crop
    add_image_size( 'list-tumbnail', 250, 180, true );
    add_image_size( 'signle-thumbnails', 400, 120, true );
    add_image_size( 'taille-baniere', 1000, 300, true );
    add_image_size( 'home-thumbnail', 380, 270, true );
    
    //fonctionalite pour les image dans admin
    add_theme_support( 'post-thumbnails', array( 'post' )); 

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

/**
 * Proper way to enqueue scripts and styles
 */
function marble_scripts() {
    wp_enqueue_style( 
    	'marble-normalize', 
    	get_template_directory_uri() . '/css/normalize.css'
    	);
    wp_enqueue_style( 
    	'marble-styles', 
    	get_template_directory_uri() . '/css/styles.css'
    	);
    wp_enqueue_style( 
    	'marble-fonts', 
    	'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed:400,700|Roboto+Slab:400,700'
    	);
   	wp_enqueue_script(
   		'marble-script',		//identifiant unique
   		get_template_directory_uri() . '/js/script.js',  //url du script
   		array('jQuery'),		//dépendances
   		'1.0.0',				//version
   		true );					//charé dans la footer ?
}
add_action( 'wp_enqueue_scripts', 'marble_scripts' );



/* costom post portofolio */ 

// Register Custom Post Type
function portfolio_post_type() {

    $labels = array(
        'name'                  => _x( 'Portfolios', 'Post Type General Name', 'marble' ),
        'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'marble' ),
        'menu_name'             => __( 'Portfolios', 'marble' ),
        'name_admin_bar'        => __( 'Portfolio', 'marble' ),
        'archives'              => __( 'Item Archives', 'marble' ),
        'attributes'            => __( 'Item Attributes', 'marble' ),
        'parent_item_colon'     => __( 'Parent Portfolio:', 'marble' ),
        'all_items'             => __( 'All portfolios', 'marble' ),
        'add_new_item'          => __( 'Add New Portfolio', 'marble' ),
        'add_new'               => __( 'New portfolio', 'marble' ),
        'new_item'              => __( 'New Item', 'marble' ),
        'edit_item'             => __( 'Edit Portfolio', 'marble' ),
        'update_item'           => __( 'Update portfolio', 'marble' ),
        'view_item'             => __( 'View portfolio', 'marble' ),
        'view_items'            => __( 'View Items', 'marble' ),
        'search_items'          => __( 'Search portfolio', 'marble' ),
        'not_found'             => __( 'No portfolio found', 'marble' ),
        'not_found_in_trash'    => __( 'No portfolios found in Trash', 'marble' ),
        'featured_image'        => __( 'Featured Image', 'marble' ),
        'set_featured_image'    => __( 'Set featured image', 'marble' ),
        'remove_featured_image' => __( 'Remove featured image', 'marble' ),
        'use_featured_image'    => __( 'Use as featured image', 'marble' ),
        'insert_into_item'      => __( 'Insert into item', 'marble' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'marble' ),
        'items_list'            => __( 'Items list', 'marble' ),
        'items_list_navigation' => __( 'Items list navigation', 'marble' ),
        'filter_items_list'     => __( 'Filter items list', 'marble' ),
    );
    $rewrite = array(
        'slug'                  => 'portfolio',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Portfolio', 'marble' ),
        'description'           => __( 'Portfolio information page', 'marble' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),
        'taxonomies'            => array( 'color', 'type' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-art',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'portfolioreferences',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'post',
        'show_in_rest'          => false,
    );
    register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );
/*
definition taxonomie du portofolio
*/

// Register Custom Taxonomy
function portfolio_color_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Colors', 'Taxonomy General Name', 'marble' ),
        'singular_name'              => _x( 'Color', 'Taxonomy Singular Name', 'marble' ),
        'menu_name'                  => __( 'Color', 'marble' ),
        'all_items'                  => __( 'All Items', 'marble' ),
        'parent_item'                => __( 'Parent Item', 'marble' ),
        'parent_item_colon'          => __( 'Parent Item:', 'marble' ),
        'new_item_name'              => __( 'New Item Name', 'marble' ),
        'add_new_item'               => __( 'Add New Item', 'marble' ),
        'edit_item'                  => __( 'Edit Item', 'marble' ),
        'update_item'                => __( 'Update Item', 'marble' ),
        'view_item'                  => __( 'View Item', 'marble' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'marble' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'marble' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'marble' ),
        'popular_items'              => __( 'Popular Items', 'marble' ),
        'search_items'               => __( 'Search Items', 'marble' ),
        'not_found'                  => __( 'Not Found', 'marble' ),
        'no_terms'                   => __( 'No items', 'marble' ),
        'items_list'                 => __( 'Items list', 'marble' ),
        'items_list_navigation'      => __( 'Items list navigation', 'marble' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'color', array( 'portfolio' ), $args );

}
add_action( 'init', 'portfolio_color_taxonomy', 0 );

/*
taxonomie type
*/

// Register Custom Taxonomy
function portfolio_type_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Types', 'Taxonomy General Name', 'marble' ),
        'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'marble' ),
        'menu_name'                  => __( 'Type', 'marble' ),
        'all_items'                  => __( 'All Items', 'marble' ),
        'parent_item'                => __( 'Parent Item', 'marble' ),
        'parent_item_colon'          => __( 'Parent Item:', 'marble' ),
        'new_item_name'              => __( 'New Item Name', 'marble' ),
        'add_new_item'               => __( 'Add New Item', 'marble' ),
        'edit_item'                  => __( 'Edit Item', 'marble' ),
        'update_item'                => __( 'Update Item', 'marble' ),
        'view_item'                  => __( 'View Item', 'marble' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'marble' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'marble' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'marble' ),
        'popular_items'              => __( 'Popular Items', 'marble' ),
        'search_items'               => __( 'Search Items', 'marble' ),
        'not_found'                  => __( 'Not Found', 'marble' ),
        'no_terms'                   => __( 'No items', 'marble' ),
        'items_list'                 => __( 'Items list', 'marble' ),
        'items_list_navigation'      => __( 'Items list navigation', 'marble' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'type', array( 'portfolio' ), $args );

}
add_action( 'init', 'portfolio_type_taxonomy', 0 );
//stoper une fonction
//remove_action('after_setup_theme', 'marble_setup');

?>