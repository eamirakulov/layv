<?php

if ( ! function_exists( 'succulents_qodef_map_post_video_meta' ) ) {
	function succulents_qodef_map_post_video_meta() {
		$video_post_format_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Video Post Format', 'succulents' ),
				'name'  => 'post_format_video_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_video_type_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Video Type', 'succulents' ),
				'description'   => esc_html__( 'Choose video type', 'succulents' ),
				'parent'        => $video_post_format_meta_box,
				'default_value' => 'social_networks',
				'options'       => array(
					'social_networks' => esc_html__( 'Video Service', 'succulents' ),
					'self'            => esc_html__( 'Self Hosted', 'succulents' )
				)
			)
		);
		
		$qodef_video_embedded_container = succulents_qodef_add_admin_container(
			array(
				'parent' => $video_post_format_meta_box,
				'name'   => 'qodef_video_embedded_container'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_video_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Video URL', 'succulents' ),
				'description' => esc_html__( 'Enter Video URL', 'succulents' ),
				'parent'      => $qodef_video_embedded_container,
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_video_custom_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Video MP4', 'succulents' ),
				'description' => esc_html__( 'Enter video URL for MP4 format', 'succulents' ),
				'parent'      => $qodef_video_embedded_container,
				'dependency' => array(
					'show' => array(
						'qodef_video_type_meta' => 'self'
					)
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_video_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Video Image', 'succulents' ),
				'description' => esc_html__( 'Enter video image', 'succulents' ),
				'parent'      => $qodef_video_embedded_container,
				'dependency' => array(
					'show' => array(
						'qodef_video_type_meta' => 'self'
					)
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_post_video_meta', 22 );
}