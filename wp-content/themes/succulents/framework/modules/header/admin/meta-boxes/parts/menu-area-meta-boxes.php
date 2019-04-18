<?php

if ( ! function_exists( 'succulents_qodef_get_hide_dep_for_header_menu_area_meta_boxes' ) ) {
	function succulents_qodef_get_hide_dep_for_header_menu_area_meta_boxes() {
		$hide_dep_options = apply_filters( 'succulents_qodef_header_menu_area_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'succulents_qodef_get_hide_dep_for_header_menu_area_widgets_meta_boxes' ) ) {
	function succulents_qodef_get_hide_dep_for_header_menu_area_widgets_meta_boxes() {
		$hide_dep_options = apply_filters( 'succulents_qodef_header_menu_area_widgets_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'succulents_qodef_header_menu_area_meta_options_map' ) ) {
	function succulents_qodef_header_menu_area_meta_options_map( $header_meta_box ) {
		$hide_dep_options = succulents_qodef_get_hide_dep_for_header_menu_area_meta_boxes();
		$hide_dep_widgets = succulents_qodef_get_hide_dep_for_header_menu_area_widgets_meta_boxes();
		
		$menu_area_container = succulents_qodef_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'menu_area_container',
				'parent'     => $header_meta_box,
				'dependency' => array(
					'hide' => array(
						'qodef_header_type_meta' => $hide_dep_options
					)
				),
				'args'       => array(
					'enable_panels_for_default_value' => true
				)
			)
		);
		
		succulents_qodef_add_admin_section_title(
			array(
				'parent' => $menu_area_container,
				'name'   => 'menu_area_style',
				'title'  => esc_html__( 'Menu Area Style', 'succulents' )
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_disable_header_widget_menu_area_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Disable Header Menu Area Widget', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will hide widget area from the menu area', 'succulents' ),
				'parent'        => $menu_area_container,
				'dependency' => array(
					'hide' => array(
						'qodef_header_type_meta' => $hide_dep_widgets
					)
				)
			)
		);
		
		$succulents_custom_sidebars = succulents_qodef_get_custom_sidebars();
		if ( count( $succulents_custom_sidebars ) > 0 ) {
			succulents_qodef_add_meta_box_field(
				array(
					'name'        => 'qodef_custom_menu_area_sidebar_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Custom Widget Area In Menu Area', 'succulents' ),
					'description' => esc_html__( 'Choose custom widget area to display in header menu area"', 'succulents' ),
					'parent'      => $menu_area_container,
					'options'     => $succulents_custom_sidebars,
					'dependency' => array(
						'hide' => array(
							'qodef_header_type_meta' => $hide_dep_widgets
						)
					)
				)
			);
		}
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_menu_area_in_grid_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Menu Area In Grid', 'succulents' ),
				'description'   => esc_html__( 'Set menu area content to be in grid', 'succulents' ),
				'parent'        => $menu_area_container,
				'default_value' => '',
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
		
		$menu_area_in_grid_container = succulents_qodef_add_admin_container(
			array(
				'type'            => 'container',
				'name'            => 'menu_area_in_grid_container',
				'parent'          => $menu_area_container,
				'dependency' => array(
					'show' => array(
						'qodef_menu_area_in_grid_meta'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_grid_background_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Grid Background Color', 'succulents' ),
				'description' => esc_html__( 'Set grid background color for menu area', 'succulents' ),
				'parent'      => $menu_area_in_grid_container
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_grid_background_transparency_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Grid Background Transparency', 'succulents' ),
				'description' => esc_html__( 'Set grid background transparency for menu area (0 = fully transparent, 1 = opaque)', 'succulents' ),
				'parent'      => $menu_area_in_grid_container,
				'args'        => array(
					'col_width' => 2
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_menu_area_in_grid_shadow_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Grid Area Shadow', 'succulents' ),
				'description'   => esc_html__( 'Set shadow on grid menu area', 'succulents' ),
				'parent'        => $menu_area_in_grid_container,
				'default_value' => '',
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_menu_area_in_grid_border_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Grid Area Border', 'succulents' ),
				'description'   => esc_html__( 'Set border on grid menu area', 'succulents' ),
				'parent'        => $menu_area_in_grid_container,
				'default_value' => '',
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
		
		$menu_area_in_grid_border_container = succulents_qodef_add_admin_container(
			array(
				'type'            => 'container',
				'name'            => 'menu_area_in_grid_border_container',
				'parent'          => $menu_area_in_grid_container,
				'dependency' => array(
					'show' => array(
						'qodef_menu_area_in_grid_border_meta'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_in_grid_border_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Border Color', 'succulents' ),
				'description' => esc_html__( 'Set border color for grid area', 'succulents' ),
				'parent'      => $menu_area_in_grid_border_container
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_background_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'succulents' ),
				'description' => esc_html__( 'Choose a background color for menu area', 'succulents' ),
				'parent'      => $menu_area_container
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_background_transparency_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Transparency', 'succulents' ),
				'description' => esc_html__( 'Choose a transparency for the menu area background color (0 = fully transparent, 1 = opaque)', 'succulents' ),
				'parent'      => $menu_area_container,
				'args'        => array(
					'col_width' => 2
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_menu_area_shadow_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Menu Area Shadow', 'succulents' ),
				'description'   => esc_html__( 'Set shadow on menu area', 'succulents' ),
				'parent'        => $menu_area_container,
				'default_value' => '',
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_menu_area_border_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Menu Area Border', 'succulents' ),
				'description'   => esc_html__( 'Set border on menu area', 'succulents' ),
				'parent'        => $menu_area_container,
				'default_value' => '',
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
		
		$menu_area_border_bottom_color_container = succulents_qodef_add_admin_container(
			array(
				'type'            => 'container',
				'name'            => 'menu_area_border_bottom_color_container',
				'parent'          => $menu_area_container,
				'dependency' => array(
					'show' => array(
						'qodef_menu_area_border_meta'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_border_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Border Color', 'succulents' ),
				'description' => esc_html__( 'Choose color of header bottom border', 'succulents' ),
				'parent'      => $menu_area_border_bottom_color_container
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'type'        => 'text',
				'name'        => 'qodef_menu_area_side_padding_meta',
				'label'       => esc_html__( 'Menu Area Side Padding', 'succulents' ),
				'description' => esc_html__( 'Enter value in px or percentage to define menu area side padding', 'succulents' ),
				'parent'      => $menu_area_container,
				'args'        => array(
					'col_width' => 3,
					'suffix'    => esc_html__( 'px or %', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'parent'        => $menu_area_container,
				'type'          => 'text',
				'name'          => 'qodef_dropdown_top_position_meta',
				'label'         => esc_html__( 'Dropdown Position', 'succulents' ),
				'description'   => esc_html__( 'Enter value in percentage of entire header height', 'succulents' ),
				'args'          => array(
					'col_width' => 3,
					'suffix'    => '%'
				)
			)
		);
		
		do_action( 'succulents_qodef_header_menu_area_additional_meta_boxes_map', $menu_area_container );
	}
	
	add_action( 'succulents_qodef_header_menu_area_meta_boxes_map', 'succulents_qodef_header_menu_area_meta_options_map', 10, 1 );
}