<?php

if ( ! function_exists( 'succulents_qodef_map_post_link_meta' ) ) {
	function succulents_qodef_map_post_link_meta() {
		$link_post_format_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Link Post Format', 'succulents' ),
				'name'  => 'post_format_link_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_link_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Link', 'succulents' ),
				'description' => esc_html__( 'Enter link', 'succulents' ),
				'parent'      => $link_post_format_meta_box
			)
		);

        succulents_qodef_add_meta_box_field(
            array(
                'name'        => 'qodef_post_skin',
                'type'        => 'select',
                'label'       => esc_html__( 'Link Skin', 'succulents' ),
                'description' => esc_html__( 'Choose Link skin', 'succulents' ),
                'default'     => 'qodef-post-light-skin',
                'options'       => array(
                    'qodef-post-light-skin' => esc_html__('Light Skin', 'succulents'),
                    'qodef-post-dark-skin'  => esc_html__('Dark Skin', 'succulents')
                ),
                'parent'      => $link_post_format_meta_box
            )
        );
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_post_link_meta', 24 );
}