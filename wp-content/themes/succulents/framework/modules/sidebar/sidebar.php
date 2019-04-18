<?php

if ( ! function_exists( 'succulents_qodef_register_sidebars' ) ) {
	/**
	 * Function that registers theme's sidebars
	 */
	function succulents_qodef_register_sidebars() {
		
		register_sidebar(
			array(
				'id'            => 'sidebar',
				'name'          => esc_html__( 'Sidebar', 'succulents' ),
				'description'   => esc_html__( 'Default Sidebar', 'succulents' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="qodef-widget-title-holder"><h3 class="qodef-widget-title">',
				'after_title'   => '</h3></div>'
			)
		);
	}
	
	add_action( 'widgets_init', 'succulents_qodef_register_sidebars', 1 );
}

if ( ! function_exists( 'succulents_qodef_add_support_custom_sidebar' ) ) {
	/**
	 * Function that adds theme support for custom sidebars. It also creates SucculentsQodefSidebar object
	 */
	function succulents_qodef_add_support_custom_sidebar() {
		add_theme_support( 'SucculentsQodefSidebar' );
		
		if ( get_theme_support( 'SucculentsQodefSidebar' ) ) {
			new SucculentsQodefSidebar();
		}
	}
	
	add_action( 'after_setup_theme', 'succulents_qodef_add_support_custom_sidebar' );
}