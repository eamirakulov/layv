<?php

if ( ! function_exists( 'succulents_qodef_register_header_centered_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function succulents_qodef_register_header_centered_type( $header_types ) {
		$header_type = array(
			'header-centered' => 'SucculentsQodef\Modules\Header\Types\HeaderCentered'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'succulents_qodef_init_register_header_centered_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function succulents_qodef_init_register_header_centered_type() {
		add_filter( 'succulents_qodef_register_header_type_class', 'succulents_qodef_register_header_centered_type' );
	}
	
	add_action( 'succulents_qodef_before_header_function_init', 'succulents_qodef_init_register_header_centered_type' );
}

if(!function_exists('succulents_qodef_set_centered_menu_height_for_header_types')) {
	/**
	 * This function set default menu area height for header types
	 */
	function succulents_qodef_set_centered_menu_height_for_header_types() {
		$menu_height_meta = succulents_qodef_filter_px( succulents_qodef_options()->getOptionValue( 'menu_area_height' ) );
		$menu_height      = !empty($menu_height_meta) ? intval( $menu_height_meta ) : 80;
		
		return apply_filters('succulents_qodef_set_centered_menu_height_value_for_header_types', $menu_height);
	}
}

if ( ! function_exists( 'succulents_qodef_header_centered_per_page_custom_styles' ) ) {
	/**
	 * Return header per page styles
	 */
	function succulents_qodef_header_centered_per_page_custom_styles( $style, $class_prefix, $page_id ) {
		$header_area_style    = array();
		$header_area_selector = array( $class_prefix . '.qodef-header-centered .qodef-logo-area .qodef-logo-wrapper' );
		
		$logo_area_logo_padding = get_post_meta( $page_id, 'qodef_logo_wrapper_padding_header_centered_meta', true );
		
		if ( $logo_area_logo_padding !== '' ) {
			$header_area_style['padding'] = $logo_area_logo_padding;
		}
		
		$current_style = '';
		
		if ( ! empty( $header_area_style ) ) {
			$current_style .= succulents_qodef_dynamic_css( $header_area_selector, $header_area_style );
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'succulents_qodef_add_header_page_custom_style', 'succulents_qodef_header_centered_per_page_custom_styles', 10, 3 );
}