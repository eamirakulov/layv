<?php

if ( ! function_exists( 'succulents_qodef_general_options_map' ) ) {
	/**
	 * General options page
	 */
	function succulents_qodef_general_options_map() {
		
		succulents_qodef_add_admin_page(
			array(
				'slug'  => '',
				'title' => esc_html__( 'General', 'succulents' ),
				'icon'  => 'fa fa-institution'
			)
		);
		
		$panel_design_style = succulents_qodef_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_design_style',
				'title' => esc_html__( 'Design Style', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'google_fonts',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Google Font Family', 'succulents' ),
				'description'   => esc_html__( 'Choose a default Google font for your site', 'succulents' ),
				'parent'        => $panel_design_style
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_fonts',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Additional Google Fonts', 'succulents' ),
				'parent'        => $panel_design_style
			)
		);
		
		$additional_google_fonts_container = succulents_qodef_add_admin_container(
			array(
				'parent'          => $panel_design_style,
				'name'            => 'additional_google_fonts_container',
				'dependency' => array(
					'show' => array(
						'additional_google_fonts'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_font1',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'succulents' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_font2',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'succulents' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_font3',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'succulents' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_font4',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'succulents' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_font5',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'succulents' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'succulents' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'google_font_weight',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Style & Weight', 'succulents' ),
				'description'   => esc_html__( 'Choose a default Google font weights for your site. Impact on page load time', 'succulents' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'100'  => esc_html__( '100 Thin', 'succulents' ),
					'100i' => esc_html__( '100 Thin Italic', 'succulents' ),
					'200'  => esc_html__( '200 Extra-Light', 'succulents' ),
					'200i' => esc_html__( '200 Extra-Light Italic', 'succulents' ),
					'300'  => esc_html__( '300 Light', 'succulents' ),
					'300i' => esc_html__( '300 Light Italic', 'succulents' ),
					'400'  => esc_html__( '400 Regular', 'succulents' ),
					'400i' => esc_html__( '400 Regular Italic', 'succulents' ),
					'500'  => esc_html__( '500 Medium', 'succulents' ),
					'500i' => esc_html__( '500 Medium Italic', 'succulents' ),
					'600'  => esc_html__( '600 Semi-Bold', 'succulents' ),
					'600i' => esc_html__( '600 Semi-Bold Italic', 'succulents' ),
					'700'  => esc_html__( '700 Bold', 'succulents' ),
					'700i' => esc_html__( '700 Bold Italic', 'succulents' ),
					'800'  => esc_html__( '800 Extra-Bold', 'succulents' ),
					'800i' => esc_html__( '800 Extra-Bold Italic', 'succulents' ),
					'900'  => esc_html__( '900 Ultra-Bold', 'succulents' ),
					'900i' => esc_html__( '900 Ultra-Bold Italic', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'google_font_subset',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Subset', 'succulents' ),
				'description'   => esc_html__( 'Choose a default Google font subsets for your site', 'succulents' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'latin'        => esc_html__( 'Latin', 'succulents' ),
					'latin-ext'    => esc_html__( 'Latin Extended', 'succulents' ),
					'cyrillic'     => esc_html__( 'Cyrillic', 'succulents' ),
					'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'succulents' ),
					'greek'        => esc_html__( 'Greek', 'succulents' ),
					'greek-ext'    => esc_html__( 'Greek Extended', 'succulents' ),
					'vietnamese'   => esc_html__( 'Vietnamese', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'        => 'first_color',
				'type'        => 'color',
				'label'       => esc_html__( 'First Main Color', 'succulents' ),
				'description' => esc_html__( 'Choose the most dominant theme color. Default color is #00bbb3', 'succulents' ),
				'parent'      => $panel_design_style
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'        => 'page_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Page Background Color', 'succulents' ),
				'description' => esc_html__( 'Choose the background color for page content. Default color is #ffffff', 'succulents' ),
				'parent'      => $panel_design_style
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'        => 'selection_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Text Selection Color', 'succulents' ),
				'description' => esc_html__( 'Choose the color users see when selecting text', 'succulents' ),
				'parent'      => $panel_design_style
			)
		);
		
		/***************** Passepartout Layout - begin **********************/
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'boxed',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Boxed Layout', 'succulents' ),
				'parent'        => $panel_design_style
			)
		);
		
			$boxed_container = succulents_qodef_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'boxed_container',
					'dependency' => array(
						'show' => array(
							'boxed'  => 'yes'
						)
					)
				)
			);
		
				succulents_qodef_add_admin_field(
					array(
						'name'        => 'page_background_color_in_box',
						'type'        => 'color',
						'label'       => esc_html__( 'Page Background Color', 'succulents' ),
						'description' => esc_html__( 'Choose the page background color outside box', 'succulents' ),
						'parent'      => $boxed_container
					)
				);
				
				succulents_qodef_add_admin_field(
					array(
						'name'        => 'boxed_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'succulents' ),
						'description' => esc_html__( 'Choose an image to be displayed in background', 'succulents' ),
						'parent'      => $boxed_container
					)
				);
				
				succulents_qodef_add_admin_field(
					array(
						'name'        => 'boxed_pattern_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Pattern', 'succulents' ),
						'description' => esc_html__( 'Choose an image to be used as background pattern', 'succulents' ),
						'parent'      => $boxed_container
					)
				);
				
				succulents_qodef_add_admin_field(
					array(
						'name'          => 'boxed_background_image_attachment',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Attachment', 'succulents' ),
						'description'   => esc_html__( 'Choose background image attachment', 'succulents' ),
						'parent'        => $boxed_container,
						'options'       => array(
							''       => esc_html__( 'Default', 'succulents' ),
							'fixed'  => esc_html__( 'Fixed', 'succulents' ),
							'scroll' => esc_html__( 'Scroll', 'succulents' )
						)
					)
				);
		
		/***************** Boxed Layout - end **********************/
		
		/***************** Passepartout Layout - begin **********************/
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'paspartu',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Passepartout', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will display passepartout around site content', 'succulents' ),
				'parent'        => $panel_design_style
			)
		);
		
			$paspartu_container = succulents_qodef_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'paspartu_container',
					'dependency' => array(
						'show' => array(
							'paspartu'  => 'yes'
						)
					)
				)
			);
		
				succulents_qodef_add_admin_field(
					array(
						'name'        => 'paspartu_color',
						'type'        => 'color',
						'label'       => esc_html__( 'Passepartout Color', 'succulents' ),
						'description' => esc_html__( 'Choose passepartout color, default value is #ffffff', 'succulents' ),
						'parent'      => $paspartu_container
					)
				);
				
				succulents_qodef_add_admin_field(
					array(
						'name'        => 'paspartu_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Passepartout Size', 'succulents' ),
						'description' => esc_html__( 'Enter size amount for passepartout', 'succulents' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
		
				succulents_qodef_add_admin_field(
					array(
						'name'        => 'paspartu_responsive_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Responsive Passepartout Size', 'succulents' ),
						'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (tablets and mobiles view)', 'succulents' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
				
				succulents_qodef_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'disable_top_paspartu',
						'label'         => esc_html__( 'Disable Top Passepartout', 'succulents' )
					)
				);
		
		/***************** Passepartout Layout - end **********************/
		
		/***************** Content Layout - begin **********************/
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'initial_content_width',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Initial Width of Content', 'succulents' ),
				'description'   => esc_html__( 'Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid")', 'succulents' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'qodef-grid-1100' => esc_html__( '1100px - default', 'succulents' ),
					'qodef-grid-1300' => esc_html__( '1300px', 'succulents' ),
					'qodef-grid-1200' => esc_html__( '1200px', 'succulents' ),
					'qodef-grid-1000' => esc_html__( '1000px', 'succulents' ),
					'qodef-grid-800'  => esc_html__( '800px', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'preload_pattern_image',
				'type'          => 'image',
				'label'         => esc_html__( 'Preload Pattern Image', 'succulents' ),
				'description'   => esc_html__( 'Choose preload pattern image to be displayed until images are loaded', 'succulents' ),
				'parent'        => $panel_design_style
			)
		);
		
		/***************** Content Layout - end **********************/
		
		$panel_settings = succulents_qodef_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_settings',
				'title' => esc_html__( 'Settings', 'succulents' )
			)
		);
		
		/***************** Smooth Scroll Layout - begin **********************/
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'page_smooth_scroll',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Scroll', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)', 'succulents' ),
				'parent'        => $panel_settings
			)
		);
		
		/***************** Smooth Scroll Layout - end **********************/
		
		/***************** Smooth Page Transitions Layout - begin **********************/
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'smooth_page_transitions',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Page Transitions', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth transition between pages when clicking on links', 'succulents' ),
				'parent'        => $panel_settings
			)
		);
		
			$page_transitions_container = succulents_qodef_add_admin_container(
				array(
					'parent'          => $panel_settings,
					'name'            => 'page_transitions_container',
					'dependency' => array(
						'show' => array(
							'smooth_page_transitions'  => 'yes'
						)
					)
				)
			);
		
				succulents_qodef_add_admin_field(
					array(
						'name'          => 'page_transition_preloader',
						'type'          => 'yesno',
						'default_value' => 'no',
						'label'         => esc_html__( 'Enable Preloading Animation', 'succulents' ),
						'description'   => esc_html__( 'Enabling this option will display an animated preloader while the page content is loading', 'succulents' ),
						'parent'        => $page_transitions_container
					)
				);
				
				$page_transition_preloader_container = succulents_qodef_add_admin_container(
					array(
						'parent'          => $page_transitions_container,
						'name'            => 'page_transition_preloader_container',
						'dependency' => array(
							'show' => array(
								'page_transition_preloader'  => 'yes'
							)
						)
					)
				);
		
		
					succulents_qodef_add_admin_field(
						array(
							'name'   => 'smooth_pt_bgnd_color',
							'type'   => 'color',
							'label'  => esc_html__( 'Page Loader Background Color', 'succulents' ),
							'parent' => $page_transition_preloader_container
						)
					);
					
					$group_pt_spinner_animation = succulents_qodef_add_admin_group(
						array(
							'name'        => 'group_pt_spinner_animation',
							'title'       => esc_html__( 'Loader Style', 'succulents' ),
							'description' => esc_html__( 'Define styles for loader spinner animation', 'succulents' ),
							'parent'      => $page_transition_preloader_container
						)
					);
					
					$row_pt_spinner_animation = succulents_qodef_add_admin_row(
						array(
							'name'   => 'row_pt_spinner_animation',
							'parent' => $group_pt_spinner_animation
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'type'          => 'selectsimple',
							'name'          => 'smooth_pt_spinner_type',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Type', 'succulents' ),
							'parent'        => $row_pt_spinner_animation,
							'options'       => array(
								'succulents_loader'		=> esc_html__( 'Succulents Loader', 'succulents' ),
								'rotate_circles'        => esc_html__( 'Rotate Circles', 'succulents' ),
								'pulse'                 => esc_html__( 'Pulse', 'succulents' ),
								'double_pulse'          => esc_html__( 'Double Pulse', 'succulents' ),
								'cube'                  => esc_html__( 'Cube', 'succulents' ),
								'rotating_cubes'        => esc_html__( 'Rotating Cubes', 'succulents' ),
								'stripes'               => esc_html__( 'Stripes', 'succulents' ),
								'wave'                  => esc_html__( 'Wave', 'succulents' ),
								'two_rotating_circles'  => esc_html__( '2 Rotating Circles', 'succulents' ),
								'five_rotating_circles' => esc_html__( '5 Rotating Circles', 'succulents' ),
								'atom'                  => esc_html__( 'Atom', 'succulents' ),
								'clock'                 => esc_html__( 'Clock', 'succulents' ),
								'mitosis'               => esc_html__( 'Mitosis', 'succulents' ),
								'lines'                 => esc_html__( 'Lines', 'succulents' ),
								'fussion'               => esc_html__( 'Fussion', 'succulents' ),
								'wave_circles'          => esc_html__( 'Wave Circles', 'succulents' ),
								'pulse_circles'         => esc_html__( 'Pulse Circles', 'succulents' )
							)
						)
					);

					succulents_qodef_add_admin_field(
						array(
							'type'          => 'colorsimple',
							'name'          => 'qodef_smooth_pt_spinner_color',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Color', 'succulents' ),
							'parent'        => $row_pt_spinner_animation
						)
					);
					
					succulents_qodef_add_admin_field(
						array(
							'name'          => 'page_transition_fadeout',
							'type'          => 'yesno',
							'default_value' => 'no',
							'label'         => esc_html__( 'Enable Fade Out Animation', 'succulents' ),
							'description'   => esc_html__( 'Enabling this option will turn on fade out animation when leaving page', 'succulents' ),
							'parent'        => $page_transitions_container
						)
					);
		
		/***************** Smooth Page Transitions Layout - end **********************/
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'show_back_button',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show "Back To Top Button"', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will display a Back to Top button on every page', 'succulents' ),
				'parent'        => $panel_settings
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'responsiveness',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Responsiveness', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will make all pages responsive', 'succulents' ),
				'parent'        => $panel_settings
			)
		);
		
		$panel_custom_code = succulents_qodef_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_custom_code',
				'title' => esc_html__( 'Custom Code', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'        => 'custom_js',
				'type'        => 'textarea',
				'label'       => esc_html__( 'Custom JS', 'succulents' ),
				'description' => esc_html__( 'Enter your custom Javascript here', 'succulents' ),
				'parent'      => $panel_custom_code
			)
		);
		
		$panel_google_api = succulents_qodef_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_google_api',
				'title' => esc_html__( 'Google API', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'        => 'google_maps_api_key',
				'type'        => 'text',
				'label'       => esc_html__( 'Google Maps Api Key', 'succulents' ),
				'description' => esc_html__( 'Insert your Google Maps API key here. For instructions on how to create a Google Maps API key, please refer to our to our documentation.', 'succulents' ),
				'parent'      => $panel_google_api
			)
		);
	}
	
	add_action( 'succulents_qodef_options_map', 'succulents_qodef_general_options_map', 1 );
}

