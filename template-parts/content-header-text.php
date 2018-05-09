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
				<h1>
					<?php
					// get the correct page title
					if ( is_post_type_archive() ) {
						post_type_archive_title();
					} else if ( is_date() ) {
						single_month_title(' ');
					} else if ( is_search() ) {
						echo '<span class="header-search">Search Results: ';
						echo '"'.get_search_query().'"</span>';
					} else if ( is_archive() ) {
						echo single_term_title();
					} else if ( is_home() ) {
						single_post_title();
					} else {
						the_title();
					}
					?>
				</h1>
				<?php
				// get the subheader field or pull series taxonomy
				$subhead = get_field( 'subheader' );
				if ( $subhead && is_singular() ) {
					echo '<h2>'. $subhead . '</h2>';
				} else if ( has_term( '', 'series' ) && is_singular() ) {
					$terms = get_the_term_list( $post->ID, 'series' );
					$terms = strip_tags( $terms );
					echo '<h2>'. $terms . '</h2>';
				} else {
					echo '';
				}
				?>
				
				<div class="header-share">
					Share This On:
					<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
				</div>
				
			</div>
		</div>
	</div>
</header>
