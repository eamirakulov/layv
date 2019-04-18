<?php

class SucculentsQodefImageGalleryWidget extends SucculentsQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_image_gallery_widget',
			esc_html__( 'Select Image Gallery Widget', 'succulents' ),
			array( 'description' => esc_html__( 'Add image gallery element to widget areas', 'succulents' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$this->params = array(
			array(
				'type'  => 'textfield',
				'name'  => 'extra_class',
				'title' => esc_html__( 'Custom CSS Class', 'succulents' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'widget_title',
				'title' => esc_html__( 'Widget Title', 'succulents' )
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'type',
				'title'   => esc_html__( 'Gallery Type', 'succulents' ),
				'options' => array(
					'grid'   => esc_html__( 'Image Grid', 'succulents' ),
					'slider' => esc_html__( 'Slider', 'succulents' )
				)
			),
			array(
				'type'        => 'textfield',
				'name'        => 'images',
				'title'       => esc_html__( 'Image ID\'s', 'succulents' ),
				'description' => esc_html__( 'Add images id for your image gallery widget, separate id\'s with comma', 'succulents' )
			),
			array(
				'type'        => 'textfield',
				'name'        => 'image_size',
				'title'       => esc_html__( 'Image Size', 'succulents' ),
				'description' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size', 'succulents' )
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'enable_image_shadow',
				'title'   => esc_html__( 'Enable Image Shadow', 'succulents' ),
				'options' => succulents_qodef_get_yes_no_select_array()
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'image_behavior',
				'title'   => esc_html__( 'Image Behavior', 'succulents' ),
				'options' => array(
					''            => esc_html__( 'None', 'succulents' ),
					'lightbox'    => esc_html__( 'Open Lightbox', 'succulents' ),
					'custom-link' => esc_html__( 'Open Custom Link', 'succulents' ),
					'zoom'        => esc_html__( 'Zoom', 'succulents' ),
					'grayscale'   => esc_html__( 'Grayscale', 'succulents' )
				)
			),
			array(
				'type'        => 'textarea',
				'name'        => 'custom_links',
				'title'       => esc_html__( 'Custom Links', 'succulents' ),
				'description' => esc_html__( 'Delimit links by comma', 'succulents' )
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'custom_link_target',
				'title'   => esc_html__( 'Custom Link Target', 'succulents' ),
				'options' => succulents_qodef_get_link_target_array()
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'number_of_columns',
				'title'   => esc_html__( 'Number of Columns', 'succulents' ),
				'options' => array(
					'two'   => esc_html__( 'Two', 'succulents' ),
					'three' => esc_html__( 'Three', 'succulents' ),
					'four'  => esc_html__( 'Four', 'succulents' ),
					'five'  => esc_html__( 'Five', 'succulents' ),
					'six'   => esc_html__( 'Six', 'succulents' )
				)
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'space_between_columns',
				'title'   => esc_html__( 'Space Between Items', 'succulents' ),
				'options' => succulents_qodef_get_space_between_items_array()
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'slider_navigation',
				'title'   => esc_html__( 'Enable Slider Navigation Arrows', 'succulents' ),
				'options' => succulents_qodef_get_yes_no_select_array( false )
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'slider_pagination',
				'title'   => esc_html__( 'Enable Slider Pagination', 'succulents' ),
				'options' => succulents_qodef_get_yes_no_select_array( false )
			)
		);
	}
	
	public function widget( $args, $instance ) {
		if ( ! is_array( $instance ) ) {
			$instance = array();
		}
		
		$extra_class      = ! empty( $instance['extra_class'] ) ? $instance['extra_class'] : '';
		$instance['type'] = ! empty( $instance['type'] ) ? $instance['type'] : 'grid';
		
		//prepare variables
		$params = '';
		
		//is instance empty?
		if ( is_array( $instance ) && count( $instance ) ) {
			//generate shortcode params
			foreach ( $instance as $key => $value ) {
				$params .= " $key='$value' ";
			}
		}
		?>
		
		<div class="widget qodef-image-gallery-widget <?php echo esc_html( $extra_class ); ?>">
			<?php
			if ( ! empty( $instance['widget_title'] ) ) {
				echo wp_kses_post( $args['before_title'] ) . esc_html( $instance['widget_title'] ) . wp_kses_post( $args['after_title'] );
			}
			echo do_shortcode( "[qodef_image_gallery $params]" ); // XSS OK
			?>
		</div>
		<?php
	}
}