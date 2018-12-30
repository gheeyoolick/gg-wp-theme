<?php
/**
 * The template part for bullets
 */

$bullets = get_field( 'bullets' );
$bullets_label = get_field( 'bullets_label' );

if( $bullets ) {

	if ($bullets_label) {
		echo '<h4 class="heading-section">' . $bullets_label . '</h4>';
	}
?>
		
<div class="row bullets">
	
	<?php
	
	foreach($bullets as $bullet) {
	
		if ( isset( $bullet['bullet_text'] ) )
		$text = ( $bullet['bullet_text'] );
		if ( isset( $bullet['bullet_icon'] ) )
		$icon = ( $bullet['bullet_icon'] );

	?>
		<div class="col-4 col-md-6 col-xl-4 bullet">
			<?php
			if ($icon) { echo '<i class="' . $icon . '"></i>'; }
			echo '<p>' . $text . '</p>';
			?>
		</div>

	<?php
	}
	?>
</div>

<?php } ?>
