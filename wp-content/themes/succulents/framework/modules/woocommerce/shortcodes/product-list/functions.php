<?php

if ( ! function_exists( 'succulents_qodef_add_product_list_shortcode' ) ) {
	function succulents_qodef_add_product_list_shortcode( $shortcodes_class_name ) {
		$shortcodes = array(
			'QodeCore\CPT\Shortcodes\ProductList\ProductList',
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	if ( succulents_qodef_core_plugin_installed() ) {
		add_filter( 'qodef_core_filter_add_vc_shortcode', 'succulents_qodef_add_product_list_shortcode' );
	}
}

if ( ! function_exists( 'succulents_qodef_add_product_list_into_shortcodes_list' ) ) {
	function succulents_qodef_add_product_list_into_shortcodes_list( $woocommerce_shortcodes ) {
		$woocommerce_shortcodes[] = 'qodef_product_list';
		
		return $woocommerce_shortcodes;
	}
	
	add_filter( 'succulents_qodef_woocommerce_shortcodes_list', 'succulents_qodef_add_product_list_into_shortcodes_list' );
}