<?php
/**
 * The template part for bullets
 */
?>

<?php $bullets = get_field( 'bullets' );

if( $bullets ) { ?>
		
<section class="highlights">
	<div class="container">
		<div class="row">
			<!--Highlights-->
			<?php foreach($bullets as $bullet) {
				if ( isset( $bullet['bullet_text'] ) )
				$text = ( $bullet['bullet_text'] ); ?>
			
				<div class="highlight"><p><?php echo $text; ?></p></div>
			
			<?php } ?>
		</div>
	</div>
</section>

<?php } ?>
