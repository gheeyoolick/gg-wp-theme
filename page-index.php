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
						
						<?php $args = array('post_type' => array($content1,$content2,$content3), 'category'  => $category, 'orderby'=> 'title', 'order' => 'ASC', 'posts_per_page' => -1);
						$featureposts = get_posts( $args );
						foreach ( $featureposts as $post ) : setup_postdata( $post );
						
						get_template_part( 'template-parts/content', 'related-module' );
						
						endforeach; 
						wp_reset_postdata();?>
						
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

