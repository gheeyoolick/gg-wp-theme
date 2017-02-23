<?php
/**
 * The template part for top intro
 */
?>

<?php $intro_text = get_field( 'intro_text' );
if( $intro_text ) { ?>
<div class="row row-intro">
	<!--Intro -->
	<div class="intro">
		<?php echo $intro_text; ?>
	</div>
	<?php $quote = get_field( 'quote_text' );
	if( $quote ) { ?>
		<!--Quote -->
		<div class="intro-details quote">
			<section class="quote-text">
				<?php echo $quote; ?>
			</section>
			<section class="quote-author">
				<p><?php the_field( 'quote_author' ); ?></p>
			</section>
		</div>
	<?php } ?>
	
	<?php
	$price_header = get_field( 'price_label' );
	$price = get_field( 'price' );
	$mris_header = get_field( 'mris_label' );
	$mris = get_field( 'mris' );
	if( $price ) { ?>
		<!--Details-->
		<div class="intro-details details">
			<?php if( $price_header ) {
				echo '<h4>' . $price_header . '</h4>';
			}
			if( $price ) {
				echo '<p class="price">&#36;' . $price . '</p>';
			}
			if( $mris_header ) {
				echo '<h4>' . $mris_header . '</h4>';
				echo '<p class="mris">MRIS ID: ' . $mris . '</p>';
			}
			?>
		</div>
	<?php } ?>
</div>
<?php } ?>
