<?php

if ( ! function_exists( 'qodef_core_map_portfolio_settings_meta' ) ) {
	function qodef_core_map_portfolio_settings_meta() {
		$meta_box = succulents_qodef_add_meta_box( array(
			'scope' => 'portfolio-item',
			'title' => esc_html__( 'Portfolio Settings', 'select-core' ),
			'name'  => 'portfolio_settings_meta_box'
		) );
		
		succulents_qodef_add_meta_box_field( array(
			'name'        => 'qodef_portfolio_single_template_meta',
			'type'        => 'select',
			'label'       => esc_html__( 'Portfolio Type', 'select-core' ),
			'description' => esc_html__( 'Choose a default type for Single Project pages', 'select-core' ),
			'parent'      => $meta_box,
			'options'     => array(
				''                  => esc_html__( 'Default', 'select-core' ),
				'huge-images'       => esc_html__( 'Portfolio Full Width Images', 'select-core' ),
				'images'            => esc_html__( 'Portfolio Images', 'select-core' ),
				'small-images'      => esc_html__( 'Portfolio Small Images', 'select-core' ),
				'slider'            => esc_html__( 'Portfolio Slider', 'select-core' ),
				'small-slider'      => esc_html__( 'Portfolio Small Slider', 'select-core' ),
				'gallery'           => esc_html__( 'Portfolio Gallery', 'select-core' ),
				'small-gallery'     => esc_html__( 'Portfolio Small Gallery', 'select-core' ),
				'masonry'           => esc_html__( 'Portfolio Masonry', 'select-core' ),
				'small-masonry'     => esc_html__( 'Portfolio Small Masonry', 'select-core' ),
				'custom'            => esc_html__( 'Portfolio Custom', 'select-core' ),
				'full-width-custom' => esc_html__( 'Portfolio Full Width Custom', 'select-core' )
			)
		) );
		
		/***************** Gallery Layout *****************/
		
		$gallery_type_meta_container = succulents_qodef_add_admin_container(
			array(
				'parent'          => $meta_box,
				'name'            => 'qodef_gallery_type_meta_container',
				'dependency' => array(
					'hide' => array(
						'qodef_portfolio_single_template_meta'  => array(
							'huge-images',
							'images',
							'small-images',
							'slider',
							'small-slider',
							'masonry',
							'small-masonry',
							'custom',
							'full-width-custom'
						)
					)
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_portfolio_single_gallery_columns_number_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Number of Columns', 'select-core' ),
				'default_value' => '',
				'description'   => esc_html__( 'Set number of columns for portfolio gallery type', 'select-core' ),
				'parent'        => $gallery_type_meta_container,
				'options'       => array(
					''      => esc_html__( 'Default', 'select-core' ),
					'two'   => esc_html__( '2 Columns', 'select-core' ),
					'three' => esc_html__( '3 Columns', 'select-core' ),
					'four'  => esc_html__( '4 Columns', 'select-core' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_portfolio_single_gallery_space_between_items_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Space Between Items', 'select-core' ),
				'description'   => esc_html__( 'Set space size between columns for portfolio gallery type', 'select-core' ),
				'default_value' => '',
				'options'       => succulents_qodef_get_space_between_items_array( true ),
				'parent'        => $gallery_type_meta_container
			)
		);
		
		/***************** Gallery Layout *****************/
		
		/***************** Masonry Layout *****************/
		
		$masonry_type_meta_container = succulents_qodef_add_admin_container(
			array(
				'parent'          => $meta_box,
				'name'            => 'qodef_masonry_type_meta_container',
				'dependency' => array(
					'hide' => array(
						'qodef_masonry_type_meta_container'  => array(
							'huge-images',
							'images',
							'small-images',
							'slider',
							'small-slider',
							'gallery',
							'small-gallery',
							'custom',
							'full-width-custom'
						)
					)
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_portfolio_single_masonry_columns_number_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Number of Columns', 'select-core' ),
				'default_value' => '',
				'description'   => esc_html__( 'Set number of columns for portfolio masonry type', 'select-core' ),
				'parent'        => $masonry_type_meta_container,
				'options'       => array(
					''      => esc_html__( 'Default', 'select-core' ),
					'two'   => esc_html__( '2 Columns', 'select-core' ),
					'three' => esc_html__( '3 Columns', 'select-core' ),
					'four'  => esc_html__( '4 Columns', 'select-core' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_portfolio_single_masonry_space_between_items_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Space Between Items', 'select-core' ),
				'description'   => esc_html__( 'Set space size between columns for portfolio masonry type', 'select-core' ),
				'default_value' => '',
				'options'       => succulents_qodef_get_space_between_items_array( true ),
				'parent'        => $masonry_type_meta_container
			)
		);
		
		/***************** Masonry Layout *****************/
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_show_title_area_portfolio_single_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'select-core' ),
				'description'   => esc_html__( 'Enabling this option will show title area on your single portfolio page', 'select-core' ),
				'parent'        => $meta_box,
				'options'       => succulents_qodef_get_yes_no_select_array()
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'portfolio_info_top_padding',
				'type'        => 'text',
				'label'       => esc_html__( 'Portfolio Info Top Padding', 'select-core' ),
				'description' => esc_html__( 'Set top padding for portfolio info elements holder. This option works only for Portfolio Images, Slider, Gallery and Masonry portfolio types', 'select-core' ),
				'parent'      => $meta_box,
				'args'        => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'portfolio_external_link',
				'type'        => 'text',
				'label'       => esc_html__( 'Portfolio External Link', 'select-core' ),
				'description' => esc_html__( 'Enter URL to link from Portfolio List page', 'select-core' ),
				'parent'      => $meta_box,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_portfolio_masonry_fixed_dimensions_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Dimensions for Masonry - Image Fixed Proportion', 'select-core' ),
				'description'   => esc_html__( 'Choose image layout when it appears in Masonry type portfolio lists where image proportion is fixed', 'select-core' ),
				'default_value' => 'default',
				'parent'        => $meta_box,
				'options'       => array(
					'default'            => esc_html__( 'Default', 'select-core' ),
					'large-width'        => esc_html__( 'Large Width', 'select-core' ),
					'large-height'       => esc_html__( 'Large Height', 'select-core' ),
					'large-width-height' => esc_html__( 'Large Width/Height', 'select-core' )
				)
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_portfolio_masonry_original_dimensions_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Dimensions for Masonry - Image Original Proportion', 'select-core' ),
				'description'   => esc_html__( 'Choose image layout when it appears in Masonry type portfolio lists where image proportion is original', 'select-core' ),
				'default_value' => 'default',
				'parent'        => $meta_box,
				'options'       => array(
					'default'     => esc_html__( 'Default', 'select-core' ),
					'large-width' => esc_html__( 'Large Width', 'select-core' )
				)
			)
		);
		
		$all_pages = array();
		$pages     = get_pages();
		foreach ( $pages as $page ) {
			$all_pages[ $page->ID ] = $page->post_title;
		}
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'portfolio_single_back_to_link',
				'type'        => 'select',
				'label'       => esc_html__( '"Back To" Link', 'select-core' ),
				'description' => esc_html__( 'Choose "Back To" page to link from portfolio Single Project page', 'select-core' ),
				'parent'      => $meta_box,
				'options'     => $all_pages,
				'args'        => array(
					'select2' => true
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'qodef_core_map_portfolio_settings_meta', 41 );
}