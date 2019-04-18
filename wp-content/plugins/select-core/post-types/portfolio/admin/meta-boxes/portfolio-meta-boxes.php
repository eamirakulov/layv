<?php

if ( ! function_exists( 'qodef_core_map_portfolio_meta' ) ) {
	function qodef_core_map_portfolio_meta() {
		global $succulents_qodef_Framework;
		
		$qodef_pages = array();
		$pages      = get_pages();
		foreach ( $pages as $page ) {
			$qodef_pages[ $page->ID ] = $page->post_title;
		}
		
		//Portfolio Images
		
		$qodefPortfolioImages = new SucculentsQodefMetaBox( 'portfolio-item', esc_html__( 'Portfolio Images (multiple upload)', 'select-core' ), '', '', 'portfolio_images' );
		$succulents_qodef_Framework->qodefMetaBoxes->addMetaBox( 'portfolio_images', $qodefPortfolioImages );
		
		$qodef_portfolio_image_gallery = new SucculentsQodefMultipleImages( 'qodef-portfolio-image-gallery', esc_html__( 'Portfolio Images', 'select-core' ), esc_html__( 'Choose your portfolio images', 'select-core' ) );
		$qodefPortfolioImages->addChild( 'qodef-portfolio-image-gallery', $qodef_portfolio_image_gallery );
		
		//Portfolio Single Upload Images/Videos 
		
		$qodef_portfolio_images_videos = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'portfolio-item' ),
				'title' => esc_html__( 'Portfolio Images/Videos (single upload)', 'select-core' ),
				'name'  => 'qodef_portfolio_images_videos'
			)
		);
		succulents_qodef_add_repeater_field(
			array(
				'name'        => 'qodef_portfolio_single_upload',
				'parent'      => $qodef_portfolio_images_videos,
				'button_text' => esc_html__( 'Add Image/Video', 'select-core' ),
				'fields'      => array(
					array(
						'type'        => 'select',
						'name'        => 'file_type',
						'label'       => esc_html__( 'File Type', 'select-core' ),
						'options' => array(
							'image' => esc_html__('Image','select-core'),
							'video' => esc_html__('Video','select-core'),
						)
					),
					array(
						'type'        => 'image',
						'name'        => 'single_image',
						'label'       => esc_html__( 'Image', 'select-core' ),
						'dependency' => array(
							'show' => array(
								'file_type'  => 'image'
							)
						)
					),
					array(
						'type'        => 'select',
						'name'        => 'video_type',
						'label'       => esc_html__( 'Video Type', 'select-core' ),
						'options'	  => array(
							'youtube' => esc_html__('YouTube', 'select-core'),
							'vimeo' => esc_html__('Vimeo', 'select-core'),
							'self' => esc_html__('Self Hosted', 'select-core'),
						),
						'dependency' => array(
							'show' => array(
								'file_type'  => 'video'
							)
						)
					),
					array(
						'type'        => 'text',
						'name'        => 'video_id',
						'label'       => esc_html__( 'Video ID', 'select-core' ),
						'dependency' => array(
							'show' => array(
								'file_type' => 'video',
								'video_type'  => array('youtube','vimeo')
							)
						)
					),
					array(
						'type'        => 'text',
						'name'        => 'video_mp4',
						'label'       => esc_html__( 'Video mp4', 'select-core' ),
						'dependency' => array(
							'show' => array(
								'file_type' => 'video',
								'video_type'  => 'self'
							)
						)
					),
					array(
						'type'        => 'image',
						'name'        => 'video_cover_image',
						'label'       => esc_html__( 'Video Cover Image', 'select-core' ),
						'dependency' => array(
							'show' => array(
								'file_type' => 'video',
								'video_type'  => 'self'
							)
						)
					)
				)
			)
		);
		
		//Portfolio Additional Sidebar Items
		
		$qodefAdditionalSidebarItems = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'portfolio-item' ),
				'title' => esc_html__( 'Additional Portfolio Sidebar Items', 'select-core' ),
				'name'  => 'portfolio_properties'
			)
		);

		succulents_qodef_add_repeater_field(
			array(
				'name'        => 'qodef_portfolio_properties',
				'parent'      => $qodefAdditionalSidebarItems,
				'button_text' => esc_html__( 'Add New Item', 'select-core' ),
				'fields'      => array(
					array(
						'type'        => 'text',
						'name'        => 'item_title',
						'label'       => esc_html__( 'Item Title', 'select-core' ),
					),
					array(
						'type'        => 'text',
						'name'        => 'item_text',
						'label'       => esc_html__( 'Item Text', 'select-core' )
					),
					array(
						'type'        => 'text',
						'name'        => 'item_url',
						'label'       => esc_html__( 'Enter Full URL for Item Text Link', 'select-core' )
					)
				)
			)
		);
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'qodef_core_map_portfolio_meta', 40 );
}