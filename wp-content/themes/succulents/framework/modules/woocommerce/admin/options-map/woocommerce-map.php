<?php

if ( ! function_exists( 'succulents_qodef_woocommerce_options_map' ) ) {
	
	/**
	 * Add Woocommerce options page
	 */
	function succulents_qodef_woocommerce_options_map() {
		
		succulents_qodef_add_admin_page(
			array(
				'slug'  => '_woocommerce_page',
				'title' => esc_html__( 'Woocommerce', 'succulents' ),
				'icon'  => 'fa fa-shopping-cart'
			)
		);
		
		/**
		 * Product List Settings
		 */
		$panel_product_list = succulents_qodef_add_admin_panel(
			array(
				'page'  => '_woocommerce_page',
				'name'  => 'panel_product_list',
				'title' => esc_html__( 'Product List', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_woo_product_list_columns',
				'label'         => esc_html__( 'Product List Columns', 'succulents' ),
				'default_value' => 'qodef-woocommerce-columns-4',
				'description'   => esc_html__( 'Choose number of columns for main shop page', 'succulents' ),
				'options'       => array(
					'qodef-woocommerce-columns-3' => esc_html__( '3 Columns', 'succulents' ),
					'qodef-woocommerce-columns-4' => esc_html__( '4 Columns', 'succulents' )
				),
				'parent'        => $panel_product_list,
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_woo_product_list_columns_space',
				'label'         => esc_html__( 'Space Between Items', 'succulents' ),
				'description'   => esc_html__( 'Select space between items for product listing and related products on single product', 'succulents' ),
				'default_value' => 'normal',
				'options'       => succulents_qodef_get_space_between_items_array(),
				'parent'        => $panel_product_list,
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'qodef_woo_products_per_page',
				'label'         => esc_html__( 'Number of products per page', 'succulents' ),
				'description'   => esc_html__( 'Set number of products on shop page', 'succulents' ),
				'parent'        => $panel_product_list,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_products_list_title_tag',
				'label'         => esc_html__( 'Products Title Tag', 'succulents' ),
				'default_value' => 'h4',
				'options'       => succulents_qodef_get_title_tag(),
				'parent'        => $panel_product_list,
			)
		);
		
		/**
		 * Single Product Settings
		 */
		$panel_single_product = succulents_qodef_add_admin_panel(
			array(
				'page'  => '_woocommerce_page',
				'name'  => 'panel_single_product',
				'title' => esc_html__( 'Single Product', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'show_title_area_woo',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will show title area on single post pages', 'succulents' ),
				'parent'        => $panel_single_product,
				'options'       => succulents_qodef_get_yes_no_select_array(),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_single_product_title_tag',
				'default_value' => 'h2',
				'label'         => esc_html__( 'Single Product Title Tag', 'succulents' ),
				'options'       => succulents_qodef_get_title_tag(),
				'parent'        => $panel_single_product,
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_number_of_thumb_images',
				'default_value' => '3',
				'label'         => esc_html__( 'Number of Thumbnail Images per Row', 'succulents' ),
				'options'       => array(
					'4' => esc_html__( 'Four', 'succulents' ),
					'3' => esc_html__( 'Three', 'succulents' ),
					'2' => esc_html__( 'Two', 'succulents' )
				),
				'parent'        => $panel_single_product
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_set_thumb_images_position',
				'default_value' => 'below-image',
				'label'         => esc_html__( 'Set Thumbnail Images Position', 'succulents' ),
				'options'       => array(
					'below-image'  => esc_html__( 'Below Featured Image', 'succulents' ),
					'on-left-side' => esc_html__( 'On The Left Side Of Featured Image', 'succulents' )
				),
				'parent'        => $panel_single_product
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_enable_single_product_zoom_image',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Zoom Maginfier', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will show magnifier image on featured image hover', 'succulents' ),
				'parent'        => $panel_single_product,
				'options'       => succulents_qodef_get_yes_no_select_array( false ),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_set_single_images_behavior',
				'default_value' => 'pretty-photo',
				'label'         => esc_html__( 'Set Images Behavior', 'succulents' ),
				'options'       => array(
					'pretty-photo' => esc_html__( 'Pretty Photo Lightbox', 'succulents' ),
					'photo-swipe'  => esc_html__( 'Photo Swipe Lightbox', 'succulents' )
				),
				'parent'        => $panel_single_product
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_woo_related_products_columns',
				'label'         => esc_html__( 'Related Products Columns', 'succulents' ),
				'default_value' => 'qodef-woocommerce-columns-4',
				'description'   => esc_html__( 'Choose number of columns for related products on single product page', 'succulents' ),
				'options'       => array(
					'qodef-woocommerce-columns-3' => esc_html__( '3 Columns', 'succulents' ),
					'qodef-woocommerce-columns-4' => esc_html__( '4 Columns', 'succulents' )
				),
				'parent'        => $panel_single_product,
			)
		);
	}
	
	add_action( 'succulents_qodef_options_map', 'succulents_qodef_woocommerce_options_map', 21 );
}