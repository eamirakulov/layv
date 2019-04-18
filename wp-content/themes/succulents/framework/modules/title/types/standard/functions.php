<?php

if ( ! function_exists( 'succulents_qodef_set_title_standard_type_for_options' ) ) {
	/**
	 * This function set standard title type value for title options map and meta boxes
	 */
	function succulents_qodef_set_title_standard_type_for_options( $type ) {
		$type['standard'] = esc_html__( 'Standard', 'succulents' );
		
		return $type;
	}
	
	add_filter( 'succulents_qodef_title_type_global_option', 'succulents_qodef_set_title_standard_type_for_options' );
	add_filter( 'succulents_qodef_title_type_meta_boxes', 'succulents_qodef_set_title_standard_type_for_options' );
}

if ( ! function_exists( 'succulents_qodef_set_title_standard_type_as_default_options' ) ) {
	/**
	 * This function set default title type value for global title option map
	 */
	function succulents_qodef_set_title_standard_type_as_default_options( $type ) {
		$type = 'standard';
		
		return $type;
	}
	
	add_filter( 'succulents_qodef_default_title_type_global_option', 'succulents_qodef_set_title_standard_type_as_default_options' );
}