<?php

if ( ! function_exists( 'succulents_qodef_map_footer_meta' ) ) {
	function succulents_qodef_map_footer_meta() {
		
		$footer_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'succulents_qodef_set_scope_for_meta_boxes', array( 'page', 'post' ), 'footer_meta' ),
				'title' => esc_html__( 'Footer', 'succulents' ),
				'name'  => 'footer_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_disable_footer_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Disable Footer for this Page', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will hide footer on this page', 'succulents' ),
				'options'       => succulents_qodef_get_yes_no_select_array(),
				'parent'        => $footer_meta_box
			)
		);
		
		$show_footer_meta_container = succulents_qodef_add_admin_container(
			array(
				'name'       => 'qodef_show_footer_meta_container',
				'parent'     => $footer_meta_box,
				'dependency' => array(
					'hide' => array(
						'qodef_disable_footer_meta' => 'yes'
					)
				)
			)
		);
		
			succulents_qodef_add_meta_box_field(
				array(
					'name'          => 'qodef_show_footer_top_meta',
					'type'          => 'select',
					'default_value' => '',
					'label'         => esc_html__( 'Show Footer Top', 'succulents' ),
					'description'   => esc_html__( 'Enabling this option will show Footer Top area', 'succulents' ),
					'options'       => succulents_qodef_get_yes_no_select_array(),
					'parent'        => $show_footer_meta_container
				)
			);
			
	        succulents_qodef_add_meta_box_field(
	            array(
	                'name'          => 'qodef_uncovering_footer_meta',
	                'type'          => 'select',
	                'default_value' => '',
	                'label'         => esc_html__( 'Uncovering Footer', 'succulents' ),
	                'description'   => esc_html__( 'Enabling this option will make Footer gradually appear on scroll', 'succulents' ),
	                'options'       => succulents_qodef_get_yes_no_select_array(),
	                'parent'        => $show_footer_meta_container,
	            )
	        );
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_footer_meta', 70 );
}