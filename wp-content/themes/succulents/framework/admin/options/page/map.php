<?php

if ( ! function_exists( 'succulents_qodef_page_options_map' ) ) {
	function succulents_qodef_page_options_map() {
		
		succulents_qodef_add_admin_page(
			array(
				'slug'  => '_page_page',
				'title' => esc_html__( 'Page', 'succulents' ),
				'icon'  => 'fa fa-file-text-o'
			)
		);
		
		/***************** Page Layout - begin **********************/
		
		$panel_sidebar = succulents_qodef_add_admin_panel(
			array(
				'page'  => '_page_page',
				'name'  => 'panel_sidebar',
				'title' => esc_html__( 'Page Style', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'name'          => 'page_show_comments',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Show Comments', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will show comments on your page', 'succulents' ),
				'default_value' => 'yes',
				'parent'        => $panel_sidebar
			)
		);
		
		/***************** Page Layout - end **********************/
		
		/***************** Content Layout - begin **********************/
		
		$panel_content = succulents_qodef_add_admin_panel(
			array(
				'page'  => '_page_page',
				'name'  => 'panel_content',
				'title' => esc_html__( 'Content Style', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'content_top_padding',
				'default_value' => '',
				'label'         => esc_html__( 'Content Top Padding for Template in Full Width', 'succulents' ),
				'description'   => esc_html__( 'Enter top padding for content area for templates in full width. If you set this value then it\'s important to set also Content top padding for mobile header value', 'succulents' ),
				'args'          => array(
					'suffix'    => 'px',
					'col_width' => 3
				),
				'parent'        => $panel_content
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'content_top_padding_in_grid',
				'default_value' => '',
				'label'         => esc_html__( 'Content Top Padding for Templates in Grid', 'succulents' ),
				'description'   => esc_html__( 'Enter top padding for content area for Templates in grid. If you set this value then it\'s important to set also Content top padding for mobile header value', 'succulents' ),
				'args'          => array(
					'suffix'    => 'px',
					'col_width' => 3
				),
				'parent'        => $panel_content
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'content_top_padding_mobile',
				'default_value' => '',
				'label'         => esc_html__( 'Content Top Padding for Mobile Header', 'succulents' ),
				'description'   => esc_html__( 'Enter top padding for content area for Mobile Header', 'succulents' ),
				'args'          => array(
					'suffix'    => 'px',
					'col_width' => 3
				),
				'parent'        => $panel_content
			)
		);
		
		/***************** Content Layout - end **********************/
		
		/***************** Additional Page Layout - start *****************/
		
		do_action( 'succulents_qodef_additional_page_options_map' );
		
		/***************** Additional Page Layout - end *****************/
	}
	
	add_action( 'succulents_qodef_options_map', 'succulents_qodef_page_options_map', 8 );
}