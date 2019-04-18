<?php

if ( ! function_exists( 'succulents_qodef_include_woocommerce_shortcodes' ) ) {
	function succulents_qodef_include_woocommerce_shortcodes() {
		foreach ( glob( QODE_FRAMEWORK_MODULES_ROOT_DIR . '/woocommerce/shortcodes/*/load.php' ) as $shortcode_load ) {
			include_once $shortcode_load;
		}
	}
	
	if ( succulents_qodef_core_plugin_installed() ) {
		add_action( 'qodef_core_action_include_shortcodes_file', 'succulents_qodef_include_woocommerce_shortcodes' );
	}
}

if ( ! function_exists( 'succulents_qodef_set_product_list_icon_class_name_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom icon class name for product shortcodes to set our icon for Visual Composer shortcodes panel
	 */
	function succulents_qodef_set_product_list_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
		$shortcodes_icon_class_array[] = '.icon-wpb-product-info';
		$shortcodes_icon_class_array[] = '.icon-wpb-product-list';
		$shortcodes_icon_class_array[] = '.icon-wpb-product-list-carousel';
		$shortcodes_icon_class_array[] = '.icon-wpb-product-list-simple';
		
		return $shortcodes_icon_class_array;
	}
	
	if ( succulents_qodef_core_plugin_installed() ) {
		add_filter( 'qodef_core_filter_add_vc_shortcodes_custom_icon_class', 'succulents_qodef_set_product_list_icon_class_name_for_vc_shortcodes' );
	}
}