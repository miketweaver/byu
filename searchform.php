<?php
/**
 * The template for displaying search forms in byu-responsive
 *
 * @package byu-responsive
 */
?>


<form role="search" method="get" id="basic-search" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"></span>
		<input type="search" id="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'byu-responsive' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" id="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'byu-responsive' ); ?>">
</form>


       <!-- <form id="basic-search" action="http://home.byu.edu/home/search" role="form">
          <label for="search" class="visuallyhidden">Search</label>
          <input id="search" type="search" name="search">
          <input id="search-submit" type="submit" value="Search">
        </form>
		-->
