<?php

if ( ! function_exists( 'succulents_qodef_get_hide_dep_for_header_standard_options' ) ) {
	function succulents_qodef_get_hide_dep_for_header_standard_options() {
		$hide_dep_options = apply_filters( 'succulents_qodef_header_standard_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'succulents_qodef_header_standard_map' ) ) {
	function succulents_qodef_header_standard_map( $parent ) {
		$hide_dep_options = succulents_qodef_get_hide_dep_for_header_standard_options();
		
		succulents_qodef_add_admin_field(
			array(
				'parent'          => $parent,
				'type'            => 'select',
				'name'            => 'set_menu_area_position',
				'default_value'   => 'right',
				'label'           => esc_html__( 'Choose Menu Area Position', 'succulents' ),
				'description'     => esc_html__( 'Select menu area position in your header', 'succulents' ),
				'options'         => array(
					'right'  => esc_html__( 'Right', 'succulents' ),
					'left'   => esc_html__( 'Left', 'succulents' ),
					'center' => esc_html__( 'Center', 'succulents' )
				),
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_additional_header_menu_area_options_map', 'succulents_qodef_header_standard_map' );
}