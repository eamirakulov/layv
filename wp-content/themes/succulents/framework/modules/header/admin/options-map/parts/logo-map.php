<?php

if ( ! function_exists( 'succulents_qodef_logo_options_map' ) ) {
	function succulents_qodef_logo_options_map() {
		
		succulents_qodef_add_admin_page(
			array(
				'slug'  => '_logo_page',
				'title' => esc_html__( 'Logo', 'succulents' ),
				'icon'  => 'fa fa-coffee'
			)
		);
		
		$panel_logo = succulents_qodef_add_admin_panel(
			array(
				'page'  => '_logo_page',
				'name'  => 'panel_logo',
				'title' => esc_html__( 'Logo', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'parent'        => $panel_logo,
				'type'          => 'yesno',
				'name'          => 'hide_logo',
				'default_value' => 'no',
				'label'         => esc_html__( 'Hide Logo', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will hide logo image', 'succulents' )
			)
		);
		
		$hide_logo_container = succulents_qodef_add_admin_container(
			array(
				'parent'          => $panel_logo,
				'name'            => 'hide_logo_container',
				'dependency' => array(
					'hide' => array(
						'hide_logo'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'logo_image',
				'type'          => 'image',
				'default_value' => QODE_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Default', 'succulents' ),
				'parent'        => $hide_logo_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'logo_image_dark',
				'type'          => 'image',
				'default_value' => QODE_ASSETS_ROOT . "/img/logo_black.png",
				'label'         => esc_html__( 'Logo Image - Dark', 'succulents' ),
				'parent'        => $hide_logo_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'logo_image_light',
				'type'          => 'image',
				'default_value' => QODE_ASSETS_ROOT . "/img/logo_white.png",
				'label'         => esc_html__( 'Logo Image - Light', 'succulents' ),
				'parent'        => $hide_logo_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'logo_image_sticky',
				'type'          => 'image',
				'default_value' => QODE_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Sticky', 'succulents' ),
				'parent'        => $hide_logo_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'logo_image_mobile',
				'type'          => 'image',
				'default_value' => QODE_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Mobile', 'succulents' ),
				'parent'        => $hide_logo_container
			)
		);
	}
	
	add_action( 'succulents_qodef_options_map', 'succulents_qodef_logo_options_map', 2 );
}