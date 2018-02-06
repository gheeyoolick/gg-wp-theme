<?php
/**
 * Template for displaying homes
 */

get_header();

get_template_part( 'template-parts/content', 'header' );

get_template_part( 'template-parts/content', 'bullets' );

?>

<main class="main-content">
	<div class="container">
		
		<?php
		
		get_template_part( 'template-parts/content', 'tour' );
		
		get_template_part( 'template-parts/content', 'intro' );
		
		get_template_part( 'template-parts/content', 'floorplan' );
		
		?>
		
		<div class="row row-content">
			<!--Main Content-->
			<div class="content-main">
				
				<?php
				// Get connected content
				$connections = get_field('custom_content_connections', false, false);
				
				// Quick Deliveries Query
				$the_query = new WP_Query(array(
					'post_type'      	=> 'gg_delivery',
					'post__in'			=> $connections,
					'orderby'=> 'title',
					'order' => 'ASC',
					'posts_per_page' => -1
				));
				if ( ! empty( $connections ) && $the_query->have_posts() ) : ?>
				<section class="content-section">
					<h2>Quick Deliveries</h2>
					<div class="row">
					<?php
					// The Loop
					while ( $the_query->have_posts() ) : $the_query->the_post();
						get_template_part( 'template-parts/content', 'related-module' );
					endwhile;
					wp_reset_postdata(); ?>
					</div>
				</section>
				<?php endif; ?>
				
				<?php
				// Communities Query
				$the_query2 = new WP_Query(array(
					'post_type'      	=> 'gg_community',
					'post__in'			=> $connections,
					'orderby'=> 'title',
					'order' => 'ASC',
					'posts_per_page' => -1
				));
				if ( ! empty( $connections ) && $the_query2->have_posts() ) : ?>
				<section class="content-section">
					<h2>Communities Featuring This Model</h2>
					<div class="row">
					<?php
					// The Loop
					while ( $the_query2->have_posts() ) : $the_query2->the_post();
						get_template_part( 'template-parts/content', 'related-module' );
					endwhile;
					wp_reset_postdata(); ?>
					</div>
				</section>
				<?php endif; ?>
				
			</div>
			<!--Sidebars-->
			<aside class="content-sidebar" role="complementary">
				<?php get_sidebar( 'contact' ); ?>
				<?php if ( is_active_sidebar( 'sidebar-3' )  ) : ?>
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				<?php endif; ?>
			</aside>
		</div>
	</div>
</main>

<?php get_footer(); ?>

