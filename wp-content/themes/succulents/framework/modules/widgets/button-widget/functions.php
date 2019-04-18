<?php

if ( ! function_exists( 'succulents_qodef_register_button_widget' ) ) {
	/**
	 * Function that register button widget
	 */
	function succulents_qodef_register_button_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefButtonWidget';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_button_widget' );
}