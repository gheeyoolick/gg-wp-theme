<?php
/**
 * Template for displaying single posts
 */

get_header(); ?>

<main id="main-content" class="main-content has-sidebar sidebar-single">
	
	<div class="container">
		<div class="row row-content">
			
			<div class="col-md-9 content-main content-single">

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
				?>

				<header class="header-single">
					
					<?php the_title( '<h1>', '</h1>' ); ?>
					<p class="meta">
						<?php the_time('F d, Y'); ?>
						<?php
						if( get_field('location') )
						{
							echo '(' . get_field('location') . ')';
						}
						?>
					</p>

					<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>

				</header>
				
				<?php

				// Display the content
				the_content();
				
				// Display the about text
				$about = get_field( 'co_about', 'option' );
				if ( $about ) {
					echo '<div class="about">' . $about . '</div>';
				}
				
				// End the loop
				endwhile;
				?>

				<nav class="pagination nav-posts">
					<?php previous_post_link( '<span class="prev">%link</span>' ); ?><?php next_post_link( '<span class="next">%link</span>' ); ?>
				</nav>

			</div>
			
			<?php get_sidebar(); ?>
			
		</div>
	</div>
	
</main>

<?php get_footer(); ?>