if ( ! function_exists( 'succulents_qodef_page_general_style' ) ) {
	/**
	 * Function that prints page general inline styles
	 */
	function succulents_qodef_page_general_style( $style ) {
		$current_style = '';
		$page_id       = succulents_qodef_get_page_id();
		$class_prefix  = succulents_qodef_get_unique_page_class( $page_id );
		
		$boxed_background_style = array();
		
		$boxed_page_background_color = succulents_qodef_get_meta_field_intersect( 'page_background_color_in_box', $page_id );
		if ( ! empty( $boxed_page_background_color ) ) {
			$boxed_background_style['background-color'] = $boxed_page_background_color;
		}
		
		$boxed_page_background_image = succulents_qodef_get_meta_field_intersect( 'boxed_background_image', $page_id );
		if ( ! empty( $boxed_page_background_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_image ) . ')';
			$boxed_background_style['background-position'] = 'center 0px';
			$boxed_background_style['background-repeat']   = 'no-repeat';
		}
		
		$boxed_page_background_pattern_image = succulents_qodef_get_meta_field_intersect( 'boxed_pattern_background_image', $page_id );
		if ( ! empty( $boxed_page_background_pattern_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_pattern_image ) . ')';
			$boxed_background_style['background-position'] = '0px 0px';
			$boxed_background_style['background-repeat']   = 'repeat';
		}
		
		$boxed_page_background_attachment = succulents_qodef_get_meta_field_intersect( 'boxed_background_image_attachment', $page_id );
		if ( ! empty( $boxed_page_background_attachment ) ) {
			$boxed_background_style['background-attachment'] = $boxed_page_background_attachment;
		}
		
		$boxed_background_selector = $class_prefix . '.qodef-boxed .qodef-wrapper';
		
		if ( ! empty( $boxed_background_style ) ) {
			$current_style .= succulents_qodef_dynamic_css( $boxed_background_selector, $boxed_background_style );
		}
		
		$paspartu_style     = array();
		$paspartu_res_style = array();
		$paspartu_res_start = '@media only screen and (max-width: 1024px) {';
		$paspartu_res_end   = '}';
		
		$paspartu_color = succulents_qodef_get_meta_field_intersect( 'paspartu_color', $page_id );
		if ( ! empty( $paspartu_color ) ) {
			$paspartu_style['background-color'] = $paspartu_color;
		}
		
		$paspartu_width = succulents_qodef_get_meta_field_intersect( 'paspartu_width', $page_id );
		if ( $paspartu_width !== '' ) {
			if ( succulents_qodef_string_ends_with( $paspartu_width, '%' ) || succulents_qodef_string_ends_with( $paspartu_width, 'px' ) ) {
				$paspartu_style['padding'] = $paspartu_width;
			} else {
				$paspartu_style['padding'] = $paspartu_width . 'px';
			}
		}
		
		$paspartu_selector = $class_prefix . '.qodef-paspartu-enabled .qodef-wrapper';
		
		if ( ! empty( $paspartu_style ) ) {
			$current_style .= succulents_qodef_dynamic_css( $paspartu_selector, $paspartu_style );
		}
		
		$paspartu_responsive_width = succulents_qodef_get_meta_field_intersect( 'paspartu_responsive_width', $page_id );
		if ( $paspartu_responsive_width !== '' ) {
			if ( succulents_qodef_string_ends_with( $paspartu_responsive_width, '%' ) || succulents_qodef_string_ends_with( $paspartu_responsive_width, 'px' ) ) {
				$paspartu_res_style['padding'] = $paspartu_responsive_width;
			} else {
				$paspartu_res_style['padding'] = $paspartu_responsive_width . 'px';
			}
		}
		
		if ( ! empty( $paspartu_res_style ) ) {
			$current_style .= $paspartu_res_start . succulents_qodef_dynamic_css( $paspartu_selector, $paspartu_res_style ) . $paspartu_res_end;
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'succulents_qodef_add_page_custom_style', 'succulents_qodef_page_general_style' );
}