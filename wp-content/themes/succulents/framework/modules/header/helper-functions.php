<?php

if ( ! function_exists( 'succulents_qodef_header_skin_class' ) ) {
	/**
	 * Function that adds header style class to body tag
	 */
	function succulents_qodef_header_skin_class( $classes ) {
		$header_style     = succulents_qodef_get_meta_field_intersect( 'header_style', succulents_qodef_get_page_id() );
		$header_style_404 = succulents_qodef_options()->getOptionValue( '404_header_style' );
		
		if ( is_404() && ! empty( $header_style_404 ) ) {
			$classes[] = 'qodef-' . $header_style_404;
		} else if ( ! empty( $header_style ) ) {
			$classes[] = 'qodef-' . $header_style;
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_header_skin_class' );
}

if ( ! function_exists( 'succulents_qodef_sticky_header_behaviour_class' ) ) {
	/**
	 * Function that adds header behavior class to body tag
	 */
	function succulents_qodef_sticky_header_behaviour_class( $classes ) {
		$header_behavior = succulents_qodef_get_meta_field_intersect( 'header_behaviour', succulents_qodef_get_page_id() );
		
		if ( ! empty( $header_behavior ) ) {
			$classes[] = 'qodef-' . $header_behavior;
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_sticky_header_behaviour_class' );
}

if ( ! function_exists( 'succulents_qodef_menu_dropdown_appearance' ) ) {
	/**
	 * Function that adds menu dropdown appearance class to body tag
	 *
	 * @param array array of classes from main filter
	 *
	 * @return array array of classes with added menu dropdown appearance class
	 */
	function succulents_qodef_menu_dropdown_appearance( $classes ) {
		$dropdown_menu_appearance = succulents_qodef_options()->getOptionValue( 'menu_dropdown_appearance' );
		
		if ( $dropdown_menu_appearance !== 'default' ) {
			$classes[] = 'qodef-' . $dropdown_menu_appearance;
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_menu_dropdown_appearance' );
}

if ( ! function_exists( 'succulents_qodef_header_class' ) ) {
	/**
	 * Function that adds class to header based on theme options
	 *
	 * @param array array of classes from main filter
	 *
	 * @return array array of classes with added header class
	 */
	function succulents_qodef_header_class( $classes ) {
		$id = succulents_qodef_get_page_id();
		
		$header_type = succulents_qodef_get_meta_field_intersect( 'header_type', $id );
		
		$classes[] = 'qodef-' . $header_type;
		
		$disable_menu_area_shadow = succulents_qodef_get_meta_field_intersect( 'menu_area_shadow', $id ) == 'no';
		if ( $disable_menu_area_shadow ) {
			$classes[] = 'qodef-menu-area-shadow-disable';
		}
		
		$disable_menu_area_grid_shadow = succulents_qodef_get_meta_field_intersect( 'menu_area_in_grid_shadow', $id ) == 'no';
		if ( $disable_menu_area_grid_shadow ) {
			$classes[] = 'qodef-menu-area-in-grid-shadow-disable';
		}
		
		$disable_menu_area_border = succulents_qodef_get_meta_field_intersect( 'menu_area_border', $id ) == 'no';
		if ( $disable_menu_area_border ) {
			$classes[] = 'qodef-menu-area-border-disable';
		}
		
		$disable_menu_area_grid_border = succulents_qodef_get_meta_field_intersect( 'menu_area_in_grid_border', $id ) == 'no';
		if ( $disable_menu_area_grid_border ) {
			$classes[] = 'qodef-menu-area-in-grid-border-disable';
		}
		
		if ( succulents_qodef_get_meta_field_intersect( 'menu_area_in_grid', $id ) == 'yes' &&
		     succulents_qodef_get_meta_field_intersect( 'menu_area_grid_background_color', $id ) !== '' &&
		     succulents_qodef_get_meta_field_intersect( 'menu_area_grid_background_transparency', $id ) !== '0'
		) {
			$classes[] = 'qodef-header-menu-area-in-grid-padding';
		}
		
		$disable_logo_area_border = succulents_qodef_get_meta_field_intersect( 'logo_area_border', $id ) == 'no';
		if ( $disable_logo_area_border ) {
			$classes[] = 'qodef-logo-area-border-disable';
		}
		
		$disable_logo_area_grid_border = succulents_qodef_get_meta_field_intersect( 'logo_area_in_grid_border', $id ) == 'no';
		if ( $disable_logo_area_grid_border ) {
			$classes[] = 'qodef-logo-area-in-grid-border-disable';
		}
		
		if ( succulents_qodef_get_meta_field_intersect( 'logo_area_in_grid', $id ) == 'yes' &&
		     succulents_qodef_get_meta_field_intersect( 'logo_area_grid_background_color', $id ) !== '' &&
		     succulents_qodef_get_meta_field_intersect( 'logo_area_grid_background_transparency', $id ) !== '0'
		) {
			$classes[] = 'qodef-header-logo-area-in-grid-padding';
		}
		
		$disable_shadow_vertical = succulents_qodef_get_meta_field_intersect( 'vertical_header_shadow', $id ) == 'no';
		if ( $disable_shadow_vertical ) {
			$classes[] = 'qodef-header-vertical-shadow-disable';
		}
		
		$disable_border_vertical = succulents_qodef_get_meta_field_intersect( 'vertical_header_border', $id ) == 'no';
		if ( $disable_border_vertical ) {
			$classes[] = 'qodef-header-vertical-border-disable';
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_header_class' );
}

if ( ! function_exists( 'succulents_qodef_header_area_style' ) ) {
	/**
	 * Function that return styles for header area
	 */
	function succulents_qodef_header_area_style( $style ) {
		$page_id      = succulents_qodef_get_page_id();
		$class_prefix = succulents_qodef_get_unique_page_class( $page_id, true );
		
		$current_style = '';
		
		$menu_area_style              = array();
		$menu_area_grid_style         = array();
		$menu_area_enable_border      = get_post_meta( $page_id, 'qodef_menu_area_border_meta', true ) == 'yes';
		$menu_area_enable_grid_border = get_post_meta( $page_id, 'qodef_menu_area_in_grid_border_meta', true ) == 'yes';
		$menu_area_enable_shadow      = get_post_meta( $page_id, 'qodef_menu_area_shadow_meta', true ) == 'yes';
		$menu_area_enable_grid_shadow = get_post_meta( $page_id, 'qodef_menu_area_in_grid_shadow_meta', true ) == 'yes';
		
		$menu_area_selector      = array( $class_prefix . ' .qodef-page-header .qodef-menu-area' );
		$menu_area_grid_selector = array( $class_prefix . ' .qodef-page-header .qodef-menu-area .qodef-grid .qodef-vertical-align-containers' );
		
		/* menu area style - start */
		
		$menu_area_background_color        = get_post_meta( $page_id, 'qodef_menu_area_background_color_meta', true );
		$menu_area_background_transparency = get_post_meta( $page_id, 'qodef_menu_area_background_transparency_meta', true );
		
		if ( $menu_area_background_transparency === '' ) {
			$menu_area_background_transparency = 1;
		}
		
		$menu_area_background_color_rgba = succulents_qodef_rgba_color( $menu_area_background_color, $menu_area_background_transparency );
		
		if ( $menu_area_background_color_rgba !== null ) {
			$menu_area_style['background-color'] = $menu_area_background_color_rgba;
		}
		
		if ( $menu_area_enable_shadow ) {
			$menu_area_style['box-shadow'] = '0px 1px 3px rgba(0,0,0,0.15)';
		}
		
		if ( $menu_area_enable_border ) {
			$header_border_color = get_post_meta( $page_id, 'qodef_menu_area_border_color_meta', true );
			
			if ( $header_border_color !== '' ) {
				$menu_area_style['border-bottom'] = '1px solid ' . $header_border_color;
			}
		}
		
		
		$menu_container_selector = $class_prefix . ' .qodef-page-header .qodef-vertical-align-containers';
		$menu_container_styles   = array();
		$container_side_padding  = get_post_meta( $page_id, 'qodef_menu_area_side_padding_meta', true );
		
		if ( $container_side_padding !== '' ) {
			if ( succulents_qodef_string_ends_with( $container_side_padding, 'px' ) || succulents_qodef_string_ends_with( $container_side_padding, '%' ) ) {
				$menu_container_styles['padding-left']  = $container_side_padding;
				$menu_container_styles['padding-right'] = $container_side_padding;
			} else {
				$menu_container_styles['padding-left']  = succulents_qodef_filter_px( $container_side_padding ) . 'px';
				$menu_container_styles['padding-right'] = succulents_qodef_filter_px( $container_side_padding ) . 'px';
			}
			
			$current_style .= succulents_qodef_dynamic_css( $menu_container_selector, $menu_container_styles );
		}
		
		/* menu area style - end */
		
		/* menu area in grid style - start */
		
		if ( $menu_area_enable_grid_shadow ) {
			$menu_area_grid_style['box-shadow'] = '0 1px 3px rgba(0,0,0,0.15)';
		}
		
		if ( $menu_area_enable_grid_border ) {
			$header_grid_border_color = get_post_meta( $page_id, 'qodef_menu_area_in_grid_border_color_meta', true );
			
			if ( $header_grid_border_color !== '' ) {
				$menu_area_grid_style['border-bottom'] = '1px solid ' . $header_grid_border_color;
			}
		}
		
		$menu_area_grid_background_color        = get_post_meta( $page_id, 'qodef_menu_area_grid_background_color_meta', true );
		$menu_area_grid_background_transparency = get_post_meta( $page_id, 'qodef_menu_area_grid_background_transparency_meta', true );
		
		if ( $menu_area_grid_background_transparency === '' ) {
			$menu_area_grid_background_transparency = 1;
		}
		
		$menu_area_grid_background_color_rgba = succulents_qodef_rgba_color( $menu_area_grid_background_color, $menu_area_grid_background_transparency );
		
		if ( $menu_area_grid_background_color_rgba !== null ) {
			$menu_area_grid_style['background-color'] = $menu_area_grid_background_color_rgba;
		}
		
		$current_style .= succulents_qodef_dynamic_css( $menu_area_selector, $menu_area_style );
		$current_style .= succulents_qodef_dynamic_css( $menu_area_grid_selector, $menu_area_grid_style );
		
		/* menu area in grid style - end */
		
		/* main menu dropdown area style - start */
		
		$dropdown_top_position = get_post_meta( $page_id, 'qodef_dropdown_top_position_meta', true );
		
		$dropdown_styles = array();
		if ( $dropdown_top_position !== '' ) {
			$dropdown_styles['top'] = succulents_qodef_filter_suffix( $dropdown_top_position, '%' ) . '%';
		}
		
		$dropdown_selector = array( $class_prefix . ' .qodef-page-header .qodef-drop-down .second' );
		
		$current_style .= succulents_qodef_dynamic_css( $dropdown_selector, $dropdown_styles );
		
		/* main menu dropdown area style - end */
		
		/* logo area style - start */
		
		$logo_area_style              = array();
		$logo_area_grid_style         = array();
		$logo_area_enable_border      = get_post_meta( $page_id, 'qodef_logo_area_border_meta', true ) == 'yes';
		$logo_area_enable_grid_border = get_post_meta( $page_id, 'qodef_logo_area_in_grid_border_meta', true ) == 'yes';
		
		$logo_area_selector      = array( $class_prefix . ' .qodef-page-header .qodef-logo-area' );
		$logo_area_grid_selector = array( $class_prefix . ' .qodef-page-header .qodef-logo-area .qodef-grid .qodef-vertical-align-containers' );
		
		$logo_area_background_color        = get_post_meta( $page_id, 'qodef_logo_area_background_color_meta', true );
		$logo_area_background_transparency = get_post_meta( $page_id, 'qodef_logo_area_background_transparency_meta', true );
		
		if ( $logo_area_background_transparency === '' ) {
			$logo_area_background_transparency = 1;
		}
		
		$logo_area_background_color_rgba = succulents_qodef_rgba_color( $logo_area_background_color, $logo_area_background_transparency );
		
		if ( $logo_area_background_color_rgba !== null ) {
			$logo_area_style['background-color'] = $logo_area_background_color_rgba;
		}
		
		if ( $logo_area_enable_border ) {
			$header_border_color = get_post_meta( $page_id, 'qodef_logo_area_border_color_meta', true );
			
			if ( $header_border_color !== '' ) {
				$logo_area_style['border-bottom'] = '1px solid ' . $header_border_color;
			}
		}
		
		/* logo area style - end */
		
		/* logo area in grid style - start */
		
		if ( $logo_area_enable_grid_border ) {
			$header_grid_border_color = get_post_meta( $page_id, 'qodef_logo_area_in_grid_border_color_meta', true );
			
			if ( $header_grid_border_color !== '' ) {
				$logo_area_grid_style['border-bottom'] = '1px solid ' . $header_grid_border_color;
			}
		}
		
		$logo_area_grid_background_color        = get_post_meta( $page_id, 'qodef_logo_area_grid_background_color_meta', true );
		$logo_area_grid_background_transparency = get_post_meta( $page_id, 'qodef_logo_area_grid_background_transparency_meta', true );
		
		if ( $logo_area_grid_background_transparency === '' ) {
			$logo_area_grid_background_transparency = 1;
		}
		
		$logo_area_grid_background_color_rgba = succulents_qodef_rgba_color( $logo_area_grid_background_color, $logo_area_grid_background_transparency );
		
		if ( $logo_area_grid_background_color_rgba !== null ) {
			$logo_area_grid_style['background-color'] = $logo_area_grid_background_color_rgba;
		}
		
		/* logo area in grid style - end */
		
		if ( ! empty( $logo_area_style ) ) {
			$current_style .= succulents_qodef_dynamic_css( $logo_area_selector, $logo_area_style );
		}
		
		if ( ! empty( $logo_area_grid_style ) ) {
			$current_style .= succulents_qodef_dynamic_css( $logo_area_grid_selector, $logo_area_grid_style );
		}
		
		$current_style = apply_filters( 'succulents_qodef_add_header_page_custom_style', $current_style, $class_prefix, $page_id ) . $style;
		
		return $current_style;
	}
	
	add_filter( 'succulents_qodef_add_page_custom_style', 'succulents_qodef_header_area_style' );
}