<?php
// Action Hook
function include_theme_styles() {
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round' );
	wp_enqueue_style( 'main-css', get_stylesheet_uri(), [ 'google-font' ], get_the_time() );
}

add_action( 'wp_enqueue_scripts', 'include_theme_styles' );

// Filter Hook
function the_excerpt_read_more_link( $excerpt ) {
	return $excerpt . ' <a href="' . get_permalink() . '">Read more &raquo;</a>';
}

add_filter( 'get_the_excerpt', 'the_excerpt_read_more_link' );
