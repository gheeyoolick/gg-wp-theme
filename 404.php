<?php
/**
 * Template for displaying 404 pages (not found)
 */

get_header();

?>

<main class="main-content">
	<div class="container">
		<div class="row row-content">
			<div class="content-main full">
				<section class="content-section content-body content-body-single">
					<h1>Sorry, that page can't be found.</h1>
					<p>It looks like nothing was found at this location. Please visit the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Homepage</a>.</p>
				</section>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>