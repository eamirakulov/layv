<?php

if ( ! function_exists( 'succulents_qodef_get_hide_dep_for_header_vertical_area_options' ) ) {
	function succulents_qodef_get_hide_dep_for_header_vertical_area_options() {
		$hide_dep_options = apply_filters( 'succulents_qodef_header_vertical_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'succulents_qodef_header_vertical_options_map' ) ) {
	function succulents_qodef_header_vertical_options_map( $panel_header ) {
		$hide_dep_options = succulents_qodef_get_hide_dep_for_header_vertical_area_options();
		
		$vertical_area_container = succulents_qodef_add_admin_container_no_style(
			array(
				'parent'          => $panel_header,
				'name'            => 'header_vertical_area_container',
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
		
		succulents_qodef_add_admin_section_title(
			array(
				'parent' => $vertical_area_container,
				'name'   => 'menu_area_style',
				'title'  => esc_html__( 'Vertical Area Style', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'        => 'vertical_header_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'succulents' ),
				'description' => esc_html__( 'Set background color for vertical menu', 'succulents' ),
				'parent'      => $vertical_area_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'vertical_header_background_image',
				'type'          => 'image',
				'default_value' => '',
				'label'         => esc_html__( 'Background Image', 'succulents' ),
				'description'   => esc_html__( 'Set background image for vertical menu', 'succulents' ),
				'parent'        => $vertical_area_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $vertical_area_container,
				'type'          => 'yesno',
				'name'          => 'vertical_header_shadow',
				'default_value' => 'no',
				'label'         => esc_html__( 'Shadow', 'succulents' ),
				'description'   => esc_html__( 'Set shadow on vertical header', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $vertical_area_container,
				'type'          => 'yesno',
				'name'          => 'vertical_header_border',
				'default_value' => 'no',
				'label'         => esc_html__( 'Vertical Area Border', 'succulents' ),
				'description'   => esc_html__( 'Set border on vertical area', 'succulents' )
			)
		);
		
		$vertical_header_shadow_border_container = succulents_qodef_add_admin_container(
			array(
				'parent'          => $vertical_area_container,
				'name'            => 'vertical_header_shadow_border_container',
				'dependency' => array(
					'hide' => array(
						'vertical_header_border'  => 'no'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $vertical_header_shadow_border_container,
				'type'          => 'color',
				'name'          => 'vertical_header_border_color',
				'default_value' => '',
				'label'         => esc_html__( 'Border Color', 'succulents' ),
				'description'   => esc_html__( 'Set border color for vertical area', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $vertical_area_container,
				'type'          => 'yesno',
				'name'          => 'vertical_header_center_content',
				'default_value' => 'no',
				'label'         => esc_html__( 'Center Content', 'succulents' ),
				'description'   => esc_html__( 'Set content in vertical center', 'succulents' ),
			)
		);
		
		do_action( 'succulents_qodef_header_vertical_area_additional_options', $panel_header );
	}
	
	add_action( 'succulents_qodef_additional_header_menu_area_options_map', 'succulents_qodef_header_vertical_options_map' );
}