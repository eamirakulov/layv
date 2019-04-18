<?php

if ( ! function_exists( 'succulents_qodef_register_social_icons_widget' ) ) {
	/**
	 * Function that register social icon widget
	 */
	function succulents_qodef_register_social_icons_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefClassIconsGroupWidget';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_social_icons_widget' );
}