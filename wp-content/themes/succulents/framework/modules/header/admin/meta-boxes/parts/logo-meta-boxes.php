<?php

if ( ! function_exists( 'succulents_qodef_logo_meta_box_map' ) ) {
	function succulents_qodef_logo_meta_box_map() {
		
		$logo_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'succulents_qodef_set_scope_for_meta_boxes', array( 'page', 'post' ), 'logo_meta' ),
				'title' => esc_html__( 'Logo', 'succulents' ),
				'name'  => 'logo_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_logo_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Default', 'succulents' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'succulents' ),
				'parent'      => $logo_meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_logo_image_dark_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Dark', 'succulents' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'succulents' ),
				'parent'      => $logo_meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_logo_image_light_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Light', 'succulents' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'succulents' ),
				'parent'      => $logo_meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_logo_image_sticky_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Sticky', 'succulents' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'succulents' ),
				'parent'      => $logo_meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_logo_image_mobile_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Mobile', 'succulents' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'succulents' ),
				'parent'      => $logo_meta_box
			)
		);
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_logo_meta_box_map', 47 );
}