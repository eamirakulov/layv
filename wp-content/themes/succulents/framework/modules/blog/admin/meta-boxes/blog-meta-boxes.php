<?php

foreach ( glob( QODE_FRAMEWORK_MODULES_ROOT_DIR . '/blog/admin/meta-boxes/*/*.php' ) as $meta_box_load ) {
	include_once $meta_box_load;
}

if ( ! function_exists( 'succulents_qodef_map_blog_meta' ) ) {
	function succulents_qodef_map_blog_meta() {
		$qodef_blog_categories = array();
		$categories           = get_categories();
		foreach ( $categories as $category ) {
			$qodef_blog_categories[ $category->slug ] = $category->name;
		}
		
		$blog_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'page' ),
				'title' => esc_html__( 'Blog', 'succulents' ),
				'name'  => 'blog_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_blog_category_meta',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Blog Category', 'succulents' ),
				'description' => esc_html__( 'Choose category of posts to display (leave empty to display all categories)', 'succulents' ),
				'parent'      => $blog_meta_box,
				'options'     => $qodef_blog_categories
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_show_posts_per_page_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Number of Posts', 'succulents' ),
				'description' => esc_html__( 'Enter the number of posts to display', 'succulents' ),
				'parent'      => $blog_meta_box,
				'options'     => $qodef_blog_categories,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_blog_masonry_layout_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Masonry - Layout', 'succulents' ),
				'description' => esc_html__( 'Set masonry layout. Default is in grid.', 'succulents' ),
				'parent'      => $blog_meta_box,
				'options'     => array(
					''           => esc_html__( 'Default', 'succulents' ),
					'in-grid'    => esc_html__( 'In Grid', 'succulents' ),
					'full-width' => esc_html__( 'Full Width', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_blog_masonry_number_of_columns_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Masonry - Number of Columns', 'succulents' ),
				'description' => esc_html__( 'Set number of columns for your masonry blog lists', 'succulents' ),
				'parent'      => $blog_meta_box,
				'options'     => array(
					''      => esc_html__( 'Default', 'succulents' ),
					'two'   => esc_html__( '2 Columns', 'succulents' ),
					'three' => esc_html__( '3 Columns', 'succulents' ),
					'four'  => esc_html__( '4 Columns', 'succulents' ),
					'five'  => esc_html__( '5 Columns', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_blog_masonry_space_between_items_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Masonry - Space Between Items', 'succulents' ),
				'description' => esc_html__( 'Set space size between posts for your masonry blog lists', 'succulents' ),
				'options'     => succulents_qodef_get_space_between_items_array( true ),
				'parent'      => $blog_meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_blog_list_featured_image_proportion_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Masonry - Featured Image Proportion', 'succulents' ),
				'description'   => esc_html__( 'Choose type of proportions you want to use for featured images on masonry blog lists', 'succulents' ),
				'parent'        => $blog_meta_box,
				'default_value' => '',
				'options'       => array(
					''         => esc_html__( 'Default', 'succulents' ),
					'fixed'    => esc_html__( 'Fixed', 'succulents' ),
					'original' => esc_html__( 'Original', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_blog_pagination_type_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Pagination Type', 'succulents' ),
				'description'   => esc_html__( 'Choose a pagination layout for Blog Lists', 'succulents' ),
				'parent'        => $blog_meta_box,
				'default_value' => '',
				'options'       => array(
					''                => esc_html__( 'Default', 'succulents' ),
					'standard'        => esc_html__( 'Standard', 'succulents' ),
					'load-more'       => esc_html__( 'Load More', 'succulents' ),
					'infinite-scroll' => esc_html__( 'Infinite Scroll', 'succulents' ),
					'no-pagination'   => esc_html__( 'No Pagination', 'succulents' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'type'          => 'text',
				'name'          => 'qodef_number_of_chars_meta',
				'default_value' => '',
				'label'         => esc_html__( 'Number of Words in Excerpt', 'succulents' ),
				'description'   => esc_html__( 'Enter a number of words in excerpt (article summary). Default value is 40', 'succulents' ),
				'parent'        => $blog_meta_box,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_blog_meta', 30 );
}