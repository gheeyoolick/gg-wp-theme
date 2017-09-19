<?php
/**
 * The template part for index module
 */

$img = get_field( 'summary_image' );
$img_url = wp_get_attachment_image_url( $img, 'full', false );
$img_srcset = wp_get_attachment_image_srcset( $img, 'full', false );
$img_alt = get_post_meta($img, '_wp_attachment_image_alt', true);
$summary_text = get_field( 'summary_text' );
$subhead = get_field( 'subheader' );

?>
<article class="module-wrapper">
	<figure class="module">
		<img src="<?php echo $img_url; ?>"
			srcset="<?php echo esc_attr( $img_srcset ); ?>"
		 	sizes="(max-width: 786px) calc(100vw - 60px), 33.33vw" alt="<?php echo $img_alt; ?>">
		<figcaption>
			<a href="<?php the_permalink(); ?>" class="module-text">
				<h3><?php the_title(); ?></h3>
				<?php
				if ( $subhead ) {
					echo '<h4>'. $subhead . '</h4>';
				} else if ( has_term( '', 'series' ) ) {
					$terms = get_the_term_list( $post->ID, 'series' );
					$terms = strip_tags( $terms );
					echo '<h4>'. $terms . '</h4>';
				} else {
					echo '';
				}
				?>
				<div class="module-details">
					<?php echo $summary_text; ?>
					<p class="more">Learn More</p>
				</div>
			</a>
		</figcaption>
	</figure>
</article>