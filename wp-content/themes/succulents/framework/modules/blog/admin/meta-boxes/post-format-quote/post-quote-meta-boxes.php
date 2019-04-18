<?php

if ( ! function_exists( 'succulents_qodef_map_post_quote_meta' ) ) {
	function succulents_qodef_map_post_quote_meta() {
		$quote_post_format_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Quote Post Format', 'succulents' ),
				'name'  => 'post_format_quote_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_quote_text_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Quote Text', 'succulents' ),
				'description' => esc_html__( 'Enter Quote text', 'succulents' ),
				'parent'      => $quote_post_format_meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_quote_author_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Quote Author', 'succulents' ),
				'description' => esc_html__( 'Enter Quote author', 'succulents' ),
				'parent'      => $quote_post_format_meta_box
			)
		);

        succulents_qodef_add_meta_box_field(
            array(
                'name'        => 'qodef_post_skin',
                'type'        => 'select',
                'label'       => esc_html__( 'Quote Skin', 'succulents' ),
                'description' => esc_html__( 'Choose Quote skin', 'succulents' ),
                'default'     => 'qodef-post-light-skin',
                'options'       => array(
                    'qodef-post-light-skin' => esc_html__('Light Skin', 'succulents'),
                    'qodef-post-dark-skin'  => esc_html__('Dark Skin', 'succulents')
                ),
                'parent'      => $quote_post_format_meta_box
            )
        );
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_post_quote_meta', 25 );
}