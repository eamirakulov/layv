<?php

if ( ! function_exists( 'succulents_qodef_map_woocommerce_meta' ) ) {
	function succulents_qodef_map_woocommerce_meta() {
		
		$woocommerce_meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => array( 'product' ),
				'title' => esc_html__( 'Product Meta', 'succulents' ),
				'name'  => 'woo_product_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_show_title_area_woo_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'succulents' ),
				'description'   => esc_html__( 'Disabling this option will turn off page title area', 'succulents' ),
				'options'       => succulents_qodef_get_yes_no_select_array(),
				'parent'        => $woocommerce_meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_show_new_sign_woo_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show New Sign', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will show new sign mark on product', 'succulents' ),
				'parent'        => $woocommerce_meta_box
			)
		);
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'succulents_qodef_map_woocommerce_meta', 99 );
}