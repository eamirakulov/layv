<?php

if ( ! function_exists( 'succulents_qodef_get_hide_dep_for_header_vertical_area_meta_boxes' ) ) {
	function succulents_qodef_get_hide_dep_for_header_vertical_area_meta_boxes() {
		$hide_dep_options = apply_filters( 'succulents_qodef_header_vertical_hide_meta_boxes', $hide_dep_options = array( '' => '' ) );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'succulents_qodef_header_vertical_area_meta_options_map' ) ) {
	function succulents_qodef_header_vertical_area_meta_options_map( $header_meta_box ) {
		$hide_dep_options = succulents_qodef_get_hide_dep_for_header_vertical_area_meta_boxes();
		
		$header_vertical_area_meta_container = succulents_qodef_add_admin_container(
			array(
				'parent'          => $header_meta_box,
				'name'            => 'header_vertical_area_container',
				'dependency' => array(
					'hide' => array(
						'qodef_header_type_meta' => $hide_dep_options
					)
				)
			)
		);
		
		succulents_qodef_add_admin_section_title(
			array(
				'parent' => $header_vertical_area_meta_container,
				'name'   => 'vertical_area_style',
				'title'  => esc_html__( 'Vertical Area Style', 'succulents' )
			)
		);
		
		$succulents_custom_sidebars = succulents_qodef_get_custom_sidebars();
		if ( count( $succulents_custom_sidebars ) > 0 ) {
			succulents_qodef_add_meta_box_field(
				array(
					'name'        => 'qodef_custom_vertical_area_sidebar_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Custom Widget Area in Vertical area', 'succulents' ),
					'description' => esc_html__( 'Choose custom widget area to display in vertical menu"', 'succulents' ),
					'parent'      => $header_vertical_area_meta_container,
					'options'     => $succulents_custom_sidebars
				)
			);
		}
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_vertical_header_background_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'succulents' ),
				'description' => esc_html__( 'Set background color for vertical menu', 'succulents' ),
				'parent'      => $header_vertical_area_meta_container
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_vertical_header_background_image_meta',
				'type'          => 'image',
				'default_value' => '',
				'label'         => esc_html__( 'Background Image', 'succulents' ),
				'description'   => esc_html__( 'Set background image for vertical menu', 'succulents' ),
				'parent'        => $header_vertical_area_meta_container
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_disable_vertical_header_background_image_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Disable Background Image', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will hide background image in Vertical Menu', 'succulents' ),
				'parent'        => $header_vertical_area_meta_container
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_vertical_header_shadow_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Shadow', 'succulents' ),
				'description'   => esc_html__( 'Set shadow on vertical menu', 'succulents' ),
				'parent'        => $header_vertical_area_meta_container,
				'default_value' => '',
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_vertical_header_border_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Vertical Area Border', 'succulents' ),
				'description'   => esc_html__( 'Set border on vertical area', 'succulents' ),
				'parent'        => $header_vertical_area_meta_container,
				'default_value' => '',
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
		
		$vertical_header_border_container = succulents_qodef_add_admin_container(
			array(
				'type'            => 'container',
				'name'            => 'vertical_header_border_container',
				'parent'          => $header_vertical_area_meta_container,
				'dependency' => array(
					'show' => array(
						'qodef_vertical_header_border_meta'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_vertical_header_border_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Border Color', 'succulents' ),
				'description' => esc_html__( 'Choose color of border', 'succulents' ),
				'parent'      => $vertical_header_border_container
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_vertical_header_center_content_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Center Content', 'succulents' ),
				'description'   => esc_html__( 'Set content in vertical center', 'succulents' ),
				'parent'        => $header_vertical_area_meta_container,
				'default_value' => '',
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
	}
	
	add_action( 'succulents_qodef_additional_header_area_meta_boxes_map', 'succulents_qodef_header_vertical_area_meta_options_map', 10, 1 );
}