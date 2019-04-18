<?php

if ( ! function_exists( 'succulents_qodef_register_separator_widget' ) ) {
	/**
	 * Function that register separator widget
	 */
	function succulents_qodef_register_separator_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefSeparatorWidget';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_separator_widget' );
}