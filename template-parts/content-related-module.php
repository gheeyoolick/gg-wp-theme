<?php
/**
 * The template part for index module
 */

$img = get_field( 'summary_image' );
$img_url = wp_get_attachment_image_url( $img, 'full', false );
$img_srcset = wp_get_attachment_image_srcset( $img, 'full', false );
$img_alt = get_post_meta($img, '_wp_attachment_image_alt', true);
$summary_text = get_field( 'summary_text' );

?>
<article class="module-wrapper">
	<figure class="module">
		<img src="<?php echo $img_url; ?>"
			srcset="<?php echo esc_attr( $img_srcset ); ?>"
		 	sizes="(max-width: 786px) calc(100vw - 60px), 33.33vw" alt="<?php echo $img_alt; ?>">
		<figcaption class="module-text">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="module-details">
				<?php echo $summary_text; ?>
				<p class="more"><a href="<?php the_permalink(); ?>">Learn More</a></p>
			</div>
		</figcaption>
	</figure>
</article>