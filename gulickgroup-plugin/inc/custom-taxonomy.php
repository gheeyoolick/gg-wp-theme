<?php

// CREATE CUSTOM TAXONOMY

// Hook into the init action and call when it fires
add_action( 'init', 'create_series_hierarchical_taxonomy', 0 );

//create a custom taxonomy name
function create_series_hierarchical_taxonomy() {

	// Add new taxonomy, make it hierarchical like categories
	$labels = array(
		'name' => _x( 'Series', 'taxonomy general name' ),
		'singular_name' => _x( 'Series', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Series' ),
		'all_items' => __( 'All Series' ),
		'parent_item' => __( 'Parent Series' ),
		'parent_item_colon' => __( 'Parent Series:' ),
		'edit_item' => __( 'Edit Series' ), 
		'update_item' => __( 'Update Series' ),
		'add_new_item' => __( 'Add New Series' ),
		'new_item_name' => __( 'New Series Name' ),
		'menu_name' => __( 'Series' ),
	); 	

	// Register the taxonomy
	register_taxonomy('series','gg_home', array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	));

}

?>