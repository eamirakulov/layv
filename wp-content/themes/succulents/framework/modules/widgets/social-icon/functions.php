<?php

if ( ! function_exists( 'succulents_qodef_register_social_icon_widget' ) ) {
	/**
	 * Function that register social icon widget
	 */
	function succulents_qodef_register_social_icon_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefSocialIconWidget';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_social_icon_widget' );
}