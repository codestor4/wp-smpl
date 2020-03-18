<?php
// Simple pagination
// previous_posts_link(); 
// next_posts_link(); 

// Complex pagination
// pagination code found at WP.org
global $wp_query;
$big = 99999999999; //unlikely integer
echo paginate_links( array(
	'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format'  => '?paged=%#%',
	'current' => max( 1, get_query_var( 'paged' ) ),
	'total' => $wp_query->max_num_pages,
));
?>