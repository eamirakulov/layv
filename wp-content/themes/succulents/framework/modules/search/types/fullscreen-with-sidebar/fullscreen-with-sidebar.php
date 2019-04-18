<?php

if ( ! function_exists( 'succulents_qodef_search_body_class' ) ) {
	/**
	 * Function that adds body classes for different search types
	 *
	 * @param $classes array original array of body classes
	 *
	 * @return array modified array of classes
	 */
	function succulents_qodef_search_body_class( $classes ) {
		$classes[] = 'qodef-fullscreen-search-with-sidebar';
		$classes[] = 'qodef-search-fade';
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_search_body_class' );
}

if ( ! function_exists( 'succulents_qodef_get_search' ) ) {
	/**
	 * Loads search HTML based on search type option.
	 */
	function succulents_qodef_get_search() {
        succulents_qodef_load_search_template();
	}
	
	add_action( 'succulents_qodef_before_page_header', 'succulents_qodef_get_search' );
}

if ( ! function_exists( 'succulents_qodef_load_search_template' ) ) {
	/**
	 * Loads search HTML based on search type option.
	 */
	function succulents_qodef_load_search_template() {
        $parameters = array();

        $parameters['search_in_grid'] = succulents_qodef_options()->getOptionValue( 'search_in_grid' ) == 'yes' ? 'qodef-grid' : '';

        succulents_qodef_get_module_template_part( 'types/fullscreen-with-sidebar/templates/fullscreen-with-sidebar', 'search', '', $parameters );
	}
}

if ( ! function_exists( 'succulents_qodef_get_fullscreen_sidebar' ) ) {
    /**
     * Return footer top HTML
     */
    function succulents_qodef_get_fullscreen_sidebar() {
        $parameters = array();

        //get number of top footer columns
        $parameters['search_sidebar_columns'] = succulents_qodef_options()->getOptionValue( 'search_sidebar_columns' );


        succulents_qodef_get_module_template_part( 'types/fullscreen-with-sidebar/templates/parts/fullscreen-sidebar', 'search', '', $parameters );
    }
}
