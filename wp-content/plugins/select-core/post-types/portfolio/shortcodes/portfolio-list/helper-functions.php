<?php

if ( ! function_exists( 'qodef_core_add_portfolio_list_shortcode' ) ) {
	function qodef_core_add_portfolio_list_shortcode( $shortcodes_class_name ) {
		$shortcodes = array(
			'QodeCore\CPT\Shortcodes\Portfolio\PortfolioList'
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	add_filter( 'qodef_core_filter_add_vc_shortcode', 'qodef_core_add_portfolio_list_shortcode' );
}

if ( ! function_exists( 'qodef_core_set_portfolio_list_icon_class_name_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom icon class name for portfolio list shortcode to set our icon for Visual Composer shortcodes panel
	 */
	function qodef_core_set_portfolio_list_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
		$shortcodes_icon_class_array[] = '.icon-wpb-portfolio';
		
		return $shortcodes_icon_class_array;
	}
	
	add_filter( 'qodef_core_filter_add_vc_shortcodes_custom_icon_class', 'qodef_core_set_portfolio_list_icon_class_name_for_vc_shortcodes' );
}