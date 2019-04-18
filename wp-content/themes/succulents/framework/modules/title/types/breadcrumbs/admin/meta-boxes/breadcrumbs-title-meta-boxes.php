<?php

if ( ! function_exists( 'succulents_qodef_breadcrumbs_title_type_options_meta_boxes' ) ) {
	function succulents_qodef_breadcrumbs_title_type_options_meta_boxes( $show_title_area_meta_container ) {
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_breadcrumbs_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Breadcrumbs Color', 'succulents' ),
				'description' => esc_html__( 'Choose a color for breadcrumbs text', 'succulents' ),
				'parent'      => $show_title_area_meta_container
			)
		);
	}
	
	add_action( 'succulents_qodef_additional_title_area_meta_boxes', 'succulents_qodef_breadcrumbs_title_type_options_meta_boxes' );
}