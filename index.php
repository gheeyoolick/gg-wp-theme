<?php
/**
 * The main index template, used for blog
 */

get_header();

get_template_part( 'template-parts/content', 'header-text' );

?>

<main id="main-content" class="main-content has-sidebar sidebar-single">
	
	<div class="container">
		<div class="row row-content">
			
			<div class="col-md-9 content-main">
					
					<?php
					// Start the Loop.
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					
					get_template_part( 'template-parts/content', 'blog-promo' );

					endwhile; else : ?>
					
					<article class="article-summary">
						<h3>0 Results</h3>
						<p>Sorry, no content matched your criteria.</p>
					</article>
					
					<?php endif; ?>
					
					<?php
					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'previous', 'gulickgroup' ),
						'next_text'          => __( 'next', 'gulickgroup' ),
					) );
					?>
					
			</div>
			
			<?php get_sidebar(); ?>
			
		</div>
	</div>
	
</main>

<?php get_footer(); ?>