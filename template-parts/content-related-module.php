<?php
/**
 * The template part for index module
 */

$summary_text = get_field( 'summary_text' );
$subhead = get_field( 'subheader' );

?>
<article class="module-wrapper">
	<figure class="module">
		<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'large' );
		}
		?>
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