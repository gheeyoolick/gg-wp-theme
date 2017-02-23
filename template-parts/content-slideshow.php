<?php
/**
 * The template part for header slideshow
 */

$header_slideshow = get_field( 'header_background_slideshow' );
if( $header_slideshow ) : ?>

<div id="header-carousel" class="header-carousel carousel slide" data-ride="carousel" data-interval="false">
	
	<div class="carousel-inner" role="listbox">
	
	<?php
		$i=1;
		foreach ( $header_slideshow as $slide ):
		if($i==1) { ?>
			<div class="item active">
			<?php } else { ?>
				<div class="item">
			<?php } $i++; ?>
			<?php
				echo wp_get_attachment_image($slide['ID'], 'full'); ?>
				<div class="carousel-caption">
					<?php echo $slide['caption']; ?> (<a href="<?php echo esc_url( home_url( '/' ) ); ?>photo-disclaimer/" class="disclaimer">Photo Disclaimer</a>)
				</div>
			</div>
	<?php endforeach; ?>

	</div>
		
	<!-- Controls -->
	<a class="left carousel-control" href="#header-carousel" role="button" data-slide="prev">
		<span class="arrow-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#header-carousel" role="button" data-slide="next">
		<span class="arrow-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	
</div>

<?php endif; ?>
