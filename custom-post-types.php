<?php

// Create Custom Post Types
add_action( 'init', 'create_post_type' );
function create_post_type() {
	// Create Communities
	register_post_type( 'gg_community',
		array(
			'labels' => array(
				'name' => __( 'Communities' ),
				'singular_name' => __( 'Community' ),
				'add_new'            => _x( 'Add New', 'Community' ),
				'add_new_item'       => __( 'Add New Community' ),
				'edit_item'          => __( 'Edit Community' ),
				'new_item'           => __( 'New Community' ),
				'all_items'          => __( 'All Communities' ),
				'view_item'          => __( 'View Community' ),
				'search_items'       => __( 'Search Communities' ),
				'not_found'          => __( 'No communities found' ),
				'not_found_in_trash' => __( 'No communities found in the Trash' ),
				'parent_item_colon'  => '',
    			'menu_name'          => 'Communities'
			),
		'taxonomies' => array('category'),
		'public' => true,
		'has_archive' => false,
		'menu_icon'   => 'dashicons-location-alt',
		'menu_position' => 20,
		'rewrite' => array('slug' => 'communities'),
		'supports' => array( 'title', 'thumbnail', 'revisions' )
		)
	);
	// Create Homes
	register_post_type( 'gg_home',
		array(
			'labels' => array(
				'name' => __( 'Homes' ),
				'singular_name' => __( 'Home' ),
				'add_new'            => _x( 'Add New', 'Home' ),
				'add_new_item'       => __( 'Add New Home' ),
				'edit_item'          => __( 'Edit Home' ),
				'new_item'           => __( 'New Home' ),
				'all_items'          => __( 'All Homes' ),
				'view_item'          => __( 'View Home' ),
				'search_items'       => __( 'Search Homes' ),
				'not_found'          => __( 'No homes found' ),
				'not_found_in_trash' => __( 'No homes found in the Trash' ),
				'parent_item_colon'  => '',
    			'menu_name'          => 'Homes'
			),
		'taxonomies' => array('category'),
		'public' => true,
		'has_archive' => false,
		'menu_icon'   => 'dashicons-admin-home',
		'menu_position' => 20,
		'rewrite' => array('slug' => 'homes'),
		'supports' => array( 'title', 'thumbnail', 'revisions' )
		)
	);
	// Create Quick Deliveries
	register_post_type( 'gg_delivery',
		array(
			'labels' => array(
				'name' => __( 'Quick Deliveries' ),
				'singular_name' => __( 'Quick Delivery' ),
				'add_new'            => _x( 'Add New', 'Quick Delivery' ),
				'add_new_item'       => __( 'Add New Quick Delivery' ),
				'edit_item'          => __( 'Edit Quick Delivery' ),
				'new_item'           => __( 'New Quick Delivery' ),
				'all_items'          => __( 'All Quick Deliveries' ),
				'view_item'          => __( 'View Quick Delivery' ),
				'search_items'       => __( 'Search Quick Deliveries' ),
				'not_found'          => __( 'No Quick Deliveries found' ),
				'not_found_in_trash' => __( 'No Quick Deliveries found in the Trash' ),
				'parent_item_colon'  => '',
    			'menu_name'          => 'Quick Deliveries'
			),
		'taxonomies' => array('category'),
		'public' => true,
		'has_archive' => false,
		'menu_icon'   => 'dashicons-admin-home',
		'menu_position' => 20,
		'rewrite' => array('slug' => 'quick-deliveries'),
		'supports' => array( 'title', 'thumbnail', 'revisions' )
		)
	);
}

?>
