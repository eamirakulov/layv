<?php

if ( ! function_exists( 'succulents_qodef_portfolio_category_additional_fields' ) ) {
	function succulents_qodef_portfolio_category_additional_fields() {
		
		$fields = succulents_qodef_add_taxonomy_fields(
			array(
				'scope' => 'portfolio-category',
				'name'  => 'portfolio_category_options'
			)
		);
		
		succulents_qodef_add_taxonomy_field(
			array(
				'name'   => 'qodef_portfolio_category_image_meta',
				'type'   => 'image',
				'label'  => esc_html__( 'Category Image', 'select-core' ),
				'parent' => $fields
			)
		);
	}
	
	add_action( 'succulents_qodef_custom_taxonomy_fields', 'succulents_qodef_portfolio_category_additional_fields' );
}