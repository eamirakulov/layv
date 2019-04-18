<?php

if ( ! function_exists( 'succulents_qodef_get_hide_dep_for_header_centered_meta_boxes' ) ) {
	function succulents_qodef_get_hide_dep_for_header_centered_meta_boxes() {
		$hide_dep_options = apply_filters( 'succulents_qodef_header_centered_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'succulents_qodef_header_centered_meta_map' ) ) {
	function succulents_qodef_header_centered_meta_map( $parent ) {
		$hide_dep_options = succulents_qodef_get_hide_dep_for_header_centered_meta_boxes();
		
		succulents_qodef_add_meta_box_field(
			array(
				'parent'          => $parent,
				'type'            => 'text',
				'name'            => 'qodef_logo_wrapper_padding_header_centered_meta',
				'default_value'   => '',
				'label'           => esc_html__( 'Logo Padding', 'succulents' ),
				'description'     => esc_html__( 'Insert padding in format: 0px 0px 1px 0px', 'succulents' ),
				'args'            => array(
					'col_width' => 3
				),
				'dependency' => array(
					'hide' => array(
						'qodef_header_type_meta'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_header_logo_area_additional_meta_boxes_map', 'succulents_qodef_header_centered_meta_map', 10, 1 );
}