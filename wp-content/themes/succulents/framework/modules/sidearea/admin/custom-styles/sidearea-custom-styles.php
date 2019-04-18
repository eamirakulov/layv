<?php

if ( ! function_exists( 'succulents_qodef_side_area_slide_from_right_type_style' ) ) {
	function succulents_qodef_side_area_slide_from_right_type_style() {
		$width = succulents_qodef_options()->getOptionValue( 'side_area_width' );
		
		if ( $width !== '' ) {
			echo succulents_qodef_dynamic_css( '.qodef-side-menu-slide-from-right .qodef-side-menu', array(
				'right' => '-' . succulents_qodef_filter_px( $width ) . 'px',
				'width' => succulents_qodef_filter_px( $width ) . 'px'
			) );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_side_area_slide_from_right_type_style' );
}

if ( ! function_exists( 'succulents_qodef_side_area_icon_color_styles' ) ) {
	function succulents_qodef_side_area_icon_color_styles() {
		$icon_color             = succulents_qodef_options()->getOptionValue( 'side_area_icon_color' );
		$icon_hover_color       = succulents_qodef_options()->getOptionValue( 'side_area_icon_hover_color' );
		$close_icon_color       = succulents_qodef_options()->getOptionValue( 'side_area_close_icon_color' );
		$close_icon_hover_color = succulents_qodef_options()->getOptionValue( 'side_area_close_icon_hover_color' );
		
		$icon_hover_selector = array(
			'.qodef-side-menu-button-opener:hover',
			'.qodef-side-menu-button-opener.opened'
		);
		
		if ( ! empty( $icon_color ) ) {
			echo succulents_qodef_dynamic_css( '.qodef-side-menu-button-opener', array(
				'color' => $icon_color
			) );
		}
		
		if ( ! empty( $icon_hover_color ) ) {
			echo succulents_qodef_dynamic_css( $icon_hover_selector, array(
				'color' => $icon_hover_color . '!important'
			) );
		}
		
		if ( ! empty( $close_icon_color ) ) {
			echo succulents_qodef_dynamic_css( '.qodef-side-menu a.qodef-close-side-menu', array(
				'color' => $close_icon_color
			) );
		}
		
		if ( ! empty( $close_icon_hover_color ) ) {
			echo succulents_qodef_dynamic_css( '.qodef-side-menu a.qodef-close-side-menu:hover', array(
				'color' => $close_icon_hover_color
			) );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_side_area_icon_color_styles' );
}

if ( ! function_exists( 'succulents_qodef_side_area_styles' ) ) {
	function succulents_qodef_side_area_styles() {
		$side_area_styles = array();
		$background_color = succulents_qodef_options()->getOptionValue( 'side_area_background_color' );
		$padding          = succulents_qodef_options()->getOptionValue( 'side_area_padding' );
		$text_alignment   = succulents_qodef_options()->getOptionValue( 'side_area_aligment' );
		
		if ( ! empty( $background_color ) ) {
			$side_area_styles['background-color'] = $background_color;
		}
		
		if ( ! empty( $padding ) ) {
			$side_area_styles['padding'] = esc_attr( $padding );
		}
		
		if ( ! empty( $text_alignment ) ) {
			$side_area_styles['text-align'] = $text_alignment;
		}
		
		if ( ! empty( $side_area_styles ) ) {
			echo succulents_qodef_dynamic_css( '.qodef-side-menu', $side_area_styles );
		}
		
		if ( $text_alignment === 'center' ) {
			echo succulents_qodef_dynamic_css( '.qodef-side-menu .widget img', array(
				'margin' => '0 auto'
			) );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_side_area_styles' );
}