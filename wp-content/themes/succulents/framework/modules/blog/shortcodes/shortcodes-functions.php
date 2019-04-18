<?php

if ( ! function_exists( 'succulents_qodef_include_blog_shortcodes' ) ) {
	function succulents_qodef_include_blog_shortcodes() {
		include_once QODE_FRAMEWORK_MODULES_ROOT_DIR . '/blog/shortcodes/blog-list/blog-list.php';
		include_once QODE_FRAMEWORK_MODULES_ROOT_DIR . '/blog/shortcodes/blog-slider/blog-slider.php';
	}
	
	if ( succulents_qodef_core_plugin_installed() ) {
		add_action( 'qodef_core_action_include_shortcodes_file', 'succulents_qodef_include_blog_shortcodes' );
	}
}

if ( ! function_exists( 'succulents_qodef_add_blog_shortcodes' ) ) {
	function succulents_qodef_add_blog_shortcodes( $shortcodes_class_name ) {
		$shortcodes = array(
			'QodeCore\CPT\Shortcodes\BlogList\BlogList',
			'QodeCore\CPT\Shortcodes\BlogSlider\BlogSlider',
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	if ( succulents_qodef_core_plugin_installed() ) {
		add_filter( 'qodef_core_filter_add_vc_shortcode', 'succulents_qodef_add_blog_shortcodes' );
	}
}

if ( ! function_exists( 'succulents_qodef_set_blog_list_icon_class_name_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom icon class name for blog shortcodes to set our icon for Visual Composer shortcodes panel
	 */
	function succulents_qodef_set_blog_list_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
		$shortcodes_icon_class_array[] = '.icon-wpb-blog-list';
		$shortcodes_icon_class_array[] = '.icon-wpb-blog-slider';

		return $shortcodes_icon_class_array;
	}
	
	if ( succulents_qodef_core_plugin_installed() ) {
		add_filter( 'qodef_core_filter_add_vc_shortcodes_custom_icon_class', 'succulents_qodef_set_blog_list_icon_class_name_for_vc_shortcodes' );
	}
}