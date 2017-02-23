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
				<?php $subhead = get_field( 'subheader' );
				if( $subhead ) { ?>
					<h2><?php echo $subhead; ?></h2>
				<?php } ?>
			</div>
		</div>
	</div>
</header>
