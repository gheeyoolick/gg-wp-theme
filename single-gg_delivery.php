<?php
/**
 * Template for displaying quick deliveries
 */

get_header();

get_template_part( 'template-parts/content', 'header' );

// Get floorplan slideshow
get_template_part( 'template-parts/content', 'floorplan' );

?>

<main id="main-content" class="main-content has-sidebar">
	
	<div class="container">
		
		<div class="row row-content">
			
			<!--Sidebars-->
			<aside class="col-md-4 order-md-last content-sidebar" role="complementary">
				
				<?php
				
				// Get intro (mobile only)
				get_template_part( 'template-parts/content', 'intro' );
				
				// Get price
				get_template_part( 'template-parts/content', 'price' );
				
				// Bullets
				get_template_part( 'template-parts/content', 'bullets' );
				
				// Sidebars
				get_sidebar( 'location' );
				get_sidebar( 'model' );
				get_sidebar( 'contact' );
				
				?>
				
			</aside>
			
			<!--Main Content-->
			<div class="col-md-8 order-md-first content-main">
				
				<?php
				
				// Get intro (desktop)
				get_template_part( 'template-parts/content', 'intro' );
				
				// Get connected content
				$connections = get_field('custom_content_connections', false, false);
				
				// Communities Query
				$the_query = new WP_Query(array(
					'post_type'      	=> 'gg_community',
					'post__in'			=> $connections,
					'orderby'=> 'title',
					'order' => 'ASC',
					'posts_per_page' => -1
				));
				
				if ( ! empty( $connections ) && $the_query->have_posts() ) : ?>
				<section class="section-connected">
					
					<h2 class="heading-section">About This Community</h2>
					<?php
					// The Loop
					while ( $the_query->have_posts() ) : $the_query->the_post();
						get_template_part( 'template-parts/content', 'related-module' );
					endwhile;
					wp_reset_postdata();
					?>
					
				</section>
				<?php endif; ?>
				
				<?php
				// Homes Query
				$the_query2 = new WP_Query(array(
					'post_type'      	=> 'gg_home',
					'post__in'			=> $connections,
					'orderby'=> 'title',
					'order' => 'ASC',
					'posts_per_page' => -1
				));
				if ( ! empty( $connections ) && $the_query2->have_posts() ) : ?>
				<section class="section-connected">
					
					<h2 class="heading-section">About This Home Model</h2>
					<?php
					// The Loop
					while ( $the_query2->have_posts() ) : $the_query2->the_post();
						get_template_part( 'template-parts/content', 'related-module' );
					endwhile;
					wp_reset_postdata();
					?>
					
				</section>
				<?php endif; ?>
				
			</div>
			
		</div>
	</div>
</main>

<?php get_footer(); ?>

