<?php
/**
 * The template part for text area of page headers
 */
?>

<header class="header-page">
	<?php get_template_part( 'template-parts/content', 'tour' ); ?>
	<div class="container">
		<div class="row">
			<div class="header-content">
				<h1><?php single_post_title(); ?></h1>
				<?php
				$subhead = get_field( 'subheader' );
				if ( $subhead ) {
					echo '<h2>'. $subhead . '</h2>';
				} else if ( has_term( '', 'series' ) ) {
					$terms = get_the_term_list( $post->ID, 'series' );
					$terms = strip_tags( $terms );
					echo '<h2>'. $terms . '</h2>';
				} else {
					echo '';
				}
				?>
				
				<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
				
			</div>
		</div>
	</div>
</header>
