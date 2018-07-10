<?php
/**
 * Template for the search form
 */
?>

<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<label for="s-main" class="sr-only">Search:</label>
	<input type="text" name="s" id="s-main" class="form-control" value="<?php the_search_query(); ?>" placeholder="Search">
</form>