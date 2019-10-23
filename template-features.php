<?php
/**
 * Template Name: Features
 */

get_header();

get_template_part( 'template-parts/content', 'header' );

$promo_title = get_field('promo_title');
$promo_content = get_field('promo_content');

?>

<main id="main-content" class="main-content">
	
	<section class="section-intro <?php if ( $promo_title || $promo_content ) { echo 'has-sidebar'; } else { } ?>">
		
		<div class="container">
			<div class="row row-content">
				<div class="content-main <?php if ( $promo_title || $promo_content ) { echo 'col-md-8'; } else { } ?>">
					<?php

					get_template_part( 'template-parts/content', 'intro' );

					?>
				</div>
				<?php
				
				if ( $promo_title || $promo_content ) { ?>
					<!--Sidebar Promo if available-->
					<aside class="content-sidebar col-md-4" role="complementary">
						<div class="sidebar">
							<h4 class="heading-section"><?php echo $promo_title; ?></h4>
							<?php echo $promo_content; ?>
						</div>
					</aside>

				<?php
				}
				?>
			</div>
		</div>
		
	</section>
	
	<?php get_template_part( 'template-parts/content', 'collections' ); ?>
	
</main>

<?php get_footer(); ?>

