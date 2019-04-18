<?php

if ( ! function_exists( 'succulents_qodef_register_custom_font_widget' ) ) {
	/**
	 * Function that register custom font widget
	 */
	function succulents_qodef_register_custom_font_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefCustomFontWidget';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_custom_font_widget' );
}