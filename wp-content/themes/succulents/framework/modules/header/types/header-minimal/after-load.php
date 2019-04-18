<?php

if ( ! function_exists( 'succulents_qodef_header_minimal_full_screen_menu_body_class' ) ) {
	/**
	 * Function that adds body classes for different full screen menu types
	 *
	 * @param $classes array original array of body classes
	 *
	 * @return array modified array of classes
	 */
	function succulents_qodef_header_minimal_full_screen_menu_body_class( $classes ) {
		$classes[] = 'qodef-' . succulents_qodef_options()->getOptionValue( 'fullscreen_menu_animation_style' );
		
		return $classes;
	}
	
	if ( succulents_qodef_check_is_header_type_enabled( 'header-minimal', succulents_qodef_get_page_id() ) ) {
		add_filter( 'body_class', 'succulents_qodef_header_minimal_full_screen_menu_body_class' );
	}
}

if ( ! function_exists( 'succulents_qodef_get_header_minimal_full_screen_menu' ) ) {
	/**
	 * Loads fullscreen menu HTML template
	 */
	function succulents_qodef_get_header_minimal_full_screen_menu() {
		$parameters = array(
			'fullscreen_menu_in_grid' => succulents_qodef_options()->getOptionValue( 'fullscreen_in_grid' ) === 'yes' ? true : false
		);
		
		succulents_qodef_get_module_template_part( 'templates/full-screen-menu', 'header/types/header-minimal', '', $parameters );
	}
	
	if ( succulents_qodef_check_is_header_type_enabled( 'header-minimal', succulents_qodef_get_page_id() ) ) {
		add_action( 'succulents_qodef_after_wrapper_inner', 'succulents_qodef_get_header_minimal_full_screen_menu', 40 );
	}
}

if ( ! function_exists( 'succulents_qodef_header_minimal_mobile_menu_module' ) ) {
    /**
     * Function that edits module for mobile menu
     *
     * @param $module - default module value
     *
     * @return string name of module
     */
    function succulents_qodef_header_minimal_mobile_menu_module( $module ) {
        return 'header/types/header-minimal';
    }

    if ( succulents_qodef_check_is_header_type_enabled( 'header-minimal', succulents_qodef_get_page_id() ) ) {
        add_filter('succulents_qodef_mobile_menu_module', 'succulents_qodef_header_minimal_mobile_menu_module');
    }
}

if ( ! function_exists( 'succulents_qodef_header_minimal_mobile_menu_slug' ) ) {
    /**
     * Function that edits slug for mobile menu
     *
     * @param $slug - default slug value
     *
     * @return string name of slug
     */
    function succulents_qodef_header_minimal_mobile_menu_slug( $slug ) {
        return 'minimal';
    }

    if ( succulents_qodef_check_is_header_type_enabled( 'header-minimal', succulents_qodef_get_page_id() ) ) {
        add_filter('succulents_qodef_mobile_menu_slug', 'succulents_qodef_header_minimal_mobile_menu_slug');
    }
}