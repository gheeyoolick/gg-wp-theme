<?php
/**
 * Template for the search form
 */
?>

<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="site-search">
	<div class="input-group">
		<label for="s-main" class="sr-only">search:</label>
		<input type="text" name="s" id="s-main" class="form-control" value="<?php the_search_query(); ?>" placeholder="Search">
		<div class="input-group-append">
			<button class="btn btn-sm" type="submit"><i class="far fa-search" aria-hidden="true" title="Submit search"></i></button>
		</div>
	</div>
</form>