<?php
/**
 * The template part for text area of page headers
 */
?>

<header class="header-page">
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
			</div>
		</div>
	</div>
</header>
