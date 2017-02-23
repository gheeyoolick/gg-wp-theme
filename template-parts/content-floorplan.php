<?php
/**
 * The template part for floorplan slideshow
 */

$floorplan_slideshow = get_field( 'floorplan_slides' );
if( $floorplan_slideshow ) : ?>

<div class="row row-floorplan">
	<div id="floorplan-carousel" class="floorplan-carousel carousel slide" data-ride="carousel" data-interval="false">

		<!-- Slides -->
		<div class="carousel-inner" role="listbox">
			
			<?php
				$i=1;
				foreach ( $floorplan_slideshow as $slide ):
				if($i==1) { ?>
					<div class="item active">
					<?php } else { ?>
						<div class="item">
					<?php } $i++; ?>
					<?php
						echo wp_get_attachment_image($slide['ID'], 'full'); ?>
						<div class="carousel-caption">
							<?php echo $slide['caption']; ?>
						</div>
					</div>
			<?php endforeach; ?>
			
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#floorplan-carousel" role="button" data-slide="prev">
			<span class="arrow-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#floorplan-carousel" role="button" data-slide="next">
			<span class="arrow-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

	</div>
</div>
	
<?php endif; ?>
