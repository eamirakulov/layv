<?php

if ( ! function_exists( 'succulents_qodef_get_hide_dep_for_full_screen_menu_options' ) ) {
	function succulents_qodef_get_hide_dep_for_full_screen_menu_options() {
		$hide_dep_options = apply_filters( 'succulents_qodef_full_screen_menu_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'succulents_qodef_fullscreen_menu_options_map' ) ) {
	function succulents_qodef_fullscreen_menu_options_map() {
		$hide_dep_options = succulents_qodef_get_hide_dep_for_full_screen_menu_options();
		
		$fullscreen_panel = succulents_qodef_add_admin_panel(
			array(
				'title'           => esc_html__( 'Full Screen Menu', 'succulents' ),
				'name'            => 'panel_fullscreen_menu',
				'page'            => '_header_page',
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $fullscreen_panel,
				'type'          => 'select',
				'name'          => 'fullscreen_menu_animation_style',
				'default_value' => 'fade-push-text-right',
				'label'         => esc_html__( 'Full Screen Menu Overlay Animation', 'succulents' ),
				'description'   => esc_html__( 'Choose animation type for full screen menu overlay', 'succulents' ),
				'options'       => array(
					'fade-push-text-right' => esc_html__( 'Fade Push Text Right', 'succulents' ),
					'fade-push-text-top'   => esc_html__( 'Fade Push Text Top', 'succulents' ),
					'fade-text-scaledown'  => esc_html__( 'Fade Text Scaledown', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $fullscreen_panel,
				'type'          => 'yesno',
				'name'          => 'fullscreen_in_grid',
				'default_value' => 'no',
				'label'         => esc_html__( 'Full Screen Menu in Grid', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will put full screen menu content in grid', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $fullscreen_panel,
				'type'          => 'selectblank',
				'name'          => 'fullscreen_alignment',
				'default_value' => '',
				'label'         => esc_html__( 'Full Screen Menu Alignment', 'succulents' ),
				'description'   => esc_html__( 'Choose alignment for full screen menu content', 'succulents' ),
				'options'       => array(
					''       => esc_html__( 'Default', 'succulents' ),
					'left'   => esc_html__( 'Left', 'succulents' ),
					'center' => esc_html__( 'Center', 'succulents' ),
					'right'  => esc_html__( 'Right', 'succulents' )
				)
			)
		);
		
		$background_group = succulents_qodef_add_admin_group(
			array(
				'parent'      => $fullscreen_panel,
				'name'        => 'background_group',
				'title'       => esc_html__( 'Background', 'succulents' ),
				'description' => esc_html__( 'Select a background color and transparency for full screen menu (0 = fully transparent, 1 = opaque)', 'succulents' )
			)
		);
		
		$background_group_row = succulents_qodef_add_admin_row(
			array(
				'parent' => $background_group,
				'name'   => 'background_group_row'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $background_group_row,
				'type'   => 'colorsimple',
				'name'   => 'fullscreen_menu_background_color',
				'label'  => esc_html__( 'Background Color', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $background_group_row,
				'type'   => 'textsimple',
				'name'   => 'fullscreen_menu_background_transparency',
				'label'  => esc_html__( 'Background Transparency', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'      => $fullscreen_panel,
				'type'        => 'image',
				'name'        => 'fullscreen_menu_background_image',
				'label'       => esc_html__( 'Background Image', 'succulents' ),
				'description' => esc_html__( 'Choose a background image for full screen menu background', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'      => $fullscreen_panel,
				'type'        => 'image',
				'name'        => 'fullscreen_menu_pattern_image',
				'label'       => esc_html__( 'Pattern Background Image', 'succulents' ),
				'description' => esc_html__( 'Choose a pattern image for full screen menu background', 'succulents' )
			)
		);
		
		//1st level style group
		$first_level_style_group = succulents_qodef_add_admin_group(
			array(
				'parent'      => $fullscreen_panel,
				'name'        => 'first_level_style_group',
				'title'       => esc_html__( '1st Level Style', 'succulents' ),
				'description' => esc_html__( 'Define styles for 1st level in full screen menu', 'succulents' )
			)
		);
		
		$first_level_style_row1 = succulents_qodef_add_admin_row(
			array(
				'parent' => $first_level_style_group,
				'name'   => 'first_level_style_row1'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_color',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_hover_color',
				'default_value' => '',
				'label'         => esc_html__( 'Hover Text Color', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_active_color',
				'default_value' => '',
				'label'         => esc_html__( 'Active Text Color', 'succulents' ),
			)
		);
		
		$first_level_style_row3 = succulents_qodef_add_admin_row(
			array(
				'parent' => $first_level_style_group,
				'name'   => 'first_level_style_row3'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_style_row3,
				'type'          => 'fontsimple',
				'name'          => 'fullscreen_menu_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_style_row3,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_style_row3,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		$first_level_style_row4 = succulents_qodef_add_admin_row(
			array(
				'parent' => $first_level_style_group,
				'name'   => 'first_level_style_row4'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_style_row4,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'succulents' ),
				'options'       => succulents_qodef_get_font_style_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_style_row4,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'succulents' ),
				'options'       => succulents_qodef_get_font_weight_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_style_row4,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Lettert Spacing', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $first_level_style_row4,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'succulents' ),
				'options'       => succulents_qodef_get_text_transform_array()
			)
		);
		
		//2nd level style group
		$second_level_style_group = succulents_qodef_add_admin_group(
			array(
				'parent'      => $fullscreen_panel,
				'name'        => 'second_level_style_group',
				'title'       => esc_html__( '2nd Level Style', 'succulents' ),
				'description' => esc_html__( 'Define styles for 2nd level in full screen menu', 'succulents' )
			)
		);
		
		$second_level_style_row1 = succulents_qodef_add_admin_row(
			array(
				'parent' => $second_level_style_group,
				'name'   => 'second_level_style_row1'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_color_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_hover_color_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Hover/Active Text Color', 'succulents' ),
			)
		);
		
		$second_level_style_row2 = succulents_qodef_add_admin_row(
			array(
				'parent' => $second_level_style_group,
				'name'   => 'second_level_style_row2'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_style_row2,
				'type'          => 'fontsimple',
				'name'          => 'fullscreen_menu_google_fonts_2nd',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_style_row2,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_font_size_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_style_row2,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_line_height_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		$second_level_style_row3 = succulents_qodef_add_admin_row(
			array(
				'parent' => $second_level_style_group,
				'name'   => 'second_level_style_row3'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_style_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'succulents' ),
				'options'       => succulents_qodef_get_font_style_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_weight_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'succulents' ),
				'options'       => succulents_qodef_get_font_weight_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_style_row3,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_letter_spacing_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Lettert Spacing', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $second_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_text_transform_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'succulents' ),
				'options'       => succulents_qodef_get_text_transform_array()
			)
		);
		
		$third_level_style_group = succulents_qodef_add_admin_group(
			array(
				'parent'      => $fullscreen_panel,
				'name'        => 'third_level_style_group',
				'title'       => esc_html__( '3rd Level Style', 'succulents' ),
				'description' => esc_html__( 'Define styles for 3rd level in full screen menu', 'succulents' )
			)
		);
		
		$third_level_style_row1 = succulents_qodef_add_admin_row(
			array(
				'parent' => $third_level_style_group,
				'name'   => 'third_level_style_row1'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_color_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_hover_color_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Hover/Active Text Color', 'succulents' ),
			)
		);
		
		$third_level_style_row2 = succulents_qodef_add_admin_row(
			array(
				'parent' => $third_level_style_group,
				'name'   => 'second_level_style_row2'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_style_row2,
				'type'          => 'fontsimple',
				'name'          => 'fullscreen_menu_google_fonts_3rd',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_style_row2,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_font_size_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_style_row2,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_line_height_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		$third_level_style_row3 = succulents_qodef_add_admin_row(
			array(
				'parent' => $third_level_style_group,
				'name'   => 'second_level_style_row3'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_style_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'succulents' ),
				'options'       => succulents_qodef_get_font_style_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_weight_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'succulents' ),
				'options'       => succulents_qodef_get_font_weight_array()
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_style_row3,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_letter_spacing_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Lettert Spacing', 'succulents' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $third_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_text_transform_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'succulents' ),
				'options'       => succulents_qodef_get_text_transform_array()
			)
		);
		
		$icon_colors_group = succulents_qodef_add_admin_group(
			array(
				'parent'      => $fullscreen_panel,
				'name'        => 'fullscreen_menu_icon_colors_group',
				'title'       => esc_html__( 'Full Screen Menu Icon Style', 'succulents' ),
				'description' => esc_html__( 'Define styles for full screen menu icon', 'succulents' )
			)
		);
		
		$icon_colors_row1 = succulents_qodef_add_admin_row(
			array(
				'parent' => $icon_colors_group,
				'name'   => 'icon_colors_row1'
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $icon_colors_row1,
				'type'   => 'colorsimple',
				'name'   => 'fullscreen_menu_icon_color',
				'label'  => esc_html__( 'Color', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $icon_colors_row1,
				'type'   => 'colorsimple',
				'name'   => 'fullscreen_menu_icon_hover_color',
				'label'  => esc_html__( 'Hover Color', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $icon_colors_row1,
				'type'   => 'colorsimple',
				'name'   => 'fullscreen_menu_icon_mobile_color',
				'label'  => esc_html__( 'Mobile Color', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent' => $icon_colors_row1,
				'type'   => 'colorsimple',
				'name'   => 'fullscreen_menu_icon_mobile_hover_color',
				'label'  => esc_html__( 'Mobile Hover Color', 'succulents' ),
			)
		);
	}
	
	add_action( 'succulents_qodef_additional_header_menu_area_options_map', 'succulents_qodef_fullscreen_menu_options_map' );
}