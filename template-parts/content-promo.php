<?php
/**
 * The template part for promo tab button
 */
?>

<?php
		
$promo_text = get_field( 'promo_text' );
$promo_link = get_field( 'promo_link' );
$promo_icon = get_field( 'promo_icon' );

if( $promo_text ) { ?>

	<!--Promo button -->
	<a href="<?php echo $promo_link; ?>" class="promo">
		<?php
		if ($promo_icon) {
			echo '<i class="' . $promo_icon . '"></i>';
		} else {
			echo '<i class="fas fa-arrow-circle-right"></i>';
		}
		echo $promo_text;
		?>
	</a>

<?php
}
?>
