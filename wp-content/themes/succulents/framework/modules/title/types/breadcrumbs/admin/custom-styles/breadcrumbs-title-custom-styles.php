<?php

if ( ! function_exists( 'succulents_qodef_breadcrumbs_title_area_typography_style' ) ) {
	function succulents_qodef_breadcrumbs_title_area_typography_style() {
		
		$item_styles = succulents_qodef_get_typography_styles( 'page_breadcrumb' );
		
		$item_selector = array(
			'.qodef-title-holder .qodef-title-wrapper .qodef-breadcrumbs'
		);
		
		echo succulents_qodef_dynamic_css( $item_selector, $item_styles );
		
		
		$breadcrumb_hover_color = succulents_qodef_options()->getOptionValue( 'page_breadcrumb_hovercolor' );
		
		$breadcrumb_hover_styles = array();
		if ( ! empty( $breadcrumb_hover_color ) ) {
			$breadcrumb_hover_styles['color'] = $breadcrumb_hover_color;
		}
		
		$breadcrumb_hover_selector = array(
			'.qodef-title-holder .qodef-title-wrapper .qodef-breadcrumbs a:hover'
		);
		
		echo succulents_qodef_dynamic_css( $breadcrumb_hover_selector, $breadcrumb_hover_styles );
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_breadcrumbs_title_area_typography_style' );
}