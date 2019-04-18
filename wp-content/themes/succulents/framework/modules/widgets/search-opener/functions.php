<?php

if ( ! function_exists( 'succulents_qodef_register_search_opener_widget' ) ) {
	/**
	 * Function that register search opener widget
	 */
	function succulents_qodef_register_search_opener_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefSearchOpener';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_search_opener_widget' );
}