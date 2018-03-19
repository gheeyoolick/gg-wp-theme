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

// Enqueue scripts and styles
function gulickgroup_scripts() {
	
	// Main Stylesheet
	wp_enqueue_style( 'gulickgroup-style', get_stylesheet_uri() );
	wp_enqueue_style( 'gulickgroup-fa', get_template_directory_uri() . '/css/fontawesome.min.css' );
	wp_enqueue_style( 'gulickgroup-fa-brands', get_template_directory_uri() . '/css/fa-brands.min.css' );
	
	//Add additional scripts
	wp_enqueue_script( 'gulickgroup-bootstrap', get_template_directory_uri() . '/javascripts/bootstrap.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'gulickgroup-site', get_template_directory_uri() . '/javascripts/site.js?4', array( 'jquery' ), null, true );
	
}
add_action( 'wp_enqueue_scripts', 'gulickgroup_scripts' );

?>
