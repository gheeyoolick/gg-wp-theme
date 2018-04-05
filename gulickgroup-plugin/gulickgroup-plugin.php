<?php
/*
Plugin Name: Gulick Group
Description: Theme independent features: custom post types, custom taxonomy, sidebars and widgets, custom nav walker, acf 2 way connections
Version: 1.3
Author: Brian Cordyack
Author URI: http://cordyack.com
*/

// Add Featured Image Support
add_theme_support( 'post-thumbnails' );

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

// Register Sidebars and Widgets
require_once('inc/widgets-sidebars.php');

// Disable default custom meta fields
function remove_custom_meta_boxes() {
	remove_meta_box('postcustom','post','normal');
	remove_meta_box('postcustom','page','normal');
}
add_action('admin_init','remove_custom_meta_boxes');

// Add Gravity Forms visibility field
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

?>