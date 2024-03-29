<?php

if ( ! function_exists( 'succulents_qodef_error_404_options_map' ) ) {
	function succulents_qodef_error_404_options_map() {
		
		succulents_qodef_add_admin_page(
			array(
				'slug'  => '__404_error_page',
				'title' => esc_html__( '404 Error Page', 'succulents' ),
				'icon'  => 'fa fa-exclamation-triangle'
			)
		);
		
		$panel_404_header = succulents_qodef_add_admin_panel(
			array(
				'page'  => '__404_error_page',
				'name'  => 'panel_404_header',
				'title' => esc_html__( 'Header', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'      => $panel_404_header,
				'type'        => 'color',
				'name'        => '404_logo_area_background_color_header',
				'label'       => esc_html__( 'Background Color', 'succulents' ),
				'description' => esc_html__( 'Choose a background color for header logo area', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $panel_404_header,
				'type'          => 'text',
				'name'          => '404_logo_area_background_transparency_header',
				'default_value' => '',
				'label'         => esc_html__( 'Background Transparency', 'succulents' ),
				'description'   => esc_html__( 'Choose a transparency for the header logo background color (0 = fully transparent, 1 = opaque)', 'succulents' ),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'      => $panel_404_header,
				'type'        => 'color',
				'name'        => '404_menu_area_background_color_header',
				'label'       => esc_html__( 'Background Color', 'succulents' ),
				'description' => esc_html__( 'Choose a background color for header area', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $panel_404_header,
				'type'          => 'text',
				'name'          => '404_menu_area_background_transparency_header',
				'default_value' => '',
				'label'         => esc_html__( 'Background Transparency', 'succulents' ),
				'description'   => esc_html__( 'Choose a transparency for the header background color (0 = fully transparent, 1 = opaque)', 'succulents' ),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'      => $panel_404_header,
				'type'        => 'color',
				'name'        => '404_menu_area_border_color_header',
				'label'       => esc_html__( 'Border Color', 'succulents' ),
				'description' => esc_html__( 'Choose a border bottom color for header area', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $panel_404_header,
				'type'          => 'select',
				'name'          => '404_header_style',
				'default_value' => '',
				'label'         => esc_html__( 'Header Skin', 'succulents' ),
				'description'   => esc_html__( 'Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style', 'succulents' ),
				'options'       => array(
					''             => esc_html__( 'Default', 'succulents' ),
					'light-header' => esc_html__( 'Light', 'succulents' ),
					'dark-header'  => esc_html__( 'Dark', 'succulents' )
				)
			)
		);
		
		$panel_404_options = succulents_qodef_add_admin_panel(
			array(
				'page'  => '__404_error_page',
				'name'  => 'panel_404_options',
				'title' => esc_html__( '404 Page Options', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $panel_404_options,
				'type'   => 'color',
				'name'   => '404_page_background_color',
				'label'  => esc_html__( 'Background Color', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'      => $panel_404_options,
				'type'        => 'image',
				'name'        => '404_page_background_image',
				'label'       => esc_html__( 'Background Image', 'succulents' ),
				'description' => esc_html__( 'Choose a background image for 404 page', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'      => $panel_404_options,
				'type'        => 'image',
				'name'        => '404_page_background_pattern_image',
				'label'       => esc_html__( 'Pattern Background Image', 'succulents' ),
				'description' => esc_html__( 'Choose a pattern image for 404 page', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'      => $panel_404_options,
				'type'        => 'image',
				'name'        => '404_page_title_image',
				'label'       => esc_html__( 'Title Image', 'succulents' ),
				'description' => esc_html__( 'Choose a background image for displaying above 404 page Title', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $panel_404_options,
				'type'          => 'text',
				'name'          => '404_title',
				'default_value' => '',
				'label'         => esc_html__( 'Title', 'succulents' ),
				'description'   => esc_html__( 'Enter title for 404 page. Default label is "404".', 'succulents' )
			)
		);
		
		$first_level_group = succulents_qodef_add_admin_group(
			array(
				'parent'      => $panel_404_options,
				'name'        => 'first_level_group',
				'title'       => esc_html__( 'Title Style', 'succulents' ),
				'description' => esc_html__( 'Define styles for 404 page title', 'succulents' )
			)
		);
		
		$first_level_row1 = succulents_qodef_add_admin_row(
			array(
				'parent' => $first_level_group,
				'name'   => 'first_level_row1'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $first_level_row1,
				'type'   => 'colorsimple',
				'name'   => '404_title_color',
				'label'  => esc_html__( 'Text Color', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_row1,
				'type'          => 'fontsimple',
				'name'          => '404_title_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_row1,
				'type'          => 'textsimple',
				'name'          => '404_title_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_row1,
				'type'          => 'textsimple',
				'name'          => '404_title_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		$first_level_row2 = succulents_qodef_add_admin_row(
			array(
				'parent' => $first_level_group,
				'name'   => 'first_level_row2',
				'next'   => true
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_row2,
				'type'          => 'selectblanksimple',
				'name'          => '404_title_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'succulents' ),
				'options'       => succulents_qodef_get_font_style_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_row2,
				'type'          => 'selectblanksimple',
				'name'          => '404_title_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'succulents' ),
				'options'       => succulents_qodef_get_font_weight_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_row2,
				'type'          => 'textsimple',
				'name'          => '404_title_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_row2,
				'type'          => 'selectblanksimple',
				'name'          => '404_title_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'succulents' ),
				'options'       => succulents_qodef_get_text_transform_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $panel_404_options,
				'type'          => 'text',
				'name'          => '404_subtitle',
				'default_value' => '',
				'label'         => esc_html__( 'Subtitle', 'succulents' ),
				'description'   => esc_html__( 'Enter subtitle for 404 page. Default label is "PAGE NOT FOUND".', 'succulents' )
			)
		);
		
		$second_level_group = succulents_qodef_add_admin_group(
			array(
				'parent'      => $panel_404_options,
				'name'        => 'second_level_group',
				'title'       => esc_html__( 'Subtitle Style', 'succulents' ),
				'description' => esc_html__( 'Define styles for 404 page subtitle', 'succulents' )
			)
		);
		
		$second_level_row1 = succulents_qodef_add_admin_row(
			array(
				'parent' => $second_level_group,
				'name'   => 'second_level_row1'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $second_level_row1,
				'type'   => 'colorsimple',
				'name'   => '404_subtitle_color',
				'label'  => esc_html__( 'Text Color', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_row1,
				'type'          => 'fontsimple',
				'name'          => '404_subtitle_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_row1,
				'type'          => 'textsimple',
				'name'          => '404_subtitle_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_row1,
				'type'          => 'textsimple',
				'name'          => '404_subtitle_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		$second_level_row2 = succulents_qodef_add_admin_row(
			array(
				'parent' => $second_level_group,
				'name'   => 'second_level_row2',
				'next'   => true
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_row2,
				'type'          => 'selectblanksimple',
				'name'          => '404_subtitle_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'succulents' ),
				'options'       => succulents_qodef_get_font_style_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_row2,
				'type'          => 'selectblanksimple',
				'name'          => '404_subtitle_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'succulents' ),
				'options'       => succulents_qodef_get_font_weight_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_row2,
				'type'          => 'textsimple',
				'name'          => '404_subtitle_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_row2,
				'type'          => 'selectblanksimple',
				'name'          => '404_subtitle_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'succulents' ),
				'options'       => succulents_qodef_get_text_transform_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $panel_404_options,
				'type'          => 'text',
				'name'          => '404_text',
				'default_value' => '',
				'label'         => esc_html__( 'Text', 'succulents' ),
				'description'   => esc_html__( 'Enter text for 404 page.', 'succulents' )
			)
		);
		
		$third_level_group = succulents_qodef_add_admin_group(
			array(
				'parent'      => $panel_404_options,
				'name'        => '$third_level_group',
				'title'       => esc_html__( 'Text Style', 'succulents' ),
				'description' => esc_html__( 'Define styles for 404 page text', 'succulents' )
			)
		);
		
		$third_level_row1 = succulents_qodef_add_admin_row(
			array(
				'parent' => $third_level_group,
				'name'   => '$third_level_row1'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $third_level_row1,
				'type'   => 'colorsimple',
				'name'   => '404_text_color',
				'label'  => esc_html__( 'Text Color', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_row1,
				'type'          => 'fontsimple',
				'name'          => '404_text_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_row1,
				'type'          => 'textsimple',
				'name'          => '404_text_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_row1,
				'type'          => 'textsimple',
				'name'          => '404_text_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		$third_level_row2 = succulents_qodef_add_admin_row(
			array(
				'parent' => $third_level_group,
				'name'   => '$third_level_row2',
				'next'   => true
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_row2,
				'type'          => 'selectblanksimple',
				'name'          => '404_text_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'succulents' ),
				'options'       => succulents_qodef_get_font_style_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_row2,
				'type'          => 'selectblanksimple',
				'name'          => '404_text_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'succulents' ),
				'options'       => succulents_qodef_get_font_weight_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_row2,
				'type'          => 'textsimple',
				'name'          => '404_text_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_row2,
				'type'          => 'selectblanksimple',
				'name'          => '404_text_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'succulents' ),
				'options'       => succulents_qodef_get_text_transform_array()
			)
		);

	}
	
	add_action( 'succulents_qodef_options_map', 'succulents_qodef_error_404_options_map', 19 );
}