<?php

if ( ! function_exists( 'succulents_qodef_register_sidearea_opener_widget' ) ) {
	/**
	 * Function that register sidearea opener widget
	 */
	function succulents_qodef_register_sidearea_opener_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefSideAreaOpener';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_sidearea_opener_widget' );
}