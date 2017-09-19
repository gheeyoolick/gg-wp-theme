<?php
/*
Plugin Name: Gulick Group
Description: Theme independent features: custom post types, custom taxonomy, sidebars and widgets, custom nav walker, acf 2 way connections
Version: 1.2
Author: Brian Cordyack
Author URI: http://cordyack.com
*/

// Increase JPEG Compression Quality
add_filter('jpeg_quality', function($arg){
	return 95;
});

// Create Custom Post Types
require_once('inc/custom-post-types.php');

// Create Custom Taxonomy
require_once('inc/custom-taxonomy.php');

// Create 2 ways connections for ACF Relationship fields
require_once('inc/acf-connections.php');

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');

// Add IE conditional html5 shim and responsive support to header
function add_ie_html5_shim () {
	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
    echo '<!--[if lt IE 9]>';
    echo '<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
    echo '<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

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

// Disable default custom meta fields
function remove_custom_meta_boxes() {
	remove_meta_box('postcustom','post','normal');
	remove_meta_box('postcustom','page','normal');
}
add_action('admin_init','remove_custom_meta_boxes');

?>