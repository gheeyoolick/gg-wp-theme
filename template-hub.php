<?php
/**
 * Template Name: Blog Hub
 */

get_header();

get_template_part( 'template-parts/content', 'header-text' );

?>

<main id="main-content" class="main-content has-sidebar sidebar-single">
	
	<div class="container">
		<div class="row row-content">
			
			<div class="col-lg-9 content-main content-hub">
				
				<div class="row">
					
					<section class="col section-hub-feature">
								
						<?php
						// Get all sticky posts
						
						$sticky = get_option( 'sticky_posts' );
						$args1 = array(
							'posts_per_page' => -1,
							'post__in' => $sticky,
						);

						$query = new WP_Query( $args1 );

						if ( $query->have_posts() && ( $sticky ) ) {

							while ( $query->have_posts() ) : $query->the_post();
							
							?>

								<article class="article-sticky">
									<h2 class="h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								</article>

							<?php
							endwhile;
							wp_reset_postdata();
						}
						?>
						
						<article class="article-summary">
							<?php
							// Get the latest post that is not sticky
							
							$args2 = array(
								'posts_per_page' => 1,
								'post__not_in' => $sticky,
							);

							$query = new WP_Query( $args2 );

							if ( $query->have_posts() ) {

								while ( $query->have_posts() ) : $query->the_post();
								?>

									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium_large', array('class' => 'img-fluid') ); ?></a>
								
									<div class="article-text">
										<h2 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<?php
										$cats = get_the_category();
										if ( $cats != null ){
											foreach( $cats as $cat ):
												echo '<h4><a class="article-category" href="'.get_category_link( $cat->term_id ).'">'.$cat->name.'</a></h4>';
											endforeach;
										}
										?>
										<?php the_excerpt(); ?>
									</div>

								<?php
								endwhile;
								wp_reset_postdata();
							}
							?>
							
						</article>
					
					</section>
					
				</div>
				
				<div class="row row-feeds">
				
					<section class="col-md-6 section-hub-news">
							
						<h2 class="heading-section">Latest Posts</h2>

						<?php
						// Get the latest 5 posts minus any sticky and very latest
						$args3 = array(
							'posts_per_page' => 5,
							'offset'		 => 1,
							'post__not_in' => $sticky,
						);
						
						$query3 = new WP_Query( $args3 );

						if ( $query3->have_posts() ) {
							
							while ( $query3->have_posts() ) : $query3->the_post();

								get_template_part( 'template-parts/content', 'blog-promo' );

							endwhile;
							wp_reset_postdata();
						}
						?>

						<article class="article-summary">
							<a class="more-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">see all posts</a>
						</article>

					</section>
						
					<section class="col-md-6 section-hub-social">

						<h2 class="heading-section">Social Media</h2>

						<?php juicer_feed('name=gulickgroup&per=5&pages=1'); ?>

						<article class="article-summary">
							<a class="more-link" href="<?php echo esc_url( home_url( '/' ) ); ?>social-media/">see more social media</a>
						</article>

					</section>

				</div>
				
			</div>
			
			<?php get_sidebar(); ?>
			
		</div>
	</div>
	
</main>

<?php get_footer(); ?>

