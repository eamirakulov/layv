<?php

if ( ! function_exists( 'succulents_qodef_sidearea_options_map' ) ) {
	function succulents_qodef_sidearea_options_map() {
		
		succulents_qodef_add_admin_page(
			array(
				'slug'  => '_side_area_page',
				'title' => esc_html__( 'Side Area', 'succulents' ),
				'icon'  => 'fa fa-indent'
			)
		);
		
		$side_area_panel = succulents_qodef_add_admin_panel(
			array(
				'title' => esc_html__( 'Side Area', 'succulents' ),
				'name'  => 'side_area',
				'page'  => '_side_area_page'
			)
		);
		
		$side_area_icon_style_group = succulents_qodef_add_admin_group(
			array(
				'parent'      => $side_area_panel,
				'name'        => 'side_area_icon_style_group',
				'title'       => esc_html__( 'Side Area Icon Style', 'succulents' ),
				'description' => esc_html__( 'Define styles for Side Area icon', 'succulents' )
			)
		);
		
		$side_area_icon_style_row1 = succulents_qodef_add_admin_row(
			array(
				'parent' => $side_area_icon_style_group,
				'name'   => 'side_area_icon_style_row1'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row1,
				'type'   => 'colorsimple',
				'name'   => 'side_area_icon_color',
				'label'  => esc_html__( 'Color', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row1,
				'type'   => 'colorsimple',
				'name'   => 'side_area_icon_hover_color',
				'label'  => esc_html__( 'Hover Color', 'succulents' )
			)
		);
		
		$side_area_icon_style_row2 = succulents_qodef_add_admin_row(
			array(
				'parent' => $side_area_icon_style_group,
				'name'   => 'side_area_icon_style_row2',
				'next'   => true
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row2,
				'type'   => 'colorsimple',
				'name'   => 'side_area_close_icon_color',
				'label'  => esc_html__( 'Close Icon Color', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row2,
				'type'   => 'colorsimple',
				'name'   => 'side_area_close_icon_hover_color',
				'label'  => esc_html__( 'Close Icon Hover Color', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $side_area_panel,
				'type'          => 'text',
				'name'          => 'side_area_width',
				'default_value' => '',
				'label'         => esc_html__( 'Side Area Width', 'succulents' ),
				'description'   => esc_html__( 'Enter a width for Side Area', 'succulents' ),
				'args'          => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'      => $side_area_panel,
				'type'        => 'color',
				'name'        => 'side_area_background_color',
				'label'       => esc_html__( 'Background Color', 'succulents' ),
				'description' => esc_html__( 'Choose a background color for Side Area', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'      => $side_area_panel,
				'type'        => 'text',
				'name'        => 'side_area_padding',
				'label'       => esc_html__( 'Padding', 'succulents' ),
				'description' => esc_html__( 'Define padding for Side Area in format top right bottom left', 'succulents' ),
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $side_area_panel,
				'type'          => 'selectblank',
				'name'          => 'side_area_aligment',
				'default_value' => '',
				'label'         => esc_html__( 'Text Alignment', 'succulents' ),
				'description'   => esc_html__( 'Choose text alignment for side area', 'succulents' ),
				'options'       => array(
					''       => esc_html__( 'Default', 'succulents' ),
					'left'   => esc_html__( 'Left', 'succulents' ),
					'center' => esc_html__( 'Center', 'succulents' ),
					'right'  => esc_html__( 'Right', 'succulents' )
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_options_map', 'succulents_qodef_sidearea_options_map', 15 );
}