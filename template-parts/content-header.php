<?php
/**
 * The template part for page headers
 */
?>

<?php
$header_slideshow = get_field( 'header_background_slideshow' );
$header_image = get_field( 'header_background_image' );
$header_map = get_field( 'header_background_map' );
?>

<?php if( $header_slideshow ) { ?>

<div class="hero">
	<?php get_template_part( 'template-parts/content', 'slideshow' ); ?>
	<?php get_template_part( 'template-parts/content', 'header-text' ); ?>
</div>

<?php } else if( $header_image ) { ?>

<div class="hero">
	<?php
	echo wp_get_attachment_image( $header_image, 'full', 'false', array( 'class' => 'hero-img', ) );
	get_template_part( 'template-parts/content', 'header-text' );
	?>
</div>

<?php } else if( $header_map != '' ) { ?>

<div class="hero map">
	<iframe src="<?php echo $header_map; ?>" width="425" height="350" frameborder="0" style="border:0" scrolling="no" allowfullscreen></iframe>
	<?php get_template_part( 'template-parts/content', 'header-text' ); ?>
</div>

<?php } else { ?>

<?php get_template_part( 'template-parts/content', 'header-text' ); ?>

<?php } ?>
