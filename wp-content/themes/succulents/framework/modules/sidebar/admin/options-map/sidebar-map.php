<?php

if ( ! function_exists( 'succulents_qodef_sidebar_options_map' ) ) {
	function succulents_qodef_sidebar_options_map() {
		
		succulents_qodef_add_admin_page(
			array(
				'slug'  => '_sidebar_page',
				'title' => esc_html__( 'Sidebar Area', 'succulents' ),
				'icon'  => 'fa fa-indent'
			)
		);
		
		$sidebar_panel = succulents_qodef_add_admin_panel(
			array(
				'title' => esc_html__( 'Sidebar Area', 'succulents' ),
				'name'  => 'sidebar',
				'page'  => '_sidebar_page'
			)
		);
		
		succulents_qodef_add_admin_field( array(
			'name'          => 'sidebar_layout',
			'type'          => 'select',
			'label'         => esc_html__( 'Sidebar Layout', 'succulents' ),
			'description'   => esc_html__( 'Choose a sidebar layout for pages', 'succulents' ),
			'parent'        => $sidebar_panel,
			'default_value' => 'no-sidebar',
            'options'       => succulents_qodef_get_custom_sidebars_options()
		) );
		
		$succulents_custom_sidebars = succulents_qodef_get_custom_sidebars();
		if ( count( $succulents_custom_sidebars ) > 0 ) {
			succulents_qodef_add_admin_field( array(
				'name'        => 'custom_sidebar_area',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Sidebar to Display', 'succulents' ),
				'description' => esc_html__( 'Choose a sidebar to display on pages. Default sidebar is "Sidebar"', 'succulents' ),
				'parent'      => $sidebar_panel,
				'options'     => $succulents_custom_sidebars,
				'args'        => array(
					'select2' => true
				)
			) );
		}
	}
	
	add_action( 'succulents_qodef_options_map', 'succulents_qodef_sidebar_options_map', 9 );
}