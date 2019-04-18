<?php

if ( ! function_exists( 'succulents_qodef_admin_map_init' ) ) {
	function succulents_qodef_admin_map_init() {
		do_action( 'succulents_qodef_before_options_map' );
		
		require_once QODE_FRAMEWORK_ROOT_DIR . '/admin/options/fonts/map.php';
		require_once QODE_FRAMEWORK_ROOT_DIR . '/admin/options/general/map.php';
		require_once QODE_FRAMEWORK_ROOT_DIR . '/admin/options/page/map.php';
		require_once QODE_FRAMEWORK_ROOT_DIR . '/admin/options/social/map.php';
		require_once QODE_FRAMEWORK_ROOT_DIR . '/admin/options/reset/map.php';
		
		do_action( 'succulents_qodef_options_map' );
		
		do_action( 'succulents_qodef_after_options_map' );
	}
	
	add_action( 'after_setup_theme', 'succulents_qodef_admin_map_init', 1 );
}