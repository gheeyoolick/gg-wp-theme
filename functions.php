<?php

if ( ! function_exists( 'gulickgroup_setup' ) ) :

// Set up theme defaults
function gulickgroup_setup() {
	
	// Title tag
	add_theme_support( 'title-tag' );
	
	// Add nav menus
	register_nav_menus( array(
		'primary'   => __( 'Navigation menu', 'gulickgroup' ),
		'social'    => __( 'Social Links menu', 'gulickgroup' ),
		'news'      => __( 'Latest News', 'gulickgroup' ),
		'utility'   => __( 'Utility Links menu', 'gulickgroup' ),
		'footer'    => __( 'Footer menu', 'gulickgroup' ),
	) );
	
	// HTML5 support
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	// Style the visual editor to resemble the theme style
	add_editor_style( array( 'editor-styles.css' ) );
	
}
endif;
add_action( 'after_setup_theme', 'gulickgroup_setup' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Add sidebars and widgets
function gulickgroup_widgets_init() {
	
	register_sidebar( array (
		'name' => __( 'Primary Sidebar', 'gulickgroup' ),
		'id' => 'sidebar-1',
		'description' => __( 'Common sidebar for all Posts and non custom Pages', 'gulickgroup' ),
		'before_widget' => '<div class="sidebar">',
		'after_widget' => "</div>",
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array (
		'name' => __( 'Communities Sidebar', 'gulickgroup' ),
		'id' => 'sidebar-2',
		'description' => __( 'Common sidebar for all Community pages', 'gulickgroup' ),
		'before_widget' => '<div class="sidebar">',
		'after_widget' => "</div>",
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array (
		'name' => __( 'Homes Sidebar', 'gulickgroup' ),
		'id' => 'sidebar-3',
		'description' => __( 'Common sidebar for all Home pages', 'gulickgroup' ),
		'before_widget' => '<div class="sidebar">',
		'after_widget' => "</div>",
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array (
		'name' => __( 'Quick Deliveries Sidebar', 'gulickgroup' ),
		'id' => 'sidebar-4',
		'description' => __( 'Common sidebar for all Quick Delivery pages', 'gulickgroup' ),
		'before_widget' => '<div class="sidebar">',
		'after_widget' => "</div>",
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	
}
add_action( 'widgets_init', 'gulickgroup_widgets_init' );

// Enqueue scripts and styles
function gulickgroup_scripts() {
	
	// Main Stylesheet
	wp_enqueue_style( 'gulickgroup-style', get_stylesheet_uri() );
	
	//Add additional scripts
	wp_enqueue_script( 'gulickgroup-bootstrap', get_template_directory_uri() . '/javascripts/bootstrap.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'gulickgroup-site', get_template_directory_uri() . '/javascripts/site.js', array( 'jquery' ), null, true );
	
}
add_action( 'wp_enqueue_scripts', 'gulickgroup_scripts' );

// Add IE conditional html5 shim and responsive support to header
function add_ie_html5_shim () {
	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
    echo '<!--[if lt IE 9]>';
    echo '<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
    echo '<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

// Custom Post Types
require_once('custom-post-types.php');

// Content Connections
require_once('connections.php');

// Disable default custom meta fields
function remove_custom_meta_boxes() {
	remove_meta_box('postcustom','post','normal');
	remove_meta_box('postcustom','page','normal');
}
add_action('admin_init','remove_custom_meta_boxes');

?>
