<?php

if ( ! function_exists( 'gulickgroup_setup' ) ) :

// Set up theme defaults
function gulickgroup_setup() {
	
	// Title tag
	add_theme_support( 'title-tag' );
	
	// Add nav menus
	register_nav_menus( array(
		'primary'   => __( 'Navigation menu', 'gulickgroup' ),
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
	add_editor_style( array( 'css/editor-styles.css' ) );
	
}
endif;
add_action( 'after_setup_theme', 'gulickgroup_setup' );

// Enqueue scripts and styles
function gulickgroup_scripts() {
	
	// Add Typography.com fonts
	wp_enqueue_style( 'gulickgroup-fonts', '//cloud.typography.com/7290236/7189012/css/fonts.css', array(), '', 'all' );
	
	// Add Font Awesome
	//wp_enqueue_style( 'gulickgroup-fontawesome', '//pro.fontawesome.com/releases/v5.5.0/css/all.css', array(), '5.5.0', 'all' );
	
	// Set version for site css and js
	$code_ver = '2.1.6';
	
	// Add Main Stylesheets
	wp_enqueue_style( 'gulickgroup-style-main', get_template_directory_uri() . '/css/main.css', false, $code_ver, 'all' );
	wp_enqueue_style( 'gulickgroup-style-print', get_template_directory_uri() . '/css/print.css', false, $code_ver, 'print' );
	
	// Add Scripts
	wp_enqueue_script( 'gulickgroup-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ), '4.1.3', true );
	wp_enqueue_script( 'gulickgroup-site', get_template_directory_uri() . '/js/site.js', array( 'jquery' ), $code_ver, true);
	
	// Add Font Awesome Kit
	wp_enqueue_script( 'gulickgroup-fontawesome', 'https://kit.fontawesome.com/88c38addbb.js');
	
}
add_action( 'wp_enqueue_scripts', 'gulickgroup_scripts' );

?>
