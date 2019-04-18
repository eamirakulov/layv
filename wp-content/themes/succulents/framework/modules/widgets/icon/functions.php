<?php

if ( ! function_exists( 'succulents_qodef_register_icon_widget' ) ) {
	/**
	 * Function that register icon widget
	 */
	function succulents_qodef_register_icon_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefIconWidget';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_icon_widget' );
}