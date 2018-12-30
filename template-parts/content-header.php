<?php
/**
 * The template part for page headers
 */
?>

<?php
$header_slideshow = get_field( 'header_background_slideshow' );
$header_image = get_field( 'header_background_image' );
$header_map = get_field( 'header_background_map' );
$header_map_name = get_field( 'header_background_map_name' );
$header_map_two = get_field( 'header_background_map_two' );
$header_map_name_two = get_field( 'header_background_map_name_two' );
?>

<?php if( $header_slideshow ) { ?>

<div class="hero">
	<?php get_template_part( 'template-parts/content', 'slideshow' ); ?>
	<?php get_template_part( 'template-parts/content', 'header-text' ); ?>
</div>

<?php } else if( $header_image ) { ?>

<div class="hero">
	<?php
	echo wp_get_attachment_image( $header_image, 'full', 'false', array( 'class' => 'img-fluid', ) );
	get_template_part( 'template-parts/content', 'header-text' );
	?>
</div>

<?php } else if( $header_map != '' ) { ?>

<div class="hero">
	
	<?php if( $header_map_two != '' ) { ?>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item"><a class="nav-link active" href="#map1" role="tab" id="map1tab" data-toggle="tab" aria-selected="true"><?php echo $header_map_name; ?></a></li>
			<li class="nav-item"><a class="nav-link" href="#map2" role="tab" id="map2tab" data-toggle="tab" aria-selected="false"><?php echo $header_map_name_two; ?></a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade show active" id="map1" aria-labelledby="map1tab">
				<div class="map">
					<iframe src="<?php echo $header_map; ?>" width="425" height="350" frameborder="0" style="border:0" scrolling="no" allowfullscreen></iframe>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="map2" aria-labelledby="map2tab">
				<div class="map">
					<iframe src="<?php echo $header_map_two; ?>" width="425" height="350" frameborder="0" style="border:0" scrolling="no" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<?php get_template_part( 'template-parts/content', 'header-text' ); ?>
	
	<?php } else { ?>
	
		<div class="map">
			<iframe src="<?php echo $header_map; ?>" width="425" height="350" frameborder="0" style="border:0" scrolling="no" allowfullscreen></iframe>
		</div>
		<?php get_template_part( 'template-parts/content', 'header-text' ); ?>
	
	<?php } ?>
	
</div>

<?php } else { ?>

<?php get_template_part( 'template-parts/content', 'header-text' ); ?>

<?php } ?>
