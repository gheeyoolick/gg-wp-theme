<?php
/**
 * The template part for a featured section
 */

$sec_title = get_field('section_title');
$sec_desc = get_field('section_description');
$sec_image = get_field('section_image');
$sec_logo = get_field('section_logo');
$sec_link = get_field('section_link');

if ($sec_title) {
?>

<section class="section-collection">
	<div class="container">
		<div class="row justify-content-center no-gutters">
			<header class="col-lg-6 header-collection">
				<h2><?php echo $sec_title; ?></h2>
				<?php echo $sec_desc; ?>
			</header>
		</div>
		<div class="row">
			<div class="col">
				
				<article class="module module-section">
					<div class="module-text">
						<?php 
						if ( $sec_logo ) {
						?>
						<a href="<?php echo $sec_link; ?>">
							<?php echo wp_get_attachment_image($sec_logo, 'large', 'false', array( 'class' => 'img-fluid', ) ); ?>
						</a>
						<?php
						}
						?>
						<p class="module-more"><a href="<?php echo $sec_link; ?>" class="btn btn-primary">learn more</a></p>
					</div>
					<div class="module-image">
						<?php 
						if ( $sec_image ) {
						?>
						<a href="<?php echo $sec_link; ?>">
							<?php echo wp_get_attachment_image($sec_image, 'full', 'false', array( 'class' => 'img-fluid', ) ); ?>
						</a>
						<?php
						}
						?>
					</div>
				</article>
				
			</div>
		</div>
	</div>
</section>

<?php
}
?>
