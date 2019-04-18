<?php

class SucculentsQodefSeparatorWidget extends SucculentsQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_separator_widget',
			esc_html__( 'Select Separator Widget', 'succulents' ),
			array( 'description' => esc_html__( 'Add a separator element to your widget areas', 'succulents' ) )
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
					'normal'     => esc_html__( 'Normal', 'succulents' ),
					'full-width' => esc_html__( 'Full Width', 'succulents' )
				)
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'position',
				'title'   => esc_html__( 'Position', 'succulents' ),
				'options' => array(
					'center' => esc_html__( 'Center', 'succulents' ),
					'left'   => esc_html__( 'Left', 'succulents' ),
					'right'  => esc_html__( 'Right', 'succulents' )
				)
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'border_style',
				'title'   => esc_html__( 'Style', 'succulents' ),
				'options' => array(
					'solid'  => esc_html__( 'Solid', 'succulents' ),
					'dashed' => esc_html__( 'Dashed', 'succulents' ),
					'dotted' => esc_html__( 'Dotted', 'succulents' )
				)
			),
			array(
				'type'  => 'colorpicker',
				'name'  => 'color',
				'title' => esc_html__( 'Color', 'succulents' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'width',
				'title' => esc_html__( 'Width (px or %)', 'succulents' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'thickness',
				'title' => esc_html__( 'Thickness (px)', 'succulents' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'top_margin',
				'title' => esc_html__( 'Top Margin (px or %)', 'succulents' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'bottom_margin',
				'title' => esc_html__( 'Bottom Margin (px or %)', 'succulents' )
			)
		);
	}
	
	public function widget( $args, $instance ) {
		if ( ! is_array( $instance ) ) {
			$instance = array();
		}
		
		//prepare variables
		$params = '';
		
		//is instance empty?
		if ( is_array( $instance ) && count( $instance ) ) {
			//generate shortcode params
			foreach ( $instance as $key => $value ) {
				$params .= " $key='$value' ";
			}
		}
		
		echo '<div class="widget qodef-separator-widget">';
			echo do_shortcode( "[qodef_separator $params]" ); // XSS OK
		echo '</div>';
	}
}