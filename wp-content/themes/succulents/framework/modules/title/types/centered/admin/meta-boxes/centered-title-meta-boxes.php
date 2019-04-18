<?php

if ( ! function_exists( 'succulents_qodef_centered_title_type_options_meta_boxes' ) ) {
	function succulents_qodef_centered_title_type_options_meta_boxes( $show_title_area_meta_container ) {
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_subtitle_side_padding_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Subtitle Side Padding', 'succulents' ),
				'description' => esc_html__( 'Set left/right padding for subtitle area', 'succulents' ),
				'parent'      => $show_title_area_meta_container,
				'args'        => array(
					'col_width' => 2,
					'suffix'    => 'px or %'
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_additional_title_area_meta_boxes', 'succulents_qodef_centered_title_type_options_meta_boxes', 5 );
}