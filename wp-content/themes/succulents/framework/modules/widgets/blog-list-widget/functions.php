<?php

if ( ! function_exists( 'succulents_qodef_register_blog_list_widget' ) ) {
	/**
	 * Function that register blog list widget
	 */
	function succulents_qodef_register_blog_list_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefBlogListWidget';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_blog_list_widget' );
}