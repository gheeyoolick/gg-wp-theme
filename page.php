<?php
/**
 * Template for displaying pages
 */

get_header();

get_template_part( 'template-parts/content', 'header' );

?>

<main class="main-content single-content">
	<div class="container">
		<?php get_template_part( 'template-parts/content', 'intro' ); ?>
		<div class="row row-content">
			<div class="content-main">
				<section class="content-section content-body">

					<?php
					// Start the Loop.
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					
					the_content();
					
					endwhile; else : ?>
						<p>Sorry, there is no content for this page.</p>
					<?php endif; ?>

				</section>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>