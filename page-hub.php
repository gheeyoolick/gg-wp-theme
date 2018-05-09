<?php
/**
 * Template Name: News & Media Hub
 */

get_header();

get_template_part( 'template-parts/content', 'header-text' );

?>

<main class="main-content single-content">
	<div class="container">
		<div class="row row-content">
			<div class="content-main content-hub">
				
				<div class="row">
					<section class="content-section content-body col-sm-12 hub-feature">
				
							<div class="feature">
								
								<?php
								$args1 = array(
									'posts_per_page' => 1,
								);
								
								$blogpost = get_posts( $args1 );
								foreach ( $blogpost as $post ) : setup_postdata( $post );
								?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium_large', array('class' => '') ); ?></a>
									<h2 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php the_excerpt(); ?>
								
								<?php
								endforeach; 
								wp_reset_postdata();
								?>
								
							</div>
					
					</section>
				</div>
				
				<div class="row row-feeds">
				
					<section class="content-section content-body col-md-6 hub-news">
							
						<h2>Announcements</h2>

						<?php
						$args2 = array(
							'posts_per_page' => 5,
							'offset'		 => 1,
						);

						$blogposts = get_posts( $args2 );
						foreach ( $blogposts as $post ) : setup_postdata( $post );

							get_template_part( 'template-parts/content', 'blog-promo' );

						endforeach; 
						wp_reset_postdata();
						?>

						<article class="article-summary">
							<a class="more-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">See More Announcements</a>
						</article>

					</section>
						
					<section class="content-section content-body col-md-6 hub-social">

						<h2>Social Media</h2>

						<?php juicer_feed('name=gulickgroup&per=5&pages=1'); ?>

						<article class="article-summary">
							<a class="more-link" href="<?php echo esc_url( home_url( '/' ) ); ?>social-media/">See More Social Media</a>
						</article>

					</section>

				</div>
				
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>

