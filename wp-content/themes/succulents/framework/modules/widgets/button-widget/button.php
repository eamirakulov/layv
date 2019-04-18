<?php

class SucculentsQodefButtonWidget extends SucculentsQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_button_widget',
			esc_html__( 'Select Button Widget', 'succulents' ),
			array( 'description' => esc_html__( 'Add button element to widget areas', 'succulents' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$this->params = array(
			array(
				'type'    => 'dropdown',
				'name'    => 'type',
				'title'   => esc_html__( 'Type', 'succulents' ),
				'options' => array(
					'solid'   => esc_html__( 'Solid', 'succulents' ),
					'outline' => esc_html__( 'Outline', 'succulents' ),
					'simple'  => esc_html__( 'Simple', 'succulents' )
				)
			),
			array(
				'type'        => 'dropdown',
				'name'        => 'size',
				'title'       => esc_html__( 'Size', 'succulents' ),
				'options'     => array(
					'small'  => esc_html__( 'Small', 'succulents' ),
					'medium' => esc_html__( 'Medium', 'succulents' ),
					'large'  => esc_html__( 'Large', 'succulents' ),
					'huge'   => esc_html__( 'Huge', 'succulents' )
				),
				'description' => esc_html__( 'This option is only available for solid and outline button type', 'succulents' )
			),
			array(
				'type'    => 'textfield',
				'name'    => 'text',
				'title'   => esc_html__( 'Text', 'succulents' ),
				'default' => esc_html__( 'Button Text', 'succulents' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'link',
				'title' => esc_html__( 'Link', 'succulents' )
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'target',
				'title'   => esc_html__( 'Link Target', 'succulents' ),
				'options' => succulents_qodef_get_link_target_array()
			),
			array(
				'type'  => 'colorpicker',
				'name'  => 'color',
				'title' => esc_html__( 'Color', 'succulents' )
			),
			array(
				'type'  => 'colorpicker',
				'name'  => 'hover_color',
				'title' => esc_html__( 'Hover Color', 'succulents' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'background_color',
				'title'       => esc_html__( 'Background Color', 'succulents' ),
				'description' => esc_html__( 'This option is only available for solid button type', 'succulents' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'hover_background_color',
				'title'       => esc_html__( 'Hover Background Color', 'succulents' ),
				'description' => esc_html__( 'This option is only available for solid button type', 'succulents' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'border_color',
				'title'       => esc_html__( 'Border Color', 'succulents' ),
				'description' => esc_html__( 'This option is only available for solid and outline button type', 'succulents' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'hover_border_color',
				'title'       => esc_html__( 'Hover Border Color', 'succulents' ),
				'description' => esc_html__( 'This option is only available for solid and outline button type', 'succulents' )
			),
			array(
				'type'        => 'textfield',
				'name'        => 'margin',
				'title'       => esc_html__( 'Margin', 'succulents' ),
				'description' => esc_html__( 'Insert margin in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'succulents' )
			)
		);
	}
	
	public function widget( $args, $instance ) {
		$params = '';
		
		if ( ! is_array( $instance ) ) {
			$instance = array();
		}
		
		// Filter out all empty params
		$instance = array_filter( $instance, function ( $array_value ) {
			return trim( $array_value ) != '';
		} );
		
		// Default values
		if ( ! isset( $instance['text'] ) ) {
			$instance['text'] = 'Button Text';
		}
		
		// Generate shortcode params
		foreach ( $instance as $key => $value ) {
			$params .= " $key='$value' ";
		}
		
		echo '<div class="widget qodef-button-widget">';
			echo do_shortcode( "[qodef_button $params]" ); // XSS OK
		echo '</div>';
	}
}