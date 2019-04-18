<?php

if ( ! function_exists( 'succulents_qodef_sticky_header_meta_boxes_options_map' ) ) {
	function succulents_qodef_sticky_header_meta_boxes_options_map( $header_meta_box ) {
		
		$sticky_amount_container = succulents_qodef_add_admin_container(
			array(
				'parent'          => $header_meta_box,
				'name'            => 'sticky_amount_container_meta_container',
				'dependency' => array(
					'hide' => array(
						'qodef_header_behaviour_meta'  => array( '', 'no-behavior','fixed-on-scroll','sticky-header-on-scroll-up' )
					)
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_scroll_amount_for_sticky_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Scroll amount for sticky header appearance', 'succulents' ),
				'description' => esc_html__( 'Define scroll amount for sticky header appearance', 'succulents' ),
				'parent'      => $sticky_amount_container,
				'args'        => array(
					'col_width' => 2,
					'suffix'    => 'px'
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_additional_header_area_meta_boxes_map', 'succulents_qodef_sticky_header_meta_boxes_options_map', 10, 1 );
}