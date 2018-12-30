<?php
/**
 * The template part for featured collections
 */
?>

<?php
if( have_rows('feature_collection') ):

while ( have_rows('feature_collection') ) : the_row();

$title = get_sub_field('collection_title');
$desc = get_sub_field('collection_description');
$content_select = get_sub_field('content_type');
$category = get_sub_field('category');
$series = get_sub_field('series');
?>

<section class="section-collection">
	<div class="container">
		<div class="row justify-content-center no-gutters">
			<header class="col-lg-6 header-collection">
				<h2><?php echo $title; ?></h2>
				<?php echo $desc; ?>
			</header>
		</div>
		<div class="row">

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

				echo '<div class="col-md-6 col-lg-4">';
				get_template_part( 'template-parts/content', 'related-module' );
				echo '</div>';

			endforeach;

			wp_reset_postdata();

			?>

		</div>
	</div>
</section>

<?php
endwhile;
endif;
?>
