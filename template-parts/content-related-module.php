<?php
/**
 * The template part for index module
 */

$summary_text = get_field( 'summary_text' );
$subhead = get_field( 'subheader' );

?>
<article class="module">
	<div class="module-image">
		<?php 
		if ( has_post_thumbnail() ) {
		?>
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
		</a>
		<?php
		}
		?>
	</div>
	<div class="module-text">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php
		if ( $subhead ) {
			echo '<h4>' . $subhead . '</h4>';
		} else if ( has_term( '', 'series' ) ) {
			$terms = get_the_term_list( $post->ID, 'series' );
			$terms = strip_tags( $terms );
			echo '<h4>' . $terms . '</h4>';
		} else {
			echo '';
		}
		?>
		<div class="module-summary">
			<?php echo $summary_text; ?>
		</div>
		<p class="module-more"><a href="<?php the_permalink(); ?>" class="btn btn-primary">learn more</a></p>
	</div>
</article>