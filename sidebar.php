<?php
/**
 * Template for the sidebar containing the main widget area
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside class="col-lg-3 content-sidebar" role="complementary">
		<?php 
		get_sidebar( 'contact' );
		dynamic_sidebar( 'sidebar-1' );
		?>
	</aside>
<?php endif; ?>
