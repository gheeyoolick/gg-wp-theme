<?php
/**
 * The template part for header slideshow
 */

$header_slideshow = get_field( 'header_background_slideshow' );
if( $header_slideshow ) : ?>

<div id="header-carousel" class="header-carousel carousel slide carousel-fade" data-ride="carousel">
	
	 <!-- Indicators -->
	<ol class="carousel-indicators">

		<?php
		$c=0;
		foreach ( $header_slideshow as $slide ):
		?>
			<li data-target="#header-carousel" data-slide-to="<?php echo $c; ?>" <?php if($c==0) { ?>class="active"<?php } ?> ></li>
		<?php
		$c++;
		endforeach;
		?>
		
		<li class="button"><a href="#" class="btn btn-outline-light show-caption">captions</a></li>
				
	</ol>
	
	<div class="carousel-inner">
	
	<?php
		$i=1;
		foreach ( $header_slideshow as $slide ):
		if($i==1) { ?>
			<div class="carousel-item active">
			<?php } else { ?>
				<div class="carousel-item">
			<?php } $i++; ?>
			<?php
				echo wp_get_attachment_image($slide['ID'], 'full', 'false', array( 'class' => 'img-fluid', ) ); ?>
				<div id="carousel-caption" class="carousel-caption">
					<?php echo $slide['caption']; ?> (<a href="<?php echo esc_url( home_url( '/' ) ); ?>photo-disclaimer/" class="disclaimer">Disclaimer</a>)
				</div>
			</div>
	<?php endforeach; ?>

	</div>
		
	<!-- Controls -->
	<a class="carousel-control carousel-control-prev" href="#header-carousel" role="button" data-slide="prev" aria-label="Previous">
		<i class="far fa-chevron-left" aria-hidden></i>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control carousel-control-next" href="#header-carousel" role="button" data-slide="next" aria-label="Next">
		<i class="far fa-chevron-right" aria-hidden></i>
		<span class="sr-only">Next</span>
	</a>
		
</div>

<?php endif; ?>
