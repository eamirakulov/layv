<?php

if ( ! function_exists( 'succulents_qodef_register_header_minimal_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function succulents_qodef_register_header_minimal_type( $header_types ) {
		$header_type = array(
			'header-minimal' => 'SucculentsQodef\Modules\Header\Types\HeaderMinimal'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'succulents_qodef_init_register_header_minimal_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function succulents_qodef_init_register_header_minimal_type() {
		add_filter( 'succulents_qodef_register_header_type_class', 'succulents_qodef_register_header_minimal_type' );
	}
	
	add_action( 'succulents_qodef_before_header_function_init', 'succulents_qodef_init_register_header_minimal_type' );
}

if ( ! function_exists( 'succulents_qodef_include_header_minimal_full_screen_menu' ) ) {
	/**
	 * Registers additional menu navigation for theme
	 */
	function succulents_qodef_include_header_minimal_full_screen_menu( $menus ) {
		$menus['popup-navigation'] = esc_html__( 'Full Screen Navigation', 'succulents' );
		
		return $menus;
	}
	
	if ( succulents_qodef_check_is_header_type_enabled( 'header-minimal' ) ) {
		add_filter( 'succulents_qodef_register_headers_menu', 'succulents_qodef_include_header_minimal_full_screen_menu' );
	}
}

if ( ! function_exists( 'succulents_qodef_register_header_minimal_full_screen_menu_widgets' ) ) {
	/**
	 * Registers additional widget areas for this header type
	 */
	function succulents_qodef_register_header_minimal_full_screen_menu_widgets() {
		register_sidebar(
			array(
				'id'            => 'fullscreen_menu_above',
				'name'          => esc_html__( 'Fullscreen Menu Top', 'succulents' ),
				'description'   => esc_html__( 'This widget area is rendered above full screen menu', 'succulents' ),
				'before_widget' => '<div class="%2$s qodef-fullscreen-menu-above-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h5 class="qodef-widget-title">',
				'after_title'   => '</h5>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'fullscreen_menu_below',
				'name'          => esc_html__( 'Fullscreen Menu Bottom', 'succulents' ),
				'description'   => esc_html__( 'This widget area is rendered below full screen menu', 'succulents' ),
				'before_widget' => '<div class="%2$s qodef-fullscreen-menu-below-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h5 class="qodef-widget-title">',
				'after_title'   => '</h5>'
			)
		);
	}
	
	if ( succulents_qodef_check_is_header_type_enabled( 'header-minimal' ) ) {
		add_action( 'widgets_init', 'succulents_qodef_register_header_minimal_full_screen_menu_widgets' );
	}
}