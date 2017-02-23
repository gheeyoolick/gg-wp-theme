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
	<?php if( $map_image ) { ?>
		<figure class="promo-image map">
			<a href="<?php echo esc_html( $map_url ); ?>" class="google_map" target="_blank"><img src="<?php echo esc_html( $map_image ); ?>" /></a>
		</figure>
	<?php }
	if( $address ) { ?>
		<h4>Location</h4>
		<p class="callout icon-directions"><a href="<?php echo esc_html( $map_url ); ?>" target="_blank"><?php echo ( $address ); ?></a></p>
	<?php }
	if( $location_details ) {
		echo wpautop( $location_details );
	} ?>
</div>
<?php } ?>