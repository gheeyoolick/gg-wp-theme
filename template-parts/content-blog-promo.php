<?php
/**
 * The template part for blog/article promo
 */
?>

<article class="article-summary">
	
	<?php if ( is_page() ) {
	
		// do nothing
	
	} else if ( has_post_thumbnail() ) { ?>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium_large', array('class' => 'img-fluid promo-image') ); ?></a>
	
	<?php } ?>
	
	<div class="article-text">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<h4><?php the_time('F d, Y'); ?></h4>
		<?php the_excerpt(); ?>
	</div>
	
</article>
