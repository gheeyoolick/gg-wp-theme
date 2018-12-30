<?php
/**
 * Template for location sidebar
 */

$map_url = get_field( 'location_map_src' );
$map_image = get_field( 'location_map_image_src' );
$address = get_field( 'location_address' );
$location_details = get_field( 'location_additional_details' );

if ($map_image || $address) {
?>
<div class="sidebar">
	<h4 class="heading-section">Location</h4>
	<?php if( $map_image ) { ?>
		<figure class="promo-image map">
			<a href="<?php echo esc_html( $map_url ); ?>" class="google_map" target="_blank"><img src="<?php echo esc_html( $map_image ); ?>" /></a>
		</figure>
	<?php }
	if( $address ) { ?>
		<p class="callout"><a href="<?php echo esc_html( $map_url ); ?>" target="_blank"><?php echo ( $address ); ?><i class="fas fa-compass fa-lg"></i></a></p>
	<?php }
	if( $location_details ) {
		echo wpautop( $location_details );
	} ?>
</div>
<?php } ?>