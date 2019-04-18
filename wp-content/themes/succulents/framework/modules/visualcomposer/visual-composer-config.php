<?php

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if ( function_exists( 'vc_set_as_theme' ) ) {
	vc_set_as_theme( true );
}

/**
 * Change path for overridden templates
 */
if ( function_exists( 'vc_set_shortcodes_templates_dir' ) ) {
	$dir = QODE_ROOT_DIR . '/vc-templates';
	vc_set_shortcodes_templates_dir( $dir );
}

if ( ! function_exists( 'succulents_qodef_configure_visual_composer_frontend_editor' ) ) {
	/**
	 * Configuration for Visual Composer FrontEnd Editor
	 * Hooks on vc_after_init action
	 */
	function succulents_qodef_configure_visual_composer_frontend_editor() {
		/**
		 * Remove frontend editor
		 */
		if ( function_exists( 'vc_disable_frontend' ) ) {
			vc_disable_frontend();
		}
	}
	
	add_action( 'vc_after_init', 'succulents_qodef_configure_visual_composer_frontend_editor' );
}

if ( ! function_exists( 'succulents_qodef_vc_row_map' ) ) {
	/**
	 * Map VC Row shortcode
	 * Hooks on vc_after_init action
	 */
	function succulents_qodef_vc_row_map() {
		
		/******* VC Row shortcode - begin *******/
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'dropdown',
				'param_name' => 'row_content_width',
				'heading'    => esc_html__( 'Qode Row Content Width', 'succulents' ),
				'value'      => array(
					esc_html__( 'Full Width', 'succulents' ) => 'full-width',
					esc_html__( 'In Grid', 'succulents' )    => 'grid'
				),
				'group'      => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'textfield',
				'param_name'  => 'anchor',
				'heading'     => esc_html__( 'Qode Anchor ID', 'succulents' ),
				'description' => esc_html__( 'For example "home"', 'succulents' ),
				'group'       => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'colorpicker',
				'param_name' => 'simple_background_color',
				'heading'    => esc_html__( 'Qode Background Color', 'succulents' ),
				'group'      => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'attach_image',
				'param_name' => 'simple_background_image',
				'heading'    => esc_html__( 'Qode Background Image', 'succulents' ),
				'group'      => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'dropdown',
				'param_name'  => 'disable_background_image',
				'heading'     => esc_html__( 'Qode Disable Background Image', 'succulents' ),
				'value'       => array(
					esc_html__( 'Never', 'succulents' )        => '',
					esc_html__( 'Below 1280px', 'succulents' ) => '1280',
					esc_html__( 'Below 1024px', 'succulents' ) => '1024',
					esc_html__( 'Below 768px', 'succulents' )  => '768',
					esc_html__( 'Below 680px', 'succulents' )  => '680',
					esc_html__( 'Below 480px', 'succulents' )  => '480'
				),
				'save_always' => true,
				'description' => esc_html__( 'Choose on which stage you hide row background image', 'succulents' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'attach_image',
				'param_name' => 'parallax_background_image',
				'heading'    => esc_html__( 'Qode Parallax Background Image', 'succulents' ),
				'group'      => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'textfield',
				'param_name'  => 'parallax_bg_speed',
				'heading'     => esc_html__( 'Qode Parallax Speed', 'succulents' ),
				'description' => esc_html__( 'Set your parallax speed. Default value is 1.', 'succulents' ),
				'dependency'  => array( 'element' => 'parallax_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'textfield',
				'param_name' => 'parallax_bg_height',
				'heading'    => esc_html__( 'Qode Parallax Section Height (px)', 'succulents' ),
				'dependency' => array( 'element' => 'parallax_background_image', 'not_empty' => true ),
				'group'      => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'dropdown',
				'param_name' => 'content_text_aligment',
				'heading'    => esc_html__( 'Qode Content Aligment', 'succulents' ),
				'value'      => array(
					esc_html__( 'Default', 'succulents' ) => '',
					esc_html__( 'Left', 'succulents' )    => 'left',
					esc_html__( 'Center', 'succulents' )  => 'center',
					esc_html__( 'Right', 'succulents' )   => 'right'
				),
				'group'      => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		/******* VC Row shortcode - end *******/
		
		/******* VC Row Inner shortcode - begin *******/
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'dropdown',
				'param_name' => 'row_content_width',
				'heading'    => esc_html__( 'Qode Row Content Width', 'succulents' ),
				'value'      => array(
					esc_html__( 'Full Width', 'succulents' ) => 'full-width',
					esc_html__( 'In Grid', 'succulents' )    => 'grid'
				),
				'group'      => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'colorpicker',
				'param_name' => 'simple_background_color',
				'heading'    => esc_html__( 'Qode Background Color', 'succulents' ),
				'group'      => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'attach_image',
				'param_name' => 'simple_background_image',
				'heading'    => esc_html__( 'Qode Background Image', 'succulents' ),
				'group'      => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'        => 'dropdown',
				'param_name'  => 'disable_background_image',
				'heading'     => esc_html__( 'Qode Disable Background Image', 'succulents' ),
				'value'       => array(
					esc_html__( 'Never', 'succulents' )        => '',
					esc_html__( 'Below 1280px', 'succulents' ) => '1280',
					esc_html__( 'Below 1024px', 'succulents' ) => '1024',
					esc_html__( 'Below 768px', 'succulents' )  => '768',
					esc_html__( 'Below 680px', 'succulents' )  => '680',
					esc_html__( 'Below 480px', 'succulents' )  => '480'
				),
				'save_always' => true,
				'description' => esc_html__( 'Choose on which stage you hide row background image', 'succulents' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'dropdown',
				'param_name' => 'content_text_aligment',
				'heading'    => esc_html__( 'Qode Content Aligment', 'succulents' ),
				'value'      => array(
					esc_html__( 'Default', 'succulents' ) => '',
					esc_html__( 'Left', 'succulents' )    => 'left',
					esc_html__( 'Center', 'succulents' )  => 'center',
					esc_html__( 'Right', 'succulents' )   => 'right'
				),
				'group'      => esc_html__( 'Qode Settings', 'succulents' )
			)
		);
		
		/******* VC Row Inner shortcode - end *******/
		
		/******* VC Revolution Slider shortcode - begin *******/
		
		if ( succulents_qodef_revolution_slider_installed() ) {
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'enable_paspartu',
					'heading'     => esc_html__( 'Qode Enable Passepartout', 'succulents' ),
					'value'       => array_flip( succulents_qodef_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'group'       => esc_html__( 'Qode Settings', 'succulents' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'paspartu_size',
					'heading'     => esc_html__( 'Qode Passepartout Size', 'succulents' ),
					'value'       => array(
						esc_html__( 'Tiny', 'succulents' )   => 'tiny',
						esc_html__( 'Small', 'succulents' )  => 'small',
						esc_html__( 'Normal', 'succulents' ) => 'normal',
						esc_html__( 'Large', 'succulents' )  => 'large'
					),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Qode Settings', 'succulents' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'disable_side_paspartu',
					'heading'     => esc_html__( 'Qode Disable Side Passepartout', 'succulents' ),
					'value'       => array_flip( succulents_qodef_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Qode Settings', 'succulents' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'disable_top_paspartu',
					'heading'     => esc_html__( 'Qode Disable Top Passepartout', 'succulents' ),
					'value'       => array_flip( succulents_qodef_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Qode Settings', 'succulents' )
				)
			);
		}
		
		/******* VC Revolution Slider shortcode - end *******/
	}
	
	add_action( 'vc_after_init', 'succulents_qodef_vc_row_map' );
}