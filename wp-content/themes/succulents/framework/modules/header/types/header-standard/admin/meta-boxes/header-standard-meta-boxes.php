<?php

if ( ! function_exists( 'succulents_qodef_get_hide_dep_for_header_standard_meta_boxes' ) ) {
	function succulents_qodef_get_hide_dep_for_header_standard_meta_boxes() {
		$hide_dep_options = apply_filters( 'succulents_qodef_header_standard_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'succulents_qodef_header_standard_meta_map' ) ) {
	function succulents_qodef_header_standard_meta_map( $parent ) {
		$hide_dep_options = succulents_qodef_get_hide_dep_for_header_standard_meta_boxes();
		
		succulents_qodef_add_meta_box_field(
			array(
				'parent'          => $parent,
				'type'            => 'select',
				'name'            => 'qodef_set_menu_area_position_meta',
				'default_value'   => '',
				'label'           => esc_html__( 'Choose Menu Area Position', 'succulents' ),
				'description'     => esc_html__( 'Select menu area position in your header', 'succulents' ),
				'options'         => array(
					''       => esc_html__( 'Default', 'succulents' ),
					'left'   => esc_html__( 'Left', 'succulents' ),
					'right'  => esc_html__( 'Right', 'succulents' ),
					'center' => esc_html__( 'Center', 'succulents' )
				),
				'dependency' => array(
					'hide' => array(
						'qodef_header_type_meta'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_additional_header_area_meta_boxes_map', 'succulents_qodef_header_standard_meta_map' );
}