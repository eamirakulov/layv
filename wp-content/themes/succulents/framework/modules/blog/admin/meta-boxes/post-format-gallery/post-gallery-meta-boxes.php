<?php

if ( ! function_exists( 'succulents_qodef_map_post_gallery_meta' ) ) {
	
	function succulents_qodef_map_post_gallery_meta() {
		$gallery_post_format_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Gallery Post Format', 'succulents' ),
				'name'  => 'post_format_gallery_meta'
			)
		);
		
		succulents_qodef_add_multiple_images_field(
			array(
				'name'        => 'qodef_post_gallery_images_meta',
				'label'       => esc_html__( 'Gallery Images', 'succulents' ),
				'description' => esc_html__( 'Choose your gallery images', 'succulents' ),
				'parent'      => $gallery_post_format_meta_box,
			)
		);
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_post_gallery_meta', 21 );
}
