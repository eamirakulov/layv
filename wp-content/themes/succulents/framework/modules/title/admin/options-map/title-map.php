<?php

if ( ! function_exists( 'succulents_qodef_get_title_types_options' ) ) {
	function succulents_qodef_get_title_types_options() {
		$title_type_options = apply_filters( 'succulents_qodef_title_type_global_option', $title_type_options = array() );
		
		return $title_type_options;
	}
}

if ( ! function_exists( 'succulents_qodef_get_title_type_default_options' ) ) {
	function succulents_qodef_get_title_type_default_options() {
		$title_type_option = apply_filters( 'succulents_qodef_default_title_type_global_option', $title_type_option = '' );
		
		return $title_type_option;
	}
}

foreach ( glob( QODE_FRAMEWORK_MODULES_ROOT_DIR . '/title/types/*/admin/options-map/*.php' ) as $options_load ) {
	include_once $options_load;
}

if ( ! function_exists('succulents_qodef_title_options_map') ) {
	function succulents_qodef_title_options_map() {
		$title_type_options        = succulents_qodef_get_title_types_options();
		$title_type_default_option = succulents_qodef_get_title_type_default_options();

		succulents_qodef_add_admin_page(
			array(
				'slug' => '_title_page',
				'title' => esc_html__('Title', 'succulents'),
				'icon' => 'fa fa-list-alt'
			)
		);

		$panel_title = succulents_qodef_add_admin_panel(
			array(
				'page' => '_title_page',
				'name' => 'panel_title',
				'title' => esc_html__('Title Settings', 'succulents')
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'show_title_area',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Title Area', 'succulents' ),
				'description'   => esc_html__( 'This option will enable/disable Title Area', 'succulents' ),
				'parent'        => $panel_title
			)
		);
		
			$show_title_area_container = succulents_qodef_add_admin_container(
				array(
					'parent'          => $panel_title,
					'name'            => 'show_title_area_container',
					'dependency' => array(
						'show' => array(
							'show_title_area' => 'yes'
						)
					)
				)
			);
		
				succulents_qodef_add_admin_field(
					array(
						'name'          => 'title_area_type',
						'type'          => 'select',
						'default_value' => $title_type_default_option,
						'label'         => esc_html__( 'Title Area Type', 'succulents' ),
						'description'   => esc_html__( 'Choose title type', 'succulents' ),
						'parent'        => $show_title_area_container,
						'options'       => $title_type_options
					)
				);
		
					succulents_qodef_add_admin_field(
						array(
							'name'          => 'title_area_in_grid',
							'type'          => 'yesno',
							'default_value' => 'yes',
							'label'         => esc_html__( 'Title Area In Grid', 'succulents' ),
							'description'   => esc_html__( 'Set title area content to be in grid', 'succulents' ),
							'parent'        => $show_title_area_container
						)
					);
		
					succulents_qodef_add_admin_field(
						array(
							'name'        => 'title_area_height',
							'type'        => 'text',
							'label'       => esc_html__( 'Height', 'succulents' ),
							'description' => esc_html__( 'Set a height for Title Area', 'succulents' ),
							'parent'      => $show_title_area_container,
							'args'        => array(
								'col_width' => 2,
								'suffix'    => 'px'
							)
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'name'        => 'title_area_background_color',
							'type'        => 'color',
							'label'       => esc_html__( 'Background Color', 'succulents' ),
							'description' => esc_html__( 'Choose a background color for Title Area', 'succulents' ),
							'parent'      => $show_title_area_container
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'name'        => 'title_area_background_image',
							'type'        => 'image',
							'label'       => esc_html__( 'Background Image', 'succulents' ),
							'description' => esc_html__( 'Choose an Image for Title Area', 'succulents' ),
							'parent'      => $show_title_area_container
						)
					);
		
					succulents_qodef_add_admin_field(
						array(
							'name'          => 'title_area_background_image_behavior',
							'type'          => 'select',
							'default_value' => '',
							'label'         => esc_html__( 'Background Image Behavior', 'succulents' ),
							'description'   => esc_html__( 'Choose title area background image behavior', 'succulents' ),
							'parent'        => $show_title_area_container,
							'options'       => array(
								''                  => esc_html__( 'Default', 'succulents' ),
								'responsive'        => esc_html__( 'Enable Responsive Image', 'succulents' ),
								'parallax'          => esc_html__( 'Enable Parallax Image', 'succulents' ),
								'parallax-zoom-out' => esc_html__( 'Enable Parallax With Zoom Out Image', 'succulents' )
							)
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'name'          => 'title_area_vertical_alignment',
							'type'          => 'select',
							'default_value' => 'header-bottom',
							'label'         => esc_html__( 'Vertical Alignment', 'succulents' ),
							'description'   => esc_html__( 'Specify title vertical alignment', 'succulents' ),
							'parent'        => $show_title_area_container,
							'options'       => array(
								'header-bottom' => esc_html__( 'From Bottom of Header', 'succulents' ),
								'window-top'    => esc_html__( 'From Window Top', 'succulents' )
							)
						)
					);
		
		/***************** Additional Title Area Layout - start *****************/
		
		do_action( 'succulents_qodef_additional_title_area_options_map', $show_title_area_container );
		
		/***************** Additional Title Area Layout - end *****************/
		
		
		$panel_typography = succulents_qodef_add_admin_panel(
			array(
				'page'  => '_title_page',
				'name'  => 'panel_title_typography',
				'title' => esc_html__( 'Typography', 'succulents' )
			)
		);
		
			succulents_qodef_add_admin_section_title(
				array(
					'name'   => 'type_section_title',
					'title'  => esc_html__( 'Title', 'succulents' ),
					'parent' => $panel_typography
				)
			);
		
			$group_page_title_styles = succulents_qodef_add_admin_group(
				array(
					'name'        => 'group_page_title_styles',
					'title'       => esc_html__( 'Title', 'succulents' ),
					'description' => esc_html__( 'Define styles for page title', 'succulents' ),
					'parent'      => $panel_typography
				)
			);
		
				$row_page_title_styles_1 = succulents_qodef_add_admin_row(
					array(
						'name'   => 'row_page_title_styles_1',
						'parent' => $group_page_title_styles
					)
				);
		
					succulents_qodef_add_admin_field(
						array(
							'name'          => 'title_area_title_tag',
							'type'          => 'selectsimple',
							'default_value' => 'h2',
							'label'         => esc_html__( 'Title Tag', 'succulents' ),
							'options'       => succulents_qodef_get_title_tag(),
							'parent'        => $row_page_title_styles_1
						)
					);
		
				$row_page_title_styles_2 = succulents_qodef_add_admin_row(
					array(
						'name'   => 'row_page_title_styles_2',
						'parent' => $group_page_title_styles
					)
				);
		
					succulents_qodef_add_admin_field(
						array(
							'type'   => 'colorsimple',
							'name'   => 'page_title_color',
							'label'  => esc_html__( 'Text Color', 'succulents' ),
							'parent' => $row_page_title_styles_2
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'textsimple',
							'name'          => 'page_title_font_size',
							'default_value' => '',
							'label'         => esc_html__( 'Font Size', 'succulents' ),
							'parent'        => $row_page_title_styles_2,
							'args'          => array(
								'suffix' => 'px'
							)
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'textsimple',
							'name'          => 'page_title_line_height',
							'default_value' => '',
							'label'         => esc_html__( 'Line Height', 'succulents' ),
							'parent'        => $row_page_title_styles_2,
							'args'          => array(
								'suffix' => 'px'
							)
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'selectblanksimple',
							'name'          => 'page_title_text_transform',
							'default_value' => '',
							'label'         => esc_html__( 'Text Transform', 'succulents' ),
							'options'       => succulents_qodef_get_text_transform_array(),
							'parent'        => $row_page_title_styles_2
						)
					);
		
				$row_page_title_styles_3 = succulents_qodef_add_admin_row(
					array(
						'name'   => 'row_page_title_styles_3',
						'parent' => $group_page_title_styles,
						'next'   => true
					)
				);
		
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'fontsimple',
							'name'          => 'page_title_google_fonts',
							'default_value' => '-1',
							'label'         => esc_html__( 'Font Family', 'succulents' ),
							'parent'        => $row_page_title_styles_3
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'selectblanksimple',
							'name'          => 'page_title_font_style',
							'default_value' => '',
							'label'         => esc_html__( 'Font Style', 'succulents' ),
							'options'       => succulents_qodef_get_font_style_array(),
							'parent'        => $row_page_title_styles_3
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'selectblanksimple',
							'name'          => 'page_title_font_weight',
							'default_value' => '',
							'label'         => esc_html__( 'Font Weight', 'succulents' ),
							'options'       => succulents_qodef_get_font_weight_array(),
							'parent'        => $row_page_title_styles_3
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'textsimple',
							'name'          => 'page_title_letter_spacing',
							'default_value' => '',
							'label'         => esc_html__( 'Letter Spacing', 'succulents' ),
							'parent'        => $row_page_title_styles_3,
							'args'          => array(
								'suffix' => 'px'
							)
						)
					);
		
			succulents_qodef_add_admin_section_title(
				array(
					'name'   => 'type_section_subtitle',
					'title'  => esc_html__( 'Subtitle', 'succulents' ),
					'parent' => $panel_typography
				)
			);
		
			$group_page_subtitle_styles = succulents_qodef_add_admin_group(
				array(
					'name'        => 'group_page_subtitle_styles',
					'title'       => esc_html__( 'Subtitle', 'succulents' ),
					'description' => esc_html__( 'Define styles for page subtitle', 'succulents' ),
					'parent'      => $panel_typography
				)
			);
		
				$row_page_subtitle_styles_1 = succulents_qodef_add_admin_row(
					array(
						'name'   => 'row_page_subtitle_styles_1',
						'parent' => $group_page_subtitle_styles
					)
				);
				
					succulents_qodef_add_admin_field(
						array(
							'name' => 'title_area_subtitle_tag',
							'type' => 'selectsimple',
							'default_value' => 'h6',
							'label' => esc_html__('Subtitle Tag', 'succulents'),
							'options' => succulents_qodef_get_title_tag(),
							'parent' => $row_page_subtitle_styles_1
						)
					);
		
				$row_page_subtitle_styles_2 = succulents_qodef_add_admin_row(
					array(
						'name'   => 'row_page_subtitle_styles_2',
						'parent' => $group_page_subtitle_styles
					)
				);
		
					succulents_qodef_add_admin_field(
						array(
							'type'   => 'colorsimple',
							'name'   => 'page_subtitle_color',
							'label'  => esc_html__( 'Text Color', 'succulents' ),
							'parent' => $row_page_subtitle_styles_2
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'textsimple',
							'name'          => 'page_subtitle_font_size',
							'default_value' => '',
							'label'         => esc_html__( 'Font Size', 'succulents' ),
							'parent'        => $row_page_subtitle_styles_2,
							'args'          => array(
								'suffix' => 'px'
							)
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'textsimple',
							'name'          => 'page_subtitle_line_height',
							'default_value' => '',
							'label'         => esc_html__( 'Line Height', 'succulents' ),
							'parent'        => $row_page_subtitle_styles_2,
							'args'          => array(
								'suffix' => 'px'
							)
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'selectblanksimple',
							'name'          => 'page_subtitle_text_transform',
							'default_value' => '',
							'label'         => esc_html__( 'Text Transform', 'succulents' ),
							'options'       => succulents_qodef_get_text_transform_array(),
							'parent'        => $row_page_subtitle_styles_2
						)
					);
		
				$row_page_subtitle_styles_3 = succulents_qodef_add_admin_row(
					array(
						'name'   => 'row_page_subtitle_styles_3',
						'parent' => $group_page_subtitle_styles,
						'next'   => true
					)
				);
		
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'fontsimple',
							'name'          => 'page_subtitle_google_fonts',
							'default_value' => '-1',
							'label'         => esc_html__( 'Font Family', 'succulents' ),
							'parent'        => $row_page_subtitle_styles_3
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'selectblanksimple',
							'name'          => 'page_subtitle_font_style',
							'default_value' => '',
							'label'         => esc_html__( 'Font Style', 'succulents' ),
							'options'       => succulents_qodef_get_font_style_array(),
							'parent'        => $row_page_subtitle_styles_3
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'selectblanksimple',
							'name'          => 'page_subtitle_font_weight',
							'default_value' => '',
							'label'         => esc_html__( 'Font Weight', 'succulents' ),
							'options'       => succulents_qodef_get_font_weight_array(),
							'parent'        => $row_page_subtitle_styles_3
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'textsimple',
							'name'          => 'page_subtitle_letter_spacing',
							'default_value' => '',
							'label'         => esc_html__( 'Letter Spacing', 'succulents' ),
							'args'          => array(
								'suffix' => 'px'
							),
							'parent'        => $row_page_subtitle_styles_3
						)
					);
		
		/***************** Additional Title Typography Layout - start *****************/
		
		do_action( 'succulents_qodef_additional_title_typography_options_map', $panel_typography );
		
		/***************** Additional Title Typography Layout - end *****************/
    }

	add_action( 'succulents_qodef_options_map', 'succulents_qodef_title_options_map', 6);
}