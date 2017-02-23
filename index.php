<?php
/**
 * The main index template, used for announcements
 */

get_header();

//get_template_part( 'template-parts/content', 'header' );

?>

<main class="main-content single-content">
	<div class="container">
		<div class="row row-content">
			<div class="content-main">
				<section class="content-section content-body content-body-index">
					
					<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
					?>
					
					<article class="article-summary">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="meta"><?php the_time('F d, Y'); ?></p>
						<?php the_excerpt(); ?>
					</article>

					<?php
					endwhile;
					?>
					<div class="article-navigation">
					<?php
					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( '< Previous', 'gulickgroup' ),
						'next_text'          => __( 'Next >', 'gulickgroup' ),
					) );
					?>
					</div>
					
				</section>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>