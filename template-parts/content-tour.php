<?php
/**
 * The template part for virtual tour button
 */
?>

<?php
		
$tour_text = get_field( 'virtual_tour_text' );
$tour_link = get_field( 'virtual_tour_link' );

if( $tour_text  ) { ?>

	<div class="row row-tour">
		<!--Virtual tour button -->
		<a href="<?php echo $tour_link; ?>" class="tour"><span><?php echo $tour_text; ?></span></a>
	</div>

<?php
}
?>
