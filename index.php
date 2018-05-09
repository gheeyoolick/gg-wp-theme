<?php
/**
 * The main index template, used for blog
 */

get_header();

get_template_part( 'template-parts/content', 'header-text' );

?>

<main class="main-content single-content">
	<div class="container">
		<div class="row row-content">
			<div class="content-main">
				<section class="content-section content-body content-body-index">
					
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
						'prev_text'          => __( 'Previous', 'gulickgroup' ),
						'next_text'          => __( 'Next', 'gulickgroup' ),
					) );
					?>
					
				</section>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>