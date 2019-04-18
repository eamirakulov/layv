<?php

if ( ! function_exists( 'succulents_qodef_footer_top_general_styles' ) ) {
	/**
	 * Generates general custom styles for footer top area
	 */
	function succulents_qodef_footer_top_general_styles() {
		$item_styles      = array();
		$background_color = succulents_qodef_options()->getOptionValue( 'footer_top_background_color' );
		
		if ( ! empty( $background_color ) ) {
			$item_styles['background-color'] = $background_color;
		}
		
		echo succulents_qodef_dynamic_css( '.qodef-page-footer .qodef-footer-top-holder', $item_styles );
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_footer_top_general_styles' );
}

if ( ! function_exists( 'succulents_qodef_footer_bottom_general_styles' ) ) {
	/**
	 * Generates general custom styles for footer bottom area
	 */
	function succulents_qodef_footer_bottom_general_styles() {
		$item_styles      = array();
		$background_color = succulents_qodef_options()->getOptionValue( 'footer_bottom_background_color' );
		
		if ( ! empty( $background_color ) ) {
			$item_styles['background-color'] = $background_color;
		}
		
		echo succulents_qodef_dynamic_css( '.qodef-page-footer .qodef-footer-bottom-holder', $item_styles );
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_footer_bottom_general_styles' );
}