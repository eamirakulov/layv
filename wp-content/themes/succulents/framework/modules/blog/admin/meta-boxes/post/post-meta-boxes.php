<?php

/*** Post Settings ***/

if ( ! function_exists( 'succulents_qodef_map_post_meta' ) ) {
	function succulents_qodef_map_post_meta() {
		
		$post_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Post', 'succulents' ),
				'name'  => 'post-meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_blog_single_sidebar_layout_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Sidebar Layout', 'succulents' ),
				'description'   => esc_html__( 'Choose a sidebar layout for Blog single page', 'succulents' ),
				'default_value' => '',
				'parent'        => $post_meta_box,
                'options'       => succulents_qodef_get_custom_sidebars_options( true )
			)
		);
		
		$succulents_custom_sidebars = succulents_qodef_get_custom_sidebars();
		if ( count( $succulents_custom_sidebars ) > 0 ) {
			succulents_qodef_add_meta_box_field( array(
				'name'        => 'qodef_blog_single_custom_sidebar_area_meta',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Sidebar to Display', 'succulents' ),
				'description' => esc_html__( 'Choose a sidebar to display on Blog single page. Default sidebar is "Sidebar"', 'succulents' ),
				'parent'      => $post_meta_box,
				'options'     => succulents_qodef_get_custom_sidebars(),
				'args' => array(
					'select2' => true
				)
			) );
		}
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_blog_list_featured_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Blog List Image', 'succulents' ),
				'description' => esc_html__( 'Choose an Image for displaying in blog list. If not uploaded, featured image will be shown.', 'succulents' ),
				'parent'      => $post_meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_blog_masonry_gallery_fixed_dimensions_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Dimensions for Fixed Proportion', 'succulents' ),
				'description'   => esc_html__( 'Choose image layout when it appears in Masonry lists in fixed proportion', 'succulents' ),
				'default_value' => 'default',
				'parent'        => $post_meta_box,
				'options'       => array(
					'default'            => esc_html__( 'Default', 'succulents' ),
					'large-width'        => esc_html__( 'Large Width', 'succulents' ),
					'large-height'       => esc_html__( 'Large Height', 'succulents' ),
					'large-width-height' => esc_html__( 'Large Width/Height', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_blog_masonry_gallery_original_dimensions_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Dimensions for Original Proportion', 'succulents' ),
				'description'   => esc_html__( 'Choose image layout when it appears in Masonry lists in original proportion', 'succulents' ),
				'default_value' => 'default',
				'parent'        => $post_meta_box,
				'options'       => array(
					'default'     => esc_html__( 'Default', 'succulents' ),
					'large-width' => esc_html__( 'Large Width', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_show_title_area_blog_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will show title area on your single post page', 'succulents' ),
				'parent'        => $post_meta_box,
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);

		do_action('succulents_qodef_blog_post_meta', $post_meta_box);
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_post_meta', 20 );
}
