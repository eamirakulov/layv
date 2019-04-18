<?php

if ( ! function_exists( 'succulents_qodef_map_general_meta' ) ) {
	function succulents_qodef_map_general_meta() {
		
		$general_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'succulents_qodef_set_scope_for_meta_boxes', array( 'page', 'post' ), 'general_meta' ),
				'title' => esc_html__( 'General', 'succulents' ),
				'name'  => 'general_meta'
			)
		);
		
		/***************** Slider Layout - begin **********************/
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_page_slider_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Slider Shortcode', 'succulents' ),
				'description' => esc_html__( 'Paste your slider shortcode here', 'succulents' ),
				'parent'      => $general_meta_box
			)
		);
		
		/***************** Slider Layout - begin **********************/
		
		/***************** Content Layout - begin **********************/
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_page_content_behind_header_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Always put content behind header', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will put page content behind page header', 'succulents' ),
				'parent'        => $general_meta_box
			)
		);
		
		$qodef_content_padding_group = succulents_qodef_add_admin_group(
			array(
				'name'        => 'content_padding_group',
				'title'       => esc_html__( 'Content Style', 'succulents' ),
				'description' => esc_html__( 'Define styles for Content area', 'succulents' ),
				'parent'      => $general_meta_box
			)
		);
		
			$qodef_content_padding_row = succulents_qodef_add_admin_row(
				array(
					'name'   => 'qodef_content_padding_row',
					'next'   => true,
					'parent' => $qodef_content_padding_group
				)
			);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'   => 'qodef_page_content_top_padding',
						'type'   => 'textsimple',
						'label'  => esc_html__( 'Content Top Padding', 'succulents' ),
						'parent' => $qodef_content_padding_row,
						'args'   => array(
							'suffix' => 'px'
						)
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'    => 'qodef_page_content_top_padding_mobile',
						'type'    => 'selectsimple',
						'label'   => esc_html__( 'Set this top padding for mobile header', 'succulents' ),
						'parent'  => $qodef_content_padding_row,
						'options' => succulents_qodef_get_yes_no_select_array( false )
					)
				);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_page_background_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Page Background Color', 'succulents' ),
				'description' => esc_html__( 'Choose background color for page content', 'succulents' ),
				'parent'      => $general_meta_box
			)
		);
		
		/***************** Content Layout - end **********************/
		
		/***************** Boxed Layout - begin **********************/
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'    => 'qodef_boxed_meta',
				'type'    => 'select',
				'label'   => esc_html__( 'Boxed Layout', 'succulents' ),
				'parent'  => $general_meta_box,
				'options' => succulents_qodef_get_yes_no_select_array()
			)
		);
		
			$boxed_container_meta = succulents_qodef_add_admin_container(
				array(
					'parent'          => $general_meta_box,
					'name'            => 'boxed_container_meta',
					'dependency' => array(
						'hide' => array(
							'qodef_boxed_meta'  => array('','no')
						)
					)
				)
			);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_page_background_color_in_box_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Page Background Color', 'succulents' ),
						'description' => esc_html__( 'Choose the page background color outside box', 'succulents' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_boxed_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'succulents' ),
						'description' => esc_html__( 'Choose an image to be displayed in background', 'succulents' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_boxed_pattern_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Pattern', 'succulents' ),
						'description' => esc_html__( 'Choose an image to be used as background pattern', 'succulents' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_boxed_background_image_attachment_meta',
						'type'          => 'select',
						'default_value' => 'fixed',
						'label'         => esc_html__( 'Background Image Attachment', 'succulents' ),
						'description'   => esc_html__( 'Choose background image attachment', 'succulents' ),
						'parent'        => $boxed_container_meta,
						'options'       => array(
							''       => esc_html__( 'Default', 'succulents' ),
							'fixed'  => esc_html__( 'Fixed', 'succulents' ),
							'scroll' => esc_html__( 'Scroll', 'succulents' )
						)
					)
				);
		
		/***************** Boxed Layout - end **********************/
		
		/***************** Passepartout Layout - begin **********************/
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_paspartu_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Passepartout', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will display passepartout around site content', 'succulents' ),
				'parent'        => $general_meta_box,
				'options'       => succulents_qodef_get_yes_no_select_array(),
			)
		);
		
			$paspartu_container_meta = succulents_qodef_add_admin_container(
				array(
					'parent'          => $general_meta_box,
					'name'            => 'qodef_paspartu_container_meta',
					'dependency' => array(
						'hide' => array(
							'qodef_paspartu_meta'  => array('','no')
						)
					)
				)
			);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_paspartu_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Passepartout Color', 'succulents' ),
						'description' => esc_html__( 'Choose passepartout color, default value is #ffffff', 'succulents' ),
						'parent'      => $paspartu_container_meta
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_paspartu_width_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Passepartout Size', 'succulents' ),
						'description' => esc_html__( 'Enter size amount for passepartout', 'succulents' ),
						'parent'      => $paspartu_container_meta,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_paspartu_responsive_width_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Responsive Passepartout Size', 'succulents' ),
						'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (tablets and mobiles view)', 'succulents' ),
						'parent'      => $paspartu_container_meta,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
				
				succulents_qodef_add_meta_box_field(
					array(
						'parent'        => $paspartu_container_meta,
						'type'          => 'select',
						'default_value' => '',
						'name'          => 'qodef_disable_top_paspartu_meta',
						'label'         => esc_html__( 'Disable Top Passepartout', 'succulents' ),
						'options'       => succulents_qodef_get_yes_no_select_array(),
					)
				);
		
		/***************** Passepartout Layout - end **********************/
		
		/***************** Content Width Layout - begin **********************/
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_initial_content_width_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Initial Width of Content', 'succulents' ),
				'description'   => esc_html__( 'Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid")', 'succulents' ),
				'parent'        => $general_meta_box,
				'options'       => array(
					''                => esc_html__( 'Default', 'succulents' ),
					'qodef-grid-1100' => esc_html__( '1100px', 'succulents' ),
					'qodef-grid-1300' => esc_html__( '1300px', 'succulents' ),
					'qodef-grid-1200' => esc_html__( '1200px', 'succulents' ),
					'qodef-grid-1000' => esc_html__( '1000px', 'succulents' ),
					'qodef-grid-800'  => esc_html__( '800px', 'succulents' )
				)
			)
		);
		
		/***************** Content Width Layout - end **********************/
		
		/***************** Smooth Page Transitions Layout - begin **********************/
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_smooth_page_transitions_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Smooth Page Transitions', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth transition between pages when clicking on links', 'succulents' ),
				'parent'        => $general_meta_box,
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
		
			$page_transitions_container_meta = succulents_qodef_add_admin_container(
				array(
					'parent'          => $general_meta_box,
					'name'            => 'page_transitions_container_meta',
					'dependency' => array(
						'hide' => array(
							'qodef_smooth_page_transitions_meta'  => array('','no')
						)
					)
				)
			);
		
				succulents_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_page_transition_preloader_meta',
						'type'        => 'select',
						'label'       => esc_html__( 'Enable Preloading Animation', 'succulents' ),
						'description' => esc_html__( 'Enabling this option will display an animated preloader while the page content is loading', 'succulents' ),
						'parent'      => $page_transitions_container_meta,
						'options'     => succulents_qodef_get_yes_no_select_array()
					)
				);
				
				$page_transition_preloader_container_meta = succulents_qodef_add_admin_container(
					array(
						'parent'          => $page_transitions_container_meta,
						'name'            => 'page_transition_preloader_container_meta',
						'dependency' => array(
							'hide' => array(
								'qodef_page_transition_preloader_meta'  => array('','no')
							)
						)
					)
				);
				
					succulents_qodef_add_meta_box_field(
						array(
							'name'   => 'qodef_smooth_pt_bgnd_color_meta',
							'type'   => 'color',
							'label'  => esc_html__( 'Page Loader Background Color', 'succulents' ),
							'parent' => $page_transition_preloader_container_meta
						)
					);
					
					$group_pt_spinner_animation_meta = succulents_qodef_add_admin_group(
						array(
							'name'        => 'group_pt_spinner_animation_meta',
							'title'       => esc_html__( 'Loader Style', 'succulents' ),
							'description' => esc_html__( 'Define styles for loader spinner animation', 'succulents' ),
							'parent'      => $page_transition_preloader_container_meta
						)
					);
					
					$row_pt_spinner_animation_meta = succulents_qodef_add_admin_row(
						array(
							'name'   => 'row_pt_spinner_animation_meta',
							'parent' => $group_pt_spinner_animation_meta
						)
					);
					
					succulents_qodef_add_meta_box_field(
						array(
							'type'    => 'selectsimple',
							'name'    => 'qodef_smooth_pt_spinner_type_meta',
							'label'   => esc_html__( 'Spinner Type', 'succulents' ),
							'parent'  => $row_pt_spinner_animation_meta,
							'options' => array(
								''                      => esc_html__( 'Default', 'succulents' ),
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

					succulents_qodef_add_meta_box_field(
						array(
							'type'   => 'colorsimple',
							'name'   => 'smooth_pt_spinner_color_meta',
							'label'  => esc_html__( 'Spinner Color', 'succulents' ),
							'parent' => $row_pt_spinner_animation_meta
						)
					);
					
					succulents_qodef_add_meta_box_field(
						array(
							'name'        => 'qodef_page_transition_fadeout_meta',
							'type'        => 'select',
							'label'       => esc_html__( 'Enable Fade Out Animation', 'succulents' ),
							'description' => esc_html__( 'Enabling this option will turn on fade out animation when leaving page', 'succulents' ),
							'options'     => succulents_qodef_get_yes_no_select_array(),
							'parent'      => $page_transitions_container_meta
						
						)
					);
		
		/***************** Smooth Page Transitions Layout - end **********************/
		
		/***************** Comments Layout - begin **********************/
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_page_comments_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Show Comments', 'succulents' ),
				'description' => esc_html__( 'Enabling this option will show comments on your page', 'succulents' ),
				'parent'      => $general_meta_box,
				'options'     => succulents_qodef_get_yes_no_select_array()
			)
		);
		
		/***************** Comments Layout - end **********************/
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_general_meta', 10 );
}