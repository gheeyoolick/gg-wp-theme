<?php
/**
 * Template Name: Features Index
 */

get_header();

get_template_part( 'template-parts/content', 'header' );

?>

<main class="main-content">
	<div class="container">
		<?php get_template_part( 'template-parts/content', 'intro' );
		$promo_title = get_field('promo_title');
		$promo_content = get_field('promo_content');
		
		if( have_rows('feature_collection') ): ?>
		<div class="row row-content">
			<div class="content-main <?php if ( $promo_title || $promo_content ) { echo ''; } else { echo 'full'; } ?>">
				<?php while ( have_rows('feature_collection') ) : the_row();
					$title = get_sub_field('collection_title');
					$desc = get_sub_field('collection_description');
					$content_select = get_sub_field('content_type');
					$category = get_sub_field('category');
					$series = get_sub_field('series');
				?>
				
				<section class="content-section">
					<div class="row">
						
						<article class="module-wrapper">
							<figure class="module title">
								<img src="<?php echo get_template_directory_uri(); ?>/images/house-thumbnail-placeholder.png">
								<figcaption class="title-text">
									<h2><?php echo $title; ?></h2>
									<?php echo $desc; ?>
								</figcaption>
							</figure>
						</article>
						
						<?php
						$content1 = ' ';
						$content2 = ' ';
						$content3 = ' ';
						$i = 0;
						foreach( $content_select as $v ):
						$i++;
						$var = "content".$i;
						$$var = $v;
						endforeach;
						?>
						
					<?php $c = 0; ?>
						
						<?php
						$series_query = '';
						if ( $series ) {
							$series_query = array(
								'taxonomy' => 'series',
								'field' => 'id',
								'terms' => $series,
								'include_children' => false
							);
						}
						$args = array(
							'tax_query' => array( $series_query ),
							'post_type' => array( $content1,$content2,$content3 ),
							'cat'  => $category,
							'orderby'=> 'title',
							'order' => 'ASC',
							'posts_per_page' => -1
						);
						$featureposts = get_posts( $args );
						foreach ( $featureposts as $post ) : setup_postdata( $post );
						?>
						
						<?php if ( $c == 5 ) { echo '<div class="module-load off">'; } ?>
						
						<?php get_template_part( 'template-parts/content', 'related-module' ); ?>
						
					<?php
					// Add a clearfix after every 3 item to get clean grid
					if( $c % 3 == 1 ) { ?>
						<div class="clearfix"></div>
					<?php }
						
					$c++;
					
					endforeach;
						
					wp_reset_postdata();
						
					if ( $c >= 6 ) { ?>
						</div>
						<div class="load-button">
							<a href="#" class="btn btn-default btn-load">See More</a>
						</div>
					<?php } ?>
						
					</div>
				</section>
				
				<?php endwhile; ?>
			</div>
			
			<?php if ( $promo_title || $promo_content ) { ?>
			<!--Sidebar Promo if available-->
			<aside class="content-sidebar" role="complementary">
				<div class="sidebar">
					<h4><?php echo $promo_title; ?></h4>
					<?php echo $promo_content; ?>
				</div>
			</aside>
			<?php } ?>
			
		</div>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>

