<?php
/**
 * The template part for price and mris
 */

$sold = get_field( 'price_sold' );
$price_header = get_field( 'price_label' );
$price = get_field( 'price' );
$mris_header = get_field( 'mris_label' );
$mris = get_field( 'mris' );

if( $sold == 1 ) {
	echo '<p class="sold">Sold!</p>';

} else if( $price ) { ?>

	<!--Details-->
	<div class="details">
		<?php
		if( $price_header ) {
			echo '<h4 class="heading-section">' . $price_header . '</h4>';
		}
		if( $price ) {
			echo '<p class="price">&#36;' . $price . '</p>';
		}
		if( $mris_header ) {
			echo '<h4 class="heading-section">' . $mris_header . '</h4>';
			echo '<p class="mris">MRIS ID: ' . $mris . '</p>';
		}
		?>
	</div>

<?php
}
?>
