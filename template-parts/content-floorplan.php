<?php
/**
 * The template part for floorplan slideshow
 */

$floorplan_slideshow = get_field( 'floorplan_slides' );
if( $floorplan_slideshow ) : ?>

<div class="row row-floorplan">
	<div id="floorplan-carousel" class="floorplan-carousel carousel slide" data-ride="carousel" data-interval="false">
		
		<!-- Indicators -->
		<ol class="carousel-indicators">

			<?php
			$c=0;
			foreach ( $floorplan_slideshow as $slide ):
			?>
			<li data-target="#floorplan-carousel" data-slide-to="<?php echo $c; ?>" <?php if($c==0) { ?>class="active"<?php } ?> ></li>
			<?php
			$c++;
			endforeach;
			?>

		</ol>

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
					<div id="floorplan-caption" class="floorplan-caption">
						<?php
							if ($slide['title'] != '') { echo '<h3>' . $slide['title'] . '</h3>'; }
							if ($slide['caption'] != '') { echo '<p>' . $slide['caption'] . '</p>'; }
						?>
					</div>
					<?php echo wp_get_attachment_image($slide['ID'], 'full'); ?>
					</div>
			<?php endforeach; ?>
			<div class="floorplan-disclaimer">
				<?php
				if ( is_active_sidebar( 'floorplan-disclaimer' )  ) :
					dynamic_sidebar( 'floorplan-disclaimer' );
				endif;
				?>
			</div>
			
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
