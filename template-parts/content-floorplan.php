<?php
/**
 * The template part for floorplan slideshow
 */

$floorplan_slideshow = get_field( 'floorplan_slides' );
if( $floorplan_slideshow ) : ?>

<section class="floorplan">
	<div class="container">
		<div class="row">
			<div class="col">
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
					<div class="carousel-inner">

						<?php
							$i=1;
							foreach ( $floorplan_slideshow as $slide ):
							if($i==1) { ?>
								<div class="carousel-item active">
								<?php } else { ?>
									<div class="carousel-item">
								<?php } $i++; ?>
								<div id="floorplan-caption" class="floorplan-caption">
									<?php
										if ($slide['title'] != '') { echo '<h3>' . $slide['title'] . '</h3>'; }
										if ($slide['caption'] != '') { echo '<p>' . $slide['caption'] . '</p>'; }
									?>
								</div>
								<?php echo wp_get_attachment_image($slide['ID'], 'full', 'false', array( 'class' => 'img-fluid', ) ); ?>
								</div>
						<?php endforeach; ?>
									
						<div class="floorplan-disclaimer">
							<?php
							$disclaimer = get_field( 'floorplan_disclaimer', 'option' );
							if ($disclaimer) {
								echo $disclaimer;
							}
							?>
						</div>

					</div>

					<!-- Controls -->
					<a class="carousel-control carousel-control-prev" href="#floorplan-carousel" role="button" data-slide="prev" aria-label="Previous">
						<i class="far fa-chevron-left" aria-hidden></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control carousel-control-next" href="#floorplan-carousel" role="button" data-slide="next" aria-label="Next">
						<i class="far fa-chevron-right" aria-hidden></i>
						<span class="sr-only">Next</span>
					</a>

				</div>
			</div>
		</div>
	</div>
</section>
	
<?php endif; ?>
