<?php

if ( ! function_exists( 'succulents_qodef_get_title_types_meta_boxes' ) ) {
	function succulents_qodef_get_title_types_meta_boxes() {
		$title_type_options = apply_filters( 'succulents_qodef_title_type_meta_boxes', $title_type_options = array( '' => esc_html__( 'Default', 'succulents' ) ) );
		
		return $title_type_options;
	}
}

foreach ( glob( QODE_FRAMEWORK_MODULES_ROOT_DIR . '/title/types/*/admin/meta-boxes/*.php' ) as $meta_box_load ) {
	include_once $meta_box_load;
}

if ( ! function_exists( 'succulents_qodef_map_title_meta' ) ) {
	function succulents_qodef_map_title_meta() {
		$title_type_meta_boxes = succulents_qodef_get_title_types_meta_boxes();
		
		$title_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'succulents_qodef_set_scope_for_meta_boxes', array( 'page', 'post' ), 'title_meta' ),
				'title' => esc_html__( 'Title', 'succulents' ),
				'name'  => 'title_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_show_title_area_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'succulents' ),
				'description'   => esc_html__( 'Disabling this option will turn off page title area', 'succulents' ),
				'parent'        => $title_meta_box,
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
		
			$show_title_area_meta_container = succulents_qodef_add_admin_container(
				array(
					'parent'          => $title_meta_box,
					'name'            => 'qodef_show_title_area_meta_container',
					'dependency' => array(
						'hide' => array(
							'qodef_show_title_area_meta' => 'no'
						)
					)
				)
			);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_type_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area Type', 'succulents' ),
						'description'   => esc_html__( 'Choose title type', 'succulents' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => $title_type_meta_boxes
					)
				);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_in_grid_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area In Grid', 'succulents' ),
						'description'   => esc_html__( 'Set title area content to be in grid', 'succulents' ),
						'options'       => succulents_qodef_get_yes_no_select_array(),
						'parent'        => $show_title_area_meta_container
					)
				);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_title_area_height_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Height', 'succulents' ),
						'description' => esc_html__( 'Set a height for Title Area', 'succulents' ),
						'parent'      => $show_title_area_meta_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px'
						)
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_title_area_background_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Background Color', 'succulents' ),
						'description' => esc_html__( 'Choose a background color for title area', 'succulents' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_title_area_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'succulents' ),
						'description' => esc_html__( 'Choose an Image for title area', 'succulents' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_background_image_behavior_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Behavior', 'succulents' ),
						'description'   => esc_html__( 'Choose title area background image behavior', 'succulents' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''                    => esc_html__( 'Default', 'succulents' ),
							'hide'                => esc_html__( 'Hide Image', 'succulents' ),
							'responsive'          => esc_html__( 'Enable Responsive Image', 'succulents' ),
							'responsive-disabled' => esc_html__( 'Disable Responsive Image', 'succulents' ),
							'parallax'            => esc_html__( 'Enable Parallax Image', 'succulents' ),
							'parallax-zoom-out'   => esc_html__( 'Enable Parallax With Zoom Out Image', 'succulents' ),
							'parallax-disabled'   => esc_html__( 'Disable Parallax Image', 'succulents' )
						)
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_vertical_alignment_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Vertical Alignment', 'succulents' ),
						'description'   => esc_html__( 'Specify title area content vertical alignment', 'succulents' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''              => esc_html__( 'Default', 'succulents' ),
							'header-bottom' => esc_html__( 'From Bottom of Header', 'succulents' ),
							'window-top'    => esc_html__( 'From Window Top', 'succulents' )
						)
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_title_tag_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Tag', 'succulents' ),
						'options'       => succulents_qodef_get_title_tag( true ),
						'parent'        => $show_title_area_meta_container
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_title_text_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Title Color', 'succulents' ),
						'description' => esc_html__( 'Choose a color for title text', 'succulents' ),
						'parent'      => $show_title_area_meta_container
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_subtitle_meta',
						'type'          => 'text',
						'default_value' => '',
						'label'         => esc_html__( 'Subtitle Text', 'succulents' ),
						'description'   => esc_html__( 'Enter your subtitle text', 'succulents' ),
						'parent'        => $show_title_area_meta_container,
						'args'          => array(
							'col_width' => 6
						)
					)
				);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_subtitle_tag_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Subtitle Tag', 'succulents' ),
						'options'       => succulents_qodef_get_title_tag( true, array( 'p' => 'p' ) ),
						'parent'        => $show_title_area_meta_container
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_subtitle_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Subtitle Color', 'succulents' ),
						'description' => esc_html__( 'Choose a color for subtitle text', 'succulents' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
		/***************** Additional Title Area Layout - start *****************/
		
		do_action( 'succulents_qodef_additional_title_area_meta_boxes', $show_title_area_meta_container );
		
		/***************** Additional Title Area Layout - end *****************/
		
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_title_meta', 60 );
}