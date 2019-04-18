<?php

if ( ! function_exists( 'succulents_qodef_map_sidebar_meta' ) ) {
	function succulents_qodef_map_sidebar_meta() {
		$qodef_sidebar_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'succulents_qodef_set_scope_for_meta_boxes', array( 'page' ), 'sidebar_meta' ),
				'title' => esc_html__( 'Sidebar', 'succulents' ),
				'name'  => 'sidebar_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_sidebar_layout_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Sidebar Layout', 'succulents' ),
				'description' => esc_html__( 'Choose the sidebar layout', 'succulents' ),
				'parent'      => $qodef_sidebar_meta_box,
                'options'       => succulents_qodef_get_custom_sidebars_options( true )
			)
		);
		
		$qodef_custom_sidebars = succulents_qodef_get_custom_sidebars();
		if ( count( $qodef_custom_sidebars ) > 0 ) {
			succulents_qodef_add_meta_box_field(
				array(
					'name'        => 'qodef_custom_sidebar_area_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Widget Area in Sidebar', 'succulents' ),
					'description' => esc_html__( 'Choose Custom Widget area to display in Sidebar"', 'succulents' ),
					'parent'      => $qodef_sidebar_meta_box,
					'options'     => $qodef_custom_sidebars,
					'args'        => array(
						'select2' => true
					)
				)
			);
		}
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_sidebar_meta', 31 );
}