<?php
/**
 * Template for displaying pages
 */

get_header();

get_template_part( 'template-parts/content', 'header' );

?>

<main id="main-content" class="main-content has-sidebar sidebar-single">
	
	<div class="container">
		<div class="row row-content">
			
			<div class="col-lg-9 content-main content-single">
				
				<?php
				
				get_template_part( 'template-parts/content', 'intro' );

				// Start the Loop.
				if ( have_posts() ) : while ( have_posts() ) : the_post();

				the_content();

				endwhile; else : ?>
					<p>Sorry, there is no content for this page.</p>
				
				<?php endif; ?>
				
			</div>
			
			<?php get_sidebar(); ?>
			
		</div>
	</div>
	
</main>

<?php get_footer(); ?>