<?php

if(!function_exists('succulents_qodef_register_sticky_sidebar_widget')) {
	/**
	 * Function that register sticky sidebar widget
	 */
	function succulents_qodef_register_sticky_sidebar_widget($widgets) {
		$widgets[] = 'SucculentsQodefStickySidebar';
		
		return $widgets;
	}
	
	add_filter('succulents_qodef_register_widgets', 'succulents_qodef_register_sticky_sidebar_widget');
}