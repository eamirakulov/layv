<?php

if ( ! function_exists( 'succulents_qodef_header_types_meta_boxes' ) ) {
	function succulents_qodef_header_types_meta_boxes() {
		$header_type_options = apply_filters( 'succulents_qodef_header_type_meta_boxes', $header_type_options = array( '' => esc_html__( 'Default', 'succulents' ) ) );
		
		return $header_type_options;
	}
}

if ( ! function_exists( 'succulents_qodef_get_hide_dep_for_header_behavior_meta_boxes' ) ) {
	function succulents_qodef_get_hide_dep_for_header_behavior_meta_boxes() {
		$hide_dep_options = apply_filters( 'succulents_qodef_header_behavior_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

foreach ( glob( QODE_FRAMEWORK_HEADER_ROOT_DIR . '/admin/meta-boxes/*/*.php' ) as $meta_box_load ) {
	include_once $meta_box_load;
}

foreach ( glob( QODE_FRAMEWORK_HEADER_TYPES_ROOT_DIR . '/*/admin/meta-boxes/*.php' ) as $meta_box_load ) {
	include_once $meta_box_load;
}

if ( ! function_exists( 'succulents_qodef_map_header_meta' ) ) {
	function succulents_qodef_map_header_meta() {
		$header_type_meta_boxes              = succulents_qodef_header_types_meta_boxes();
		$header_behavior_meta_boxes_hide_dep = succulents_qodef_get_hide_dep_for_header_behavior_meta_boxes();
		
		$header_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'succulents_qodef_set_scope_for_meta_boxes', array( 'page', 'post' ), 'header_meta' ),
				'title' => esc_html__( 'Header', 'succulents' ),
				'name'  => 'header_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_header_type_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Choose Header Type', 'succulents' ),
				'description'   => esc_html__( 'Select header type layout', 'succulents' ),
				'parent'        => $header_meta_box,
				'options'       => $header_type_meta_boxes
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_header_style_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Header Skin', 'succulents' ),
				'description'   => esc_html__( 'Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style', 'succulents' ),
				'parent'        => $header_meta_box,
				'options'       => array(
					''             => esc_html__( 'Default', 'succulents' ),
					'light-header' => esc_html__( 'Light', 'succulents' ),
					'dark-header'  => esc_html__( 'Dark', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'parent'          => $header_meta_box,
				'type'            => 'select',
				'name'            => 'qodef_header_behaviour_meta',
				'default_value'   => '',
				'label'           => esc_html__( 'Choose Header Behaviour', 'succulents' ),
				'description'     => esc_html__( 'Select the behaviour of header when you scroll down to page', 'succulents' ),
				'options'         => array(
					''                                => esc_html__( 'Default', 'succulents' ),
					'fixed-on-scroll'                 => esc_html__( 'Fixed on scroll', 'succulents' ),
					'no-behavior'                     => esc_html__( 'No Behavior', 'succulents' ),
					'sticky-header-on-scroll-up'      => esc_html__( 'Sticky on scroll up', 'succulents' ),
					'sticky-header-on-scroll-down-up' => esc_html__( 'Sticky on scroll up/down', 'succulents' )
				),
				'dependency' => array(
					'hide' => array(
						'qodef_header_type_meta'  => $header_behavior_meta_boxes_hide_dep
					)
				)
			)
		);
		
		//additional area
		do_action( 'succulents_qodef_additional_header_area_meta_boxes_map', $header_meta_box );
		
		//top area
		do_action( 'succulents_qodef_header_top_area_meta_boxes_map', $header_meta_box );
		
		//logo area
		do_action( 'succulents_qodef_header_logo_area_meta_boxes_map', $header_meta_box );
		
		//menu area
		do_action( 'succulents_qodef_header_menu_area_meta_boxes_map', $header_meta_box );
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_header_meta', 50 );
}