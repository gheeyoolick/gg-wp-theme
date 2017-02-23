<?php
/**
 * Template for the header search form
 */
?>

<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="dropdown-menu site-search">
	<input type="text" name="s" class="form-control" value="<?php the_search_query(); ?>" placeholder="Search">
</form>