<?php

if ( ! function_exists( 'succulents_qodef_sticky_header_styles' ) ) {
	/**
	 * Generates styles for sticky haeder
	 */
	function succulents_qodef_sticky_header_styles() {
		$background_color        = succulents_qodef_options()->getOptionValue( 'sticky_header_background_color' );
		$background_transparency = succulents_qodef_options()->getOptionValue( 'sticky_header_transparency' );
		$border_color            = succulents_qodef_options()->getOptionValue( 'sticky_header_border_color' );
		$header_height           = succulents_qodef_options()->getOptionValue( 'sticky_header_height' );
		
		if ( ! empty( $background_color ) ) {
			$header_background_color              = $background_color;
			$header_background_color_transparency = 1;
			
			if ( $background_transparency !== '' ) {
				$header_background_color_transparency = $background_transparency;
			}
			
			echo succulents_qodef_dynamic_css( '.qodef-page-header .qodef-sticky-header .qodef-sticky-holder', array( 'background-color' => succulents_qodef_rgba_color( $header_background_color, $header_background_color_transparency ) ) );
		}
		
		if ( ! empty( $border_color ) ) {
			echo succulents_qodef_dynamic_css( '.qodef-page-header .qodef-sticky-header .qodef-sticky-holder', array( 'border-color' => $border_color ) );
		}
		
		if ( ! empty( $header_height ) ) {
			$height = succulents_qodef_filter_px( $header_height ) . 'px';
			
			echo succulents_qodef_dynamic_css( '.qodef-page-header .qodef-sticky-header', array( 'height' => $height ) );
			echo succulents_qodef_dynamic_css( '.qodef-page-header .qodef-sticky-header .qodef-logo-wrapper a', array( 'max-height' => $height ) );
		}
		
		$sticky_container_selector = '.qodef-sticky-header .qodef-sticky-holder .qodef-vertical-align-containers';
		$sticky_container_styles   = array();
		$container_side_padding    = succulents_qodef_options()->getOptionValue( 'sticky_header_side_padding' );
		
		if ( $container_side_padding !== '' ) {
			if ( succulents_qodef_string_ends_with( $container_side_padding, 'px' ) || succulents_qodef_string_ends_with( $container_side_padding, '%' ) ) {
				$sticky_container_styles['padding-left']  = $container_side_padding;
				$sticky_container_styles['padding-right'] = $container_side_padding;
			} else {
				$sticky_container_styles['padding-left']  = succulents_qodef_filter_px( $container_side_padding ) . 'px';
				$sticky_container_styles['padding-right'] = succulents_qodef_filter_px( $container_side_padding ) . 'px';
			}
			
			echo succulents_qodef_dynamic_css( $sticky_container_selector, $sticky_container_styles );
		}
		
		// sticky menu style
		
		$menu_item_styles = succulents_qodef_get_typography_styles( 'sticky' );
		
		$menu_item_selector = array(
			'.qodef-main-menu.qodef-sticky-nav > ul > li > a'
		);
		
		echo succulents_qodef_dynamic_css( $menu_item_selector, $menu_item_styles );
		
		
		$hover_color = succulents_qodef_options()->getOptionValue( 'sticky_hovercolor' );
		
		$menu_item_hover_styles = array();
		if ( ! empty( $hover_color ) ) {
			$menu_item_hover_styles['color'] = $hover_color;
		}
		
		$menu_item_hover_selector = array(
			'.qodef-main-menu.qodef-sticky-nav > ul > li:hover > a',
			'.qodef-main-menu.qodef-sticky-nav > ul > li.qodef-active-item > a'
		);
		
		echo succulents_qodef_dynamic_css( $menu_item_hover_selector, $menu_item_hover_styles );
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_sticky_header_styles' );
}