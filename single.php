<?php
/**
 * Template for displaying single posts
 */

get_header(); ?>

<main class="main-content single-content">
	<div class="container">
		<div class="row row-content">
			<div class="content-main">
				<section class="content-section content-body content-body-single">

					<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
					?>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<p class="meta">
						<?php the_time('F d, Y'); ?>
						<?php
						if( get_field('location') )
						{
							echo '(' . get_field('location') . ')';
						}
						?>
					</p>
					
					<?php
					// Display the feature image
					if( get_field('feature_image') )
					{
						echo wp_get_attachment_image( get_field('feature_image'), 'full', 'false', array( 'class' => 'wp-post-image', ) );
					}
					
					// Display the content
					the_content();
					?>
					
					<div class="category-description">
						<?php echo category_description( get_category_by_slug('press-release')->term_id ); ?>
					</div>
					
					<?php
					endwhile;
					?>

					<nav class="article-navigation">
						<?php previous_post_link(); ?><?php next_post_link(); ?>
					</nav>

				</section>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>

