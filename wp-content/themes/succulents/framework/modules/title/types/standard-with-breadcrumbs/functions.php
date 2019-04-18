<?php

if ( ! function_exists( 'succulents_qodef_set_title_standard_with_breadcrumbs_type_for_options' ) ) {
	/**
	 * This function set standard with breadcrumbs title type value for title options map and meta boxes
	 */
	function succulents_qodef_set_title_standard_with_breadcrumbs_type_for_options( $type ) {
		$type['standard-with-breadcrumbs'] = esc_html__( 'Standard With Breadcrumbs', 'succulents' );
		
		return $type;
	}
	
	add_filter( 'succulents_qodef_title_type_global_option', 'succulents_qodef_set_title_standard_with_breadcrumbs_type_for_options' );
	add_filter( 'succulents_qodef_title_type_meta_boxes', 'succulents_qodef_set_title_standard_with_breadcrumbs_type_for_options' );
}