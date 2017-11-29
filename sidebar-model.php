<?php
/**
 * Template for model home sidebar
 */

$model_title = get_field( 'model_title' );
$model_map_url = get_field( 'model_map_src' );
$model_address = get_field( 'model_address' );
$model_details = get_field( 'model_additional_details' );

if ($model_address) {
?>
<div class="sidebar">
	<h4><?php
	if( $model_title ) {
		echo ( $model_title );
	} else {
		echo 'Model Home';
	}
	?></h4>
	<p class="callout icon-directions"><a href="<?php echo esc_html( $model_map_url ); ?>" target="_blank"><?php echo ( $model_address ); ?></a></p>
	<?php if( $model_details ) {
		echo wpautop( $model_details );
	} ?>
</div>
<?php } ?>