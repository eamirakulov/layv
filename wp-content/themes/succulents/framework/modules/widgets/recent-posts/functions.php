<?php

if ( ! function_exists( 'succulents_qodef_register_recent_posts_widget' ) ) {
	/**
	 * Function that register search opener widget
	 */
	function succulents_qodef_register_recent_posts_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefRecentPosts';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_recent_posts_widget' );
}