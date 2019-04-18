<?php

if ( ! function_exists( 'succulents_qodef_include_search_types_before_load' ) ) {
    /**
     * Load's all header types before load files by going through all folders that are placed directly in header types folder.
     * Functions from this files before-load are used to set all hooks and variables before global options map are init
     */
    function succulents_qodef_include_search_types_before_load() {
        foreach ( glob( QODE_FRAMEWORK_SEARCH_ROOT_DIR . '/types/*/before-load.php' ) as $module_load ) {
            include_once $module_load;
        }
    }

    add_action( 'succulents_qodef_options_map', 'succulents_qodef_include_search_types_before_load', 1 ); // 1 is set to just be before header option map init
}

if ( ! function_exists( 'succulents_qodef_load_search' ) ) {
	function succulents_qodef_load_search() {
		$search_type      = 'fullscreen-with-sidebar';
		
		if ( succulents_qodef_active_widget( false, false, 'qodef_search_opener' ) ) {
			include_once QODE_FRAMEWORK_MODULES_ROOT_DIR . '/search/types/' . $search_type . '/' . $search_type . '.php';
		}
	}
	
	add_action( 'init', 'succulents_qodef_load_search' );
}

if ( ! function_exists( 'succulents_qodef_get_holder_params_search' ) ) {
	/**
	 * Function which return holder class and holder inner class for blog pages
	 */
	function succulents_qodef_get_holder_params_search() {
		$params_list = array();
		
		$layout = succulents_qodef_options()->getOptionValue( 'search_page_layout' );
		if ( $layout == 'in-grid' ) {
			$params_list['holder'] = 'qodef-container';
			$params_list['inner']  = 'qodef-container-inner clearfix';
		} else {
			$params_list['holder'] = 'qodef-full-width';
			$params_list['inner']  = 'qodef-full-width-inner';
		}
		
		/**
		 * Available parameters for holder params
		 * -holder
		 * -inner
		 */
		return apply_filters( 'succulents_qodef_search_holder_params', $params_list );
	}
}

if ( ! function_exists( 'succulents_qodef_get_search_page' ) ) {
	function succulents_qodef_get_search_page() {
		$sidebar_layout = succulents_qodef_sidebar_layout();
		$search_in_grid = succulents_qodef_options()->getOptionValue( 'search_in_grid' ) == 'yes' ? 'qodef-grid' : '';
		$params = array(
			'sidebar_layout' => $sidebar_layout,
			'search_in_grid' => $search_in_grid,
		);
		
		succulents_qodef_get_module_template_part( 'templates/holder', 'search', '', $params );
	}
}

if ( ! function_exists( 'succulents_qodef_get_search_page_layout' ) ) {
	/**
	 * Function which create query for blog lists
	 */
	function succulents_qodef_get_search_page_layout() {
		global $wp_query;
		$path   = apply_filters( 'succulents_qodef_search_page_path', 'templates/page' );
		$type   = apply_filters( 'succulents_qodef_search_page_layout', 'default' );
		$module = apply_filters( 'succulents_qodef_search_page_module', 'search' );
		$plugin = apply_filters( 'succulents_qodef_search_page_plugin_override', false );
		
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
		
		$params = array(
			'type'          => $type,
			'query'         => $wp_query,
			'paged'         => $paged,
			'max_num_pages' => succulents_qodef_get_max_number_of_pages(),
		);
		
		$params = apply_filters( 'succulents_qodef_search_page_params', $params );
		
		succulents_qodef_get_module_template_part( $path . '/' . $type, $module, '', $params, $plugin );
	}
}