<?php

if ( ! function_exists( 'succulents_qodef_disable_behaviors_for_header_vertical' ) ) {
	/**
	 * This function is used to disable sticky header functions that perform processing variables their used in js for this header type
	 */
	function succulents_qodef_disable_behaviors_for_header_vertical( $allow_behavior ) {
		return false;
	}
	
	if ( succulents_qodef_check_is_header_type_enabled( 'header-vertical', succulents_qodef_get_page_id() ) ) {
		add_filter( 'succulents_qodef_allow_sticky_header_behavior', 'succulents_qodef_disable_behaviors_for_header_vertical' );
		add_filter( 'succulents_qodef_allow_content_boxed_layout', 'succulents_qodef_disable_behaviors_for_header_vertical' );
	}
}