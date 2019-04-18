<?php

if ( ! function_exists( 'qodef_core_map_testimonials_meta' ) ) {
	function qodef_core_map_testimonials_meta() {
		$testimonial_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'testimonials' ),
				'title' => esc_html__( 'Testimonial', 'select-core' ),
				'name'  => 'testimonial_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_testimonial_title',
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'select-core' ),
				'description' => esc_html__( 'Enter testimonial title', 'select-core' ),
				'parent'      => $testimonial_meta_box,
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_testimonial_text',
				'type'        => 'text',
				'label'       => esc_html__( 'Text', 'select-core' ),
				'description' => esc_html__( 'Enter testimonial text', 'select-core' ),
				'parent'      => $testimonial_meta_box,
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_testimonial_author',
				'type'        => 'text',
				'label'       => esc_html__( 'Author', 'select-core' ),
				'description' => esc_html__( 'Enter author name', 'select-core' ),
				'parent'      => $testimonial_meta_box,
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_testimonial_author_position',
				'type'        => 'text',
				'label'       => esc_html__( 'Author Position', 'select-core' ),
				'description' => esc_html__( 'Enter author job position', 'select-core' ),
				'parent'      => $testimonial_meta_box,
			)
		);
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'qodef_core_map_testimonials_meta', 95 );
}