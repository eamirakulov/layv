<?php

if ( ! function_exists( 'succulents_qodef_register_author_info_widget' ) ) {
	/**
	 * Function that register author info widget
	 */
	function succulents_qodef_register_author_info_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefAuthorInfoWidget';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_author_info_widget' );
}