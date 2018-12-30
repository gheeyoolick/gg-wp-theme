<?php
// Create Contact Widget
class gulickgroup_widgets_contact extends WP_Widget {
    function __construct() {
		parent::__construct(
			// base ID of the widget
			'gulickgroup_widgets_contact',
			// name of the widget
			__('Gulick Group Contact', 'gulickgroup' ),
			// widget options
			array (
				'description' => __( 'Phone and Team Members', 'gulickgroup' )
			)
		);
	}
	
	function form( $instance ) { }
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		return $instance;
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		// widget ID with prefix for use in ACF API functions
		$widget_id = 'widget_' . $args['widget_id'];
		
		// Get field values from widget
		$phone = get_field( 'contact_phone', $widget_id ) ? get_field( 'contact_phone', $widget_id ) : '';
		$team = get_field( 'contact_details', $widget_id ) ? get_field( 'contact_details', $widget_id ) : '';
		
		// Get field values from page overrides if available
		$phone_override = get_field( 'contact_phone' );
		$team_override = get_field( 'contact_details' );

		echo $before_widget;
		
		if ( $phone_override ) {
			echo '<h4 class="heading-section">Call Us</h4>';
			echo '<p class="callout"><a href="tel:' . esc_html($phone_override) . '" >' . esc_html($phone_override) . '<i class="fas fa-phone"></i></a></p>';
		} else if ( $phone ) {
			echo '<h4 class="heading-section">Call Us</h4>';
			echo '<p class="callout"><a href="tel:' . esc_html($phone) . '" >' . esc_html($phone) . '<i class="fas fa-phone"></i></a></p>';
		}
		
		if ( $team_override ) {
			echo '<h4 class="heading-section">Sales Team</h4>';
			echo wpautop( $team_override );
		} else if ( $team ) {
			echo '<h4 class="heading-section">Sales Team</h4>';
			echo wpautop( $team );
		}
		
		echo $after_widget;
		
	}  
}

// Register
function gulickgroup_widgets_init() {
	
	register_sidebar( array (
		'name' => __( 'Contact Sidebar', 'gulickgroup' ),
		'id' => 'sidebar-2',
		'description' => __( 'Common sidebar for Communities, Homes & Quick Deliveries', 'gulickgroup' ),
		'before_widget' => '<div class="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="heading-section">',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array (
		'name' => __( 'News Sidebar', 'gulickgroup' ),
		'id' => 'sidebar-1',
		'description' => __( 'Common sidebar for all Posts and Pages', 'gulickgroup' ),
		'before_widget' => '<div class="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="heading-section">',
		'after_title' => '</h4>',
	) );
	
    register_widget( 'gulickgroup_widgets_contact' );
	
}
add_action( 'widgets_init', 'gulickgroup_widgets_init' );

?>