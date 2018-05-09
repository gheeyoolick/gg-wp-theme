<?php
/**
 * The template part for blog/article promo
 */
?>

<article class="article-summary">
	
	<?php if ( is_page() ) {
	
	} else if ( has_post_thumbnail() ) { ?>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium_large', array('class' => '') ); ?></a>
	
	<?php }?>
	
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<p class="meta"><?php the_time('F d, Y'); ?></p>
	<?php the_excerpt(); ?>
	
</article>
