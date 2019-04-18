<?php

if ( ! function_exists( 'succulents_qodef_theme_version_class' ) ) {
	/**
	 * Function that adds classes on body for version of theme
	 */
	function succulents_qodef_theme_version_class( $classes ) {
		$current_theme = wp_get_theme();
		
		//is child theme activated?
		if ( $current_theme->parent() ) {
			//add child theme version
			$classes[] = strtolower( $current_theme->get( 'Name' ) ) . '-child-ver-' . $current_theme->get( 'Version' );
			
			//get parent theme
			$current_theme = $current_theme->parent();
		}
		
		if ( $current_theme->exists() && $current_theme->get( 'Version' ) != '' ) {
			$classes[] = strtolower( $current_theme->get( 'Name' ) ) . '-ver-' . $current_theme->get( 'Version' );
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_theme_version_class' );
}

if ( ! function_exists( 'succulents_qodef_boxed_class' ) ) {
	/**
	 * Function that adds classes on body for boxed layout
	 */
	function succulents_qodef_boxed_class( $classes ) {
		$allow_boxed_layout = true;
		$allow_boxed_layout = apply_filters( 'succulents_qodef_allow_content_boxed_layout', $allow_boxed_layout );
		
		if ( $allow_boxed_layout && succulents_qodef_get_meta_field_intersect( 'boxed' ) === 'yes' ) {
			$classes[] = 'qodef-boxed';
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_boxed_class' );
}

if ( ! function_exists( 'succulents_qodef_paspartu_class' ) ) {
	/**
	 * Function that adds classes on body for paspartu layout
	 */
	function succulents_qodef_paspartu_class( $classes ) {
		$id = succulents_qodef_get_page_id();
		
		//is paspartu layout turned on?
		if ( succulents_qodef_get_meta_field_intersect( 'paspartu', $id ) === 'yes' ) {
			$classes[] = 'qodef-paspartu-enabled';
			
			if ( succulents_qodef_get_meta_field_intersect( 'disable_top_paspartu', $id ) === 'yes' ) {
				$classes[] = 'qodef-top-paspartu-disabled';
			}
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_paspartu_class' );
}

if ( ! function_exists( 'succulents_qodef_page_smooth_scroll_class' ) ) {
	/**
	 * Function that adds classes on body for page smooth scroll
	 */
	function succulents_qodef_page_smooth_scroll_class( $classes ) {
		//is smooth scroll enabled enabled?
		if ( succulents_qodef_options()->getOptionValue( 'page_smooth_scroll' ) == 'yes' ) {
			$classes[] = 'qodef-smooth-scroll';
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_page_smooth_scroll_class' );
}

if ( ! function_exists( 'succulents_qodef_smooth_page_transitions_class' ) ) {
	/**
	 * Function that adds classes on body for smooth page transitions
	 */
	function succulents_qodef_smooth_page_transitions_class( $classes ) {
		$id = succulents_qodef_get_page_id();
		
		if ( succulents_qodef_get_meta_field_intersect( 'smooth_page_transitions', $id ) == 'yes' ) {
			$classes[] = 'qodef-smooth-page-transitions';
			
			if ( succulents_qodef_get_meta_field_intersect( 'page_transition_preloader', $id ) == 'yes' ) {
				$classes[] = 'qodef-smooth-page-transitions-preloader';
			}
			
			if ( succulents_qodef_get_meta_field_intersect( 'page_transition_fadeout', $id ) == 'yes' ) {
				$classes[] = 'qodef-smooth-page-transitions-fadeout';
			}
			
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_smooth_page_transitions_class' );
}

if ( ! function_exists( 'succulents_qodef_content_initial_width_body_class' ) ) {
	/**
	 * Function that adds transparent content class to body.
	 *
	 * @param $classes array of body classes
	 *
	 * @return array with transparent content body class added
	 */
	function succulents_qodef_content_initial_width_body_class( $classes ) {
		$initial_content_width = succulents_qodef_get_meta_field_intersect( 'initial_content_width', succulents_qodef_get_page_id() );
		
		if ( ! empty( $initial_content_width ) ) {
			$classes[] = $initial_content_width;
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_content_initial_width_body_class' );
}

if ( ! function_exists( 'succulents_qodef_set_content_behind_header_class' ) ) {
	function succulents_qodef_set_content_behind_header_class( $classes ) {
		$id = succulents_qodef_get_page_id();
		
		if ( get_post_meta( $id, 'qodef_page_content_behind_header_meta', true ) === 'yes' ) {
			$classes[] = 'qodef-content-is-behind-header';
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_set_content_behind_header_class' );
}

if ( ! function_exists( 'succulents_qodef_set_no_google_api_class' ) ) {
	function succulents_qodef_set_no_google_api_class( $classes ) {
		$google_map_api = succulents_qodef_options()->getOptionValue( 'google_maps_api_key' );

		if ( empty( $google_map_api ) ) {
			$classes[] = 'qodef-empty-google-api';
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'succulents_qodef_set_no_google_api_class' );
}