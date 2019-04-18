<?php

namespace QodeCore\CPT\Shortcodes\ProductList;

use QodeCore\Lib;

class ProductList implements Lib\ShortcodeInterface {
	private $base;
	
	function __construct() {
		$this->base = 'qodef_product_list';
		
		add_action( 'vc_before_init', array( $this, 'vcMap' ) );
	}
	
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		if ( function_exists( 'vc_map' ) ) {
			vc_map(
				array(
					'name'                      => esc_html__( 'Qode Product List', 'succulents' ),
					'base'                      => $this->base,
					'icon'                      => 'icon-wpb-product-list extended-custom-icon',
					'category'                  => esc_html__( 'by SELECT', 'succulents' ),
					'allowed_container_element' => 'vc_row',
					'params'                    => array(
						array(
							'type'       => 'textfield',
							'param_name' => 'number_of_posts',
							'heading'    => esc_html__( 'Number of Products', 'succulents' )
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'number_of_columns',
							'heading'     => esc_html__( 'Number of Columns', 'succulents' ),
							'value'       => array(
								esc_html__( 'One', 'succulents' )   => '1',
								esc_html__( 'Two', 'succulents' )   => '2',
								esc_html__( 'Three', 'succulents' ) => '3',
								esc_html__( 'Four', 'succulents' )  => '4',
								esc_html__( 'Five', 'succulents' )  => '5',
								esc_html__( 'Six', 'succulents' )   => '6'
							),
							'save_always' => true
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'space_between_items',
							'heading'     => esc_html__( 'Space Between Items', 'succulents' ),
							'value'       => array_flip( succulents_qodef_get_space_between_items_array() ),
							'save_always' => true
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'orderby',
							'heading'     => esc_html__( 'Order By', 'succulents' ),
							'value'       => array_flip( succulents_qodef_get_query_order_by_array( false, array( 'on-sale' => esc_html__( 'On Sale', 'succulents' ) ) ) ),
							'save_always' => true
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'order',
							'heading'     => esc_html__( 'Order', 'succulents' ),
							'value'       => array_flip( succulents_qodef_get_query_order_array() ),
							'save_always' => true
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'taxonomy_to_display',
							'heading'     => esc_html__( 'Choose Sorting Taxonomy', 'succulents' ),
							'value'       => array(
								esc_html__( 'Category', 'succulents' ) => 'category',
								esc_html__( 'Tag', 'succulents' )      => 'tag',
								esc_html__( 'Id', 'succulents' )       => 'id'
							),
							'save_always' => true,
							'description' => esc_html__( 'If you would like to display only certain products, this is where you can select the criteria by which you would like to choose which products to display', 'succulents' )
						),
						array(
							'type'        => 'textfield',
							'param_name'  => 'taxonomy_values',
							'heading'     => esc_html__( 'Enter Taxonomy Values', 'succulents' ),
							'description' => esc_html__( 'Separate values (category slugs, tags, or post IDs) with a comma', 'succulents' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'image_size',
							'heading'    => esc_html__( 'Image Proportions', 'succulents' ),
							'value'      => array(
								esc_html__( 'Default', 'succulents' )        => '',
								esc_html__( 'Original', 'succulents' )       => 'full',
								esc_html__( 'Square', 'succulents' )         => 'square',
								esc_html__( 'Landscape', 'succulents' )      => 'landscape',
								esc_html__( 'Portrait', 'succulents' )       => 'portrait',
								esc_html__( 'Medium', 'succulents' )         => 'medium',
								esc_html__( 'Large', 'succulents' )          => 'large',
								esc_html__( 'Shop Catalog', 'succulents' )   => 'shop_catalog',
								esc_html__( 'Shop Single', 'succulents' )    => 'shop_single',
								esc_html__( 'Shop Thumbnail', 'succulents' ) => 'shop_thumbnail'
							),
							'save_always' => true
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'display_title',
							'heading'    => esc_html__( 'Display Title', 'succulents' ),
							'value'      => array_flip( succulents_qodef_get_yes_no_select_array( false, true ) ),
							'group'      => esc_html__( 'Product Info', 'succulents' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'title_tag',
							'heading'    => esc_html__( 'Title Tag', 'succulents' ),
							'value'      => array_flip( succulents_qodef_get_title_tag( true ) ),
							'dependency' => array( 'element' => 'display_title', 'value' => array( 'yes' ) ),
							'group'      => esc_html__( 'Product Info Style', 'succulents' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'title_transform',
							'heading'    => esc_html__( 'Title Text Transform', 'succulents' ),
							'value'      => array_flip( succulents_qodef_get_text_transform_array( true ) ),
							'dependency' => array( 'element' => 'display_title', 'value' => array( 'yes' ) ),
							'group'      => esc_html__( 'Product Info Style', 'succulents' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'display_category',
							'heading'    => esc_html__( 'Display Category', 'succulents' ),
							'value'      => array_flip( succulents_qodef_get_yes_no_select_array( false, true ) ),
							'group'      => esc_html__( 'Product Info', 'succulents' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'display_excerpt',
							'heading'    => esc_html__( 'Display Excerpt', 'succulents' ),
							'value'      => array_flip( succulents_qodef_get_yes_no_select_array( false ) ),
							'group'      => esc_html__( 'Product Info', 'succulents' )
						),
						array(
							'type'        => 'textfield',
							'param_name'  => 'excerpt_length',
							'heading'     => esc_html__( 'Excerpt Length', 'succulents' ),
							'description' => esc_html__( 'Number of characters', 'succulents' ),
							'dependency'  => array( 'element' => 'display_excerpt', 'value' => array( 'yes' ) ),
							'group'       => esc_html__( 'Product Info Style', 'succulents' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'display_rating',
							'heading'    => esc_html__( 'Display Rating', 'succulents' ),
							'value'      => array_flip( succulents_qodef_get_yes_no_select_array( false ) ),
							'group'      => esc_html__( 'Product Info', 'succulents' )
						),
					)
				)
			);
		}
	}
	
	public function render( $atts, $content = null ) {
		$default_atts = array(
			'number_of_posts'         => '8',
			'number_of_columns'       => '4',
			'space_between_items'     => 'normal',
			'orderby'                 => 'date',
			'order'                   => 'ASC',
			'taxonomy_to_display'     => 'category',
			'taxonomy_values'         => '',
			'image_size'              => 'full',
			'display_title'           => 'yes',
			'title_tag'               => 'h4',
			'title_transform'         => '',
			'display_category'        => 'yes',
			'display_excerpt'         => 'no',
			'excerpt_length'          => '20',
			'display_rating'          => 'no',
		);
		$params       = shortcode_atts( $default_atts, $atts );
		
		$params['class_name']     = 'pli';
		$params['info_position']  = 'info-below-image';
		$params['title_tag']      = ! empty( $params['title_tag'] ) ? $params['title_tag'] : $default_atts['title_tag'];
		
		$additional_params                   = array();
		$additional_params['holder_classes'] = $this->getHolderClasses( $params, $default_atts );
		
		$queryArray                        = $this->generateProductQueryArray( $params );
		$query_result                      = new \WP_Query( $queryArray );
		$additional_params['query_result'] = $query_result;
		
		$params['this_object'] = $this;
		
		$html = succulents_qodef_get_woo_shortcode_module_template_part( 'templates/product-list', 'product-list', '', $params, $additional_params );
		
		return $html;
	}
	
	private function getHolderClasses( $params, $default_atts ) {
		$holderClasses   = array();
		$holderClasses[] = 'qodef-standard-layout';
		$holderClasses[] = ! empty( $params['space_between_items'] ) ? 'qodef-' . $params['space_between_items'] . '-space' : 'qodef-' . $default_atts['space_between_items'] . '-space';
		$holderClasses[] = $this->getColumnNumberClass( $params );
		$holderClasses[] = 'qodef-info-below-image';
		
		return implode( ' ', $holderClasses );
	}
	
	private function getColumnNumberClass( $params ) {
		$columnsNumber = '';
		$columns       = $params['number_of_columns'];
		
		switch ( $columns ) {
			case 1:
				$columnsNumber = 'qodef-one-column';
				break;
			case 2:
				$columnsNumber = 'qodef-two-columns';
				break;
			case 3:
				$columnsNumber = 'qodef-three-columns';
				break;
			case 4:
				$columnsNumber = 'qodef-four-columns';
				break;
			case 5:
				$columnsNumber = 'qodef-five-columns';
				break;
			case 6:
				$columnsNumber = 'qodef-six-columns';
				break;
			default:
				$columnsNumber = 'qodef-four-columns';
				break;
		}
		
		return $columnsNumber;
	}
	
	private function generateProductQueryArray( $params ) {
		$queryArray = array(
			'post_status'         => 'publish',
			'post_type'           => 'product',
			'ignore_sticky_posts' => 1,
			'posts_per_page'      => $params['number_of_posts'],
			'orderby'             => $params['orderby'],
			'order'               => $params['order']
		);
		
		if ( $params['orderby'] === 'on-sale' ) {
			$queryArray['no_found_rows'] = 1;
			$queryArray['post__in']      = array_merge( array( 0 ), wc_get_product_ids_on_sale() );
		}
		
		if ( $params['taxonomy_to_display'] !== '' && $params['taxonomy_to_display'] === 'category' ) {
			$queryArray['product_cat'] = $params['taxonomy_values'];
		}
		
		if ( $params['taxonomy_to_display'] !== '' && $params['taxonomy_to_display'] === 'tag' ) {
			$queryArray['product_tag'] = $params['taxonomy_values'];
		}
		
		if ( $params['taxonomy_to_display'] !== '' && $params['taxonomy_to_display'] === 'id' ) {
			$idArray                = $params['taxonomy_values'];
			$ids                    = explode( ',', $idArray );
			$queryArray['post__in'] = $ids;
		}
		
		return $queryArray;
	}
	
	public function getTitleStyles( $params ) {
		$styles = array();
		
		if ( ! empty( $params['title_transform'] ) ) {
			$styles[] = 'text-transform: ' . $params['title_transform'];
		}
		
		return implode( ';', $styles );
	}
	
	public function getShaderStyles( $params ) {
		$styles = array();
		
		if ( ! empty( $params['shader_background_color'] ) ) {
			$styles[] = 'background-color: ' . $params['shader_background_color'];
		}
		
		return implode( ';', $styles );
	}
	
	public function getTextWrapperStyles( $params ) {
		$styles = array();
		
		if ( ! empty( $params['info_bottom_text_align'] ) ) {
			$styles[] = 'text-align: ' . $params['info_bottom_text_align'];
		}
		
		return implode( ';', $styles );
	}
}