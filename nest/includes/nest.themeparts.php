<?php


function nest_body_classes( $classes ) {
	global $nest_options;
	if( is_page_template( 'template-fullwidth.php' ) ) {
		$classes[] = 'sidebar-none';
	} elseif( is_home() || is_front_page() ) {
		$classes[] = 'sidebar-' . $nest_options['sidebar_pos_home'];
	} elseif( is_archive() || is_search() ) {
		$classes[] = 'sidebar-' . $nest_options['sidebar_pos_archive'];
	} elseif( is_single() || is_page() || is_attachment() ) {
		$classes[] = 'sidebar-' . $nest_options['sidebar_pos_single'];
	}

	return $classes;
}
add_filter( 'body_class', 'nest_body_classes' );

