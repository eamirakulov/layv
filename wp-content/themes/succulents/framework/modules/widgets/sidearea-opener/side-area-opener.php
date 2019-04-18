<?php

class SucculentsQodefSideAreaOpener extends SucculentsQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_side_area_opener',
			esc_html__( 'Select Side Area Opener', 'succulents' ),
			array( 'description' => esc_html__( 'Display a "hamburger" icon that opens the side area', 'succulents' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$this->params = array(
			array(
				'type'        => 'colorpicker',
				'name'        => 'icon_color',
				'title'       => esc_html__( 'Side Area Opener Color', 'succulents' ),
				'description' => esc_html__( 'Define color for side area opener', 'succulents' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'icon_hover_color',
				'title'       => esc_html__( 'Side Area Opener Hover Color', 'succulents' ),
				'description' => esc_html__( 'Define hover color for side area opener', 'succulents' )
			),
			array(
				'type'        => 'textfield',
				'name'        => 'widget_margin',
				'title'       => esc_html__( 'Side Area Opener Margin', 'succulents' ),
				'description' => esc_html__( 'Insert margin in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'succulents' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'widget_title',
				'title' => esc_html__( 'Side Area Opener Title', 'succulents' )
			)
		);
	}
	
	public function widget( $args, $instance ) {
		$holder_styles = array();
		
		if ( ! empty( $instance['icon_color'] ) ) {
			$holder_styles[] = 'color: ' . $instance['icon_color'] . ';';
		}
		if ( ! empty( $instance['widget_margin'] ) ) {
			$holder_styles[] = 'margin: ' . $instance['widget_margin'];
		}
		?>
		
		<a class="qodef-side-menu-button-opener qodef-icon-has-hover" <?php echo succulents_qodef_get_inline_attr( $instance['icon_hover_color'], 'data-hover-color' ); ?> href="javascript:void(0)" <?php succulents_qodef_inline_style( $holder_styles ); ?>>
			<?php if ( ! empty( $instance['widget_title'] ) ) { ?>
				<h5 class="qodef-side-menu-title"><?php echo esc_html( $instance['widget_title'] ); ?></h5>
			<?php } ?>
			<span class="qodef-side-menu-icon">
        		<span class="qodef-side-menu-icon-inner">
					<span class="qodef-fm-lines">
						<span class="qodef-fm-line qodef-line-1"></span>
						<span class="qodef-fm-line qodef-line-2"></span>
						<span class="qodef-fm-line qodef-line-3"></span>
					</span>
				</span>
        	</span>
		</a>
	<?php }
}