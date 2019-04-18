<?php

if ( ! function_exists( 'succulents_qodef_map_post_audio_meta' ) ) {
	function succulents_qodef_map_post_audio_meta() {
		$audio_post_format_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Audio Post Format', 'succulents' ),
				'name'  => 'post_format_audio_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_audio_type_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Audio Type', 'succulents' ),
				'description'   => esc_html__( 'Choose audio type', 'succulents' ),
				'parent'        => $audio_post_format_meta_box,
				'default_value' => 'social_networks',
				'options'       => array(
					'social_networks' => esc_html__( 'Audio Service', 'succulents' ),
					'self'            => esc_html__( 'Self Hosted', 'succulents' )
				)
			)
		);
		
		$qodef_audio_embedded_container = succulents_qodef_add_admin_container(
			array(
				'parent' => $audio_post_format_meta_box,
				'name'   => 'qodef_audio_embedded_container'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_audio_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Audio URL', 'succulents' ),
				'description' => esc_html__( 'Enter audio URL', 'succulents' ),
				'parent'      => $qodef_audio_embedded_container,
                'dependency' => array(
                    'show' => array(
                        'qodef_audio_type_meta' => 'social_networks'
                    )
                )
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_audio_custom_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Audio Link', 'succulents' ),
				'description' => esc_html__( 'Enter audio link', 'succulents' ),
				'parent'      => $qodef_audio_embedded_container,
				'dependency' => array(
					'show' => array(
						'qodef_audio_type_meta' => 'self'
					)
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_post_audio_meta', 23 );
}