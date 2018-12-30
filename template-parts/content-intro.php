<?php
/**
 * The template part for top intro
 */
?>

<?php
$intro_tagline = get_field( 'intro_tagline' );
$intro_text = get_field( 'intro_text' );
if( $intro_text ) { ?>
	<!--Intro -->
	<div class="intro">
		<?php
			if ( $intro_tagline ) {
				echo '<h2>' . $intro_tagline . '</h2>';
			}
			echo $intro_text;
		?>
	</div>
<?php } ?>
