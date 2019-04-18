<?php

if ( ! function_exists( 'succulents_qodef_sticky_header_global_js_var' ) ) {
	function succulents_qodef_sticky_header_global_js_var( $global_variables ) {
		$global_variables['qodefStickyHeaderHeight']             = succulents_qodef_get_sticky_header_height();
		$global_variables['qodefStickyHeaderTransparencyHeight'] = succulents_qodef_get_sticky_header_height_of_complete_transparency();
		
		return $global_variables;
	}
	
	add_filter( 'succulents_qodef_js_global_variables', 'succulents_qodef_sticky_header_global_js_var' );
}

if ( ! function_exists( 'succulents_qodef_sticky_header_per_page_js_var' ) ) {
	function succulents_qodef_sticky_header_per_page_js_var( $perPageVars ) {
		$perPageVars['qodefStickyScrollAmount'] = succulents_qodef_get_sticky_scroll_amount();
		
		return $perPageVars;
	}
	
	add_filter( 'succulents_qodef_per_page_js_vars', 'succulents_qodef_sticky_header_per_page_js_var' );
}

if ( ! function_exists( 'succulents_qodef_register_sticky_header_areas' ) ) {
	/**
	 * Registers widget area for sticky header
	 */
	function succulents_qodef_register_sticky_header_areas() {
		register_sidebar(
			array(
				'id'            => 'qodef-sticky-right',
				'name'          => esc_html__( 'Sticky Header Widget Area', 'succulents' ),
				'description'   => esc_html__( 'Widgets added here will appear on the right hand side from the sticky menu', 'succulents' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s qodef-sticky-right">',
				'after_widget'  => '</div>'
			)
		);
	}
	
	add_action( 'widgets_init', 'succulents_qodef_register_sticky_header_areas' );
}

if ( ! function_exists( 'succulents_qodef_get_sticky_menu' ) ) {
	/**
	 * Loads sticky menu HTML
	 *
	 * @param string $additional_class addition class to pass to template
	 */
	function succulents_qodef_get_sticky_menu( $additional_class = 'qodef-default-nav' ) {
		succulents_qodef_get_module_template_part( 'templates/sticky-navigation', 'header/types/sticky-header', '', array( 'additional_class' => $additional_class ) );
	}
}

if ( ! function_exists( 'succulents_qodef_get_sticky_header' ) ) {
	/**
	 * Loads sticky header behavior HTML
	 */
	function succulents_qodef_get_sticky_header( $slug = '', $module = '' ) {
        $page_id             = succulents_qodef_get_page_id();
		$sticky_in_grid      = succulents_qodef_options()->getOptionValue( 'sticky_header_in_grid' ) == 'yes' ? true : false;
		$header_in_grid_meta = get_post_meta( $page_id, 'qodef_menu_area_in_grid_meta', true);
		
		if ( $header_in_grid_meta === 'yes' && ! $sticky_in_grid ) {
			$sticky_in_grid = true;
		} else if ( $header_in_grid_meta === 'no' && $sticky_in_grid ) {
			$sticky_in_grid = false;
		}
		
		$parameters = array(
			'hide_logo'             => succulents_qodef_options()->getOptionValue( 'hide_logo' ) == 'yes' ? true : false,
			'sticky_header_in_grid' => $sticky_in_grid,
            'menu_area_position'    => succulents_qodef_get_meta_field_intersect( 'set_menu_area_position', $page_id )

		);
		
		$module = ! empty( $module ) ? $module : 'header/types/sticky-header';
		
		succulents_qodef_get_module_template_part( 'templates/sticky-header', $module, $slug, $parameters );
	}
}

if ( ! function_exists( 'succulents_qodef_get_sticky_header_height' ) ) {
	/**
	 * Returns top sticky header height
	 *
	 * @return bool|int|void
	 */
	function succulents_qodef_get_sticky_header_height() {
		$allow_sticky_behavior = true;
		$allow_sticky_behavior = apply_filters( 'succulents_qodef_allow_sticky_header_behavior', $allow_sticky_behavior );
		$header_behaviour      = succulents_qodef_get_meta_field_intersect( 'header_behaviour' );
		
		//sticky menu height, needed only for sticky header on scroll up
		if ( $allow_sticky_behavior && in_array( $header_behaviour, array( 'sticky-header-on-scroll-up' ) ) ) {
			$sticky_header_height = succulents_qodef_filter_px( succulents_qodef_options()->getOptionValue( 'sticky_header_height' ) );
			
			return $sticky_header_height !== '' ? intval( $sticky_header_height ) : 70;
		} else {
			return 0;
		}
	}
}

if ( ! function_exists( 'succulents_qodef_get_sticky_header_height_of_complete_transparency' ) ) {
	/**
	 * Returns top sticky header height it is fully transparent. used in anchor logic
	 *
	 * @return bool|int|void
	 */
	function succulents_qodef_get_sticky_header_height_of_complete_transparency() {
		$allow_sticky_behavior = true;
		$allow_sticky_behavior = apply_filters( 'succulents_qodef_allow_sticky_header_behavior', $allow_sticky_behavior );
		
		if ( $allow_sticky_behavior ) {
			$stickyHeaderTransparent = succulents_qodef_options()->getOptionValue( 'sticky_header_background_color' ) !== '' && succulents_qodef_options()->getOptionValue( 'sticky_header_transparency' ) === '0';
			
			if ( $stickyHeaderTransparent ) {
				return 0;
			} else {
				$sticky_header_height = succulents_qodef_filter_px( succulents_qodef_options()->getOptionValue( 'sticky_header_height' ) );
				
				return $sticky_header_height !== '' ? intval( $sticky_header_height ) : 70;
			}
		} else {
			return 0;
		}
	}
}

if ( ! function_exists( 'succulents_qodef_get_sticky_scroll_amount' ) ) {
	/**
	 * Returns top sticky scroll amount
	 *
	 * @return bool|int|void
	 */
	function succulents_qodef_get_sticky_scroll_amount() {
		$allow_sticky_behavior = true;
		$allow_sticky_behavior = apply_filters( 'succulents_qodef_allow_sticky_header_behavior', $allow_sticky_behavior );
		$header_behaviour      = succulents_qodef_get_meta_field_intersect( 'header_behaviour' );
		
		//sticky menu scroll amount
		if ( $allow_sticky_behavior && in_array( $header_behaviour, array( 'sticky-header-on-scroll-up', 'sticky-header-on-scroll-down-up' ) ) ) {
			$sticky_scroll_amount = succulents_qodef_filter_px( succulents_qodef_get_meta_field_intersect( 'scroll_amount_for_sticky' ) );
			
			return $sticky_scroll_amount !== '' ? intval( $sticky_scroll_amount ) : 0;
		} else {
			return 0;
		}
	}
}