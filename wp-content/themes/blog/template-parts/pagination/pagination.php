<?php
/**
 * Script to show pagination.
 *
 * @package cenote
 */

global $wp_query;
$big = 9999999999;

// if only have one page don't show pagination.
if ( $wp_query->max_num_pages <= 1 ) {
	return;
}
?>
<nav class="navigation pagination">
	<span class="screen-reader-text"><?php esc_html_e( 'Posts Navigation', 'cenote' ); ?></span>
	<!-- /.screen-reader-text -->
	<div class="nav-links">
	<?php
	echo paginate_links(
		array(
			'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format'             => '?paged=%#%',
			'current'            => max( 1, get_query_var( 'paged' ) ),
			'total'              => $wp_query->max_num_pages,
			'before_page_number' => '<span class="screen-reader-text">' . __( 'Page', 'cenote' ) . '</span>',
			'next_text'          => __( 'Next', 'cenote' ),
			'prev_text'          => __( 'Previous', 'cenote' ),
			'mid_size'           => 4,
		)
	); // WPCS xss ok.
	?>
	</div>
	<!-- /.nav-links -->
</nav>
<!-- /.navigation pagination -->

